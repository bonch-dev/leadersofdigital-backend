<?php

namespace App\Http\Controllers;

use App\Comment;
use App\KarmaItem;
use App\Post;
use Illuminate\Http\Request;

/**
 * @group Comment
 *
 * Class CommentController
 * @package App\Http\Controllers
 */
class CommentController extends Controller
{
    /**
     * Down karma to comment
     * @authenticated
     *
     * @param Request $request
     * @param Comment $comment
     * @return bool
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function karmaUp(Request $request, Comment $comment)
    {
        $this->authorize('karmaOrRate', [Comment::class, $comment]);

        $user = $request->user('api');

        /** @var KarmaItem $karmaItem */
        $karmaItem = $comment->karma_items()->firstOrNew(
            ['user_id' => $user->id]
        );

        $karmaItem->value = 1;

        $karmaItem->save();

        return true;
    }

    /**
     * Up karma to comment
     * @authenticated
     *
     * @param Request $request
     * @param Comment $comment
     * @return bool
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function karmaDown(Request $request, Comment $comment)
    {
        $this->authorize('karmaOrRate', [Comment::class, $comment]);

        $user = $request->user('api');

        /** @var KarmaItem $karmaItem */
        $karmaItem = $comment->karma_items()->firstOrNew(
            ['user_id' => $user->id]
        );

        $karmaItem->value = -1;

        $karmaItem->save();

        return true;
    }
}
