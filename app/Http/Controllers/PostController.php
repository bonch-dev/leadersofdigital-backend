<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Event;
use App\Http\Requests\CreateCommentRequest;
use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Http\Resources\CommentResource;
use App\Http\Resources\PostResource;
use App\KarmaItem;
use App\Post;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

/**
 * @group Post
 *
 * Class PostController
 * @package App\Http\Controllers
 */
class PostController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Post::class);
    }

    /**
     * Display a listing of the Posts.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return PostResource::collection(Post::paginate());
    }

    /**
     * Store a newly created Post in storage.
     * @authenticated
     *
     * @param PostCreateRequest $request
     * @return PostResource
     */
    public function store(PostCreateRequest $request)
    {
        $user = $request->user('api');

        $post = Post::create($request->except(['photos']));

        $post->user()->associate($user);

        $post->detachMedia();

        $post->attachMedia($request->photos);

        return PostResource::make($post);
    }

    /**
     * Display the specified Post.
     *
     * @param Post $post
     * @return PostResource
     */
    public function show(Post $post)
    {
        return PostResource::make($post);
    }

    /**
     * Update the specified resource in storage.
     * @authenticated
     *
     * @param PostUpdateRequest $request
     * @param Post $post
     * @return PostResource
     */
    public function update(PostUpdateRequest $request, Post $post)
    {
        $post->fill($request->except(['photos']));

        $post->detachMedia();

        $post->attachMedia($request->photos);

        $post->save();

        return PostResource::make($post);
    }

    /**
     * Store comment about event
     * @authenticated
     *
     * @param CreateCommentRequest $request
     * @param Post $post
     * @return CommentResource
     * @throws AuthorizationException
     */
    public function comment(CreateCommentRequest $request, Post $post)
    {
        $this->authorize('comment', [Post::class, $post]);

        $comment = Comment::create($request->validated());

        $comment->commentable()->associate($post);

        return CommentResource::make($comment);
    }

    /**
     * Karma up post
     * @authenticated
     *
     * @param Request $request
     * @param Post $post
     * @return bool
     * @throws AuthorizationException
     */
    public function karmaUp(Request $request, Post $post)
    {
        $this->authorize('karmaOrRate', [Post::class, $post]);

        $user = $request->user('api');

        /** @var KarmaItem $karmaItem */
        $karmaItem = $post->karma_items()->firstOrNew(
            ['user_id' => $user->id]
        );

        $karmaItem->value = 1;

        $karmaItem->save();

        return true;
    }

    /**
     * Karma down post
     * @authenticated
     *
     * @param Request $request
     * @param Post $post
     * @return bool
     * @throws AuthorizationException
     */
    public function karmaDown(Request $request, Post $post)
    {
        $this->authorize('karmaOrRate', [Post::class, $post]);

        $user = $request->user('api');

        /** @var KarmaItem $karmaItem */
        $karmaItem = $post->karma_items()->firstOrNew(
            ['user_id' => $user->id]
        );

        $karmaItem->value = -1;

        $karmaItem->save();

        return true;
    }

    /**
     * Remove the specified post from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
