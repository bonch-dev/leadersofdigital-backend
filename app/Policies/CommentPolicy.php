<?php

namespace App\Policies;

use App\Comment;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response as AccessResponse;

class CommentPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param $comment
     * @return void
     */
    public function before(User $user, $comment)
    {
        return;
    }

    /**
     * Determine whether the user can view any events.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(?User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the event.
     *
     * @param User $user
     * @param Comment $comment
     * @return mixed
     */
    public function view(?User $user, Comment $comment)
    {
        return true;
    }

    /**
     * Determine whether the user can create events.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the event.
     *
     * @param User $user
     * @param Comment $comment
     * @return mixed
     */
    public function update(User $user, Comment $comment)
    {
        return $comment->user_id === $user->id;
    }

    /**
     * Determine whether the user can delete the event.
     *
     * @param User $user
     * @param Comment $comment
     * @return mixed
     */
    public function delete(User $user, Comment $comment)
    {
        return $comment->user_id === $user->id;
    }

    /**
     * Determine whether the user can restore the event.
     *
     * @param User $user
     * @param Comment $comment
     * @return mixed
     */
    public function restore(User $user, Comment $comment)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the event.
     *
     * @param User $user
     * @param Comment $comment
     * @return mixed
     */
    public function forceDelete(User $user, Comment $comment)
    {
        return false;
    }

    public function karmaOrRate(User $user, Comment $comment): AccessResponse
    {
        return $comment->user_id !== $user->id
            ? AccessResponse::allow()
            : AccessResponse::deny('Вы не можете голосовать за свои комментарии');
    }
}
