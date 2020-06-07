<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Comment;
use App\Event;
use App\Http\Requests\QuestionAnswerRequest;
use App\Question;
use App\Http\Requests\CreateCommentRequest;
use App\Http\Requests\QuestionCreateRequest;
use App\Http\Requests\QuestionUpdateRequest;
use App\Http\Resources\CommentResource;
use App\Http\Resources\QuestionResource;
use App\KarmaItem;
use App\QuestionItem;
use App\RateItem;
use App\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

/**
 * @group Question
 *
 * Class QuestionController
 * @package App\Http\Controllers
 */
class QuestionController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Question::class);
    }

    /**
     * Display a listing of the events.
     *
     * @return AnonymousResourceCollection|Response
     */
    public function index()
    {
        return QuestionResource::collection(Question::paginate());
    }

    /**
     * Store a newly created event in storage.
     * @authenticated
     *
     * @param QuestionCreateRequest $request
     * @return QuestionResource
     */
    public function store(QuestionCreateRequest $request)
    {
        $user = $request->user('api');

        /** @var Question $question */
        $question = Question::make($request->except(['photos', 'items']));

        $question->status = Event::MODERATED;

        $question->user()->associate($user);

        $question->detachMedia();

        $question->attachMedia($request->photos);

        $question->save();

        $question->question_items()->createMany($request->get('items'));

        return QuestionResource::make($question);
    }

    /**
     * Display the specified event.
     *
     * @param Question $question
     * @return QuestionResource
     */
    public function show(Question $question)
    {
        return QuestionResource::make(
            $question->load([
                'comments',
            ])
        );
    }

    /**
     * Update the specified event in storage.
     * @authenticated
     *
     * @param QuestionUpdateRequest $request
     * @param Question $question
     * @return QuestionResource
     */
    public function update(QuestionUpdateRequest $request, Question $question)
    {
        $question->fill($request->except(['photos']));

        $question->detachMedia();

        $question->attachMedia($request->photos);

        $question->save();

        return QuestionResource::make($question);
    }

    /**
     * Store comment about event
     * @authenticated
     *
     * @param CreateCommentRequest $request
     * @param Question $question
     * @return CommentResource
     * @throws AuthorizationException
     */
    public function comment(CreateCommentRequest $request, Question $question)
    {
        $this->authorize('comment', [Question::class, $question]);

        $comment = Comment::create($request->validated());

        $comment->user()->associate($request->user());

        $comment->commentable()->associate($question);

        return CommentResource::make($comment);
    }

    /**
     * Karma up event
     * @authenticated
     *
     * @param Request $request
     * @param Question $question
     * @return array
     * @throws AuthorizationException
     */
    public function karmaUp(Request $request, Question $question)
    {
        $this->authorize('karmaOrRate', [Question::class, $question]);

        $user = $request->user('api');

        /** @var KarmaItem $karmaItem */
        $karmaItem = $question->karma_items()->firstOrNew(
            ['user_id' => $user->id]
        );

        $karmaItem->value = 1;

        $karmaItem->save();

        return [
            'karma' => $question->total_karma,
        ];
    }

    /**
     * Karma down event
     * @authenticated
     *
     * @param Request $request
     * @param Question $question
     * @return array
     * @throws AuthorizationException
     */
    public function karmaDown(Request $request, Question $question)
    {
        $this->authorize('karmaOrRate', [Question::class, $question]);

        $user = $request->user('api');

        /** @var KarmaItem $karmaItem */
        $karmaItem = $question->karma_items()->firstOrNew(
            ['user_id' => $user->id]
        );

        $karmaItem->value = -1;

        $karmaItem->save();

        return [
            'karma' => $question->total_karma,
        ];
    }

    /**
     * Answer to question
     * @authenticated
     *
     * @param QuestionAnswerRequest $request
     * @param Question $question
     * @return QuestionResource
     * @throws AuthorizationException
     */
    public function answer(QuestionAnswerRequest $request, Question $question)
    {
        $this->authorize('answer', [Question::class, $question]);

        /** @var User $user */
        $user = $request->user('api');

        $questionItemId = $request->question_item_id;

        /** @var Answer $answer */
        $answer = Answer::firstOrNew([
            'user_id' => $user->id
        ]);

        $answer->count = $user->influence;

        $answer->question_item_id = $questionItemId;

        $answer->question_id = $question->id;

        $answer->save();

        return QuestionResource::make($question);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
