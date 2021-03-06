<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Event;
use App\Http\Requests\CreateCommentRequest;
use App\Http\Requests\EventCreateRequest;
use App\Http\Requests\EventUpdateRequest;
use App\Http\Resources\CommentResource;
use App\Http\Resources\EventResource;
use App\KarmaItem;
use App\RateItem;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

/**
 * @group Event
 *
 * Class EventController
 * @package App\Http\Controllers
 */
class EventController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Event::class);
    }

    /**
     * Display a listing of the events.
     *
     * @return AnonymousResourceCollection|Response
     */
    public function index()
    {
        return EventResource::collection(Event::paginate());
    }

    /**
     * Store a newly created event in storage.
     * @authenticated
     *
     * @param EventCreateRequest $request
     * @return EventResource
     */
    public function store(EventCreateRequest $request)
    {
        $user = $request->user('api');

        $event = Event::make($request->except(['photos']));

        $event->status = Event::MODERATED;

        $event->user()->associate($user);

        $event->save();

        $event->detachMedia();

        $event->attachMedia($request->photos);

        return EventResource::make($event);
    }

    /**
     * Display the specified event.
     *
     * @param Event $event
     * @return EventResource
     */
    public function show(Event $event)
    {
        return EventResource::make(
            $event->load([
                'comments',
            ])
        );
    }

    /**
     * Update the specified event in storage.
     * @authenticated
     *
     * @param EventUpdateRequest $request
     * @param Event $event
     * @return EventResource
     */
    public function update(EventUpdateRequest $request, Event $event)
    {
        $event->fill($request->except(['photos']));

        $event->detachMedia();

        $event->attachMedia($request->photos);

        $event->save();

        return EventResource::make($event);
    }

    /**
     * Store comment about event
     * @authenticated
     *
     * @param CreateCommentRequest $request
     * @param Event $event
     * @return CommentResource
     * @throws AuthorizationException
     */
    public function comment(CreateCommentRequest $request, Event $event)
    {
        $this->authorize('comment', [Event::class, $event]);

        $comment = Comment::make($request->validated());

        $comment->user()->associate($request->user());

        $comment->commentable()->associate($event);

        $comment->save();

        return CommentResource::make($comment);
    }

    /**
     * Karma up event
     * @authenticated
     *
     * @param Request $request
     * @param Event $event
     * @return array
     * @throws AuthorizationException
     */
    public function karmaUp(Request $request, Event $event)
    {
        $this->authorize('karmaOrRate', [Event::class, $event]);

        $user = $request->user('api');

        /** @var KarmaItem $karmaItem */
        $karmaItem = $event->karma_items()->firstOrNew(
            ['user_id' => $user->id]
        );

        $karmaItem->value = 1;

        $karmaItem->save();

        return [
            'karma' => $event->total_karma,
        ];
    }

    /**
     * Karma down event
     * @authenticated
     *
     * @param Request $request
     * @param Event $event
     * @return array
     * @throws AuthorizationException
     */
    public function karmaDown(Request $request, Event $event)
    {
        $this->authorize('karmaOrRate', [Event::class, $event]);

        $user = $request->user('api');

        /** @var KarmaItem $karmaItem */
        $karmaItem = $event->karma_items()->firstOrNew(
            ['user_id' => $user->id]
        );

        $karmaItem->value = -1;

        $karmaItem->save();

        return [
            'karma' => $event->total_karma,
        ];
    }

    /**
     * Rate event
     * @authenticated
     *
     * @param Request $request
     * @param Event $event
     * @return string[]
     * @throws AuthorizationException
     */
    public function rate(Request $request, Event $event)
    {
        $this->authorize('karmaOrRate', [Event::class, $event]);

        $user = $request->user('api');

        /** @var RateItem $karmaItem */
        $event->rate_items()->firstOrCreate(
            ['user_id' => $user->id]
        );

        return [
            'message' => "rated event $event->id successfuly",
            'rate' => $event->rate_items()->count(),
        ];
    }

    /**
     * Unrate event
     * @authenticated
     *
     * @param Request $request
     * @param Event $event
     * @return string[]
     * @throws Exception
     */
    public function unrate(Request $request, Event $event)
    {
        $this->authorize('karmaOrRate', [Event::class, $event]);

        $user = $request->user('api');

        /** @var RateItem $rateItem */
        $rateItem = $event->rate_items()->where('user_id', $user->id)->firstOrFail();

        $rateItem->delete();

        return [
            'message' => "unrated event $event->id successfuly",
            'rate' => $event->rate_items()->count(),
        ];
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
