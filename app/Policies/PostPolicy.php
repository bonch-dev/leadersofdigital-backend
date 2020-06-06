<?php

namespace App\Policies;

use App\Post;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response as AccessResponse;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param $post
     * @return void
     */
    public function before(User $user, $post)
    {
        return;
    }

    /**
     * Determine whether the user can view any posts.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(?User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the post.
     *
     * @param User $user
     * @param Post $post
     * @return mixed
     */
    public function view(?User $user, Post $post)
    {
        return true;
    }

    /**
     * Determine whether the user can create posts.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the post.
     *
     * @param User $user
     * @param Post $post
     * @return mixed
     */
    public function update(User $user, Post $post)
    {
        return $post->user_id === $user->id;
    }

    /**
     * Determine whether the user can delete the post.
     *
     * @param User $user
     * @param Post $post
     * @return mixed
     */
    public function delete(User $user, Post $post)
    {
        return $post->user_id === $user->id;
    }

    /**
     * Determine whether the user can restore the post.
     *
     * @param User $user
     * @param Post $post
     * @return mixed
     */
    public function restore(User $user, Post $post)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the post.
     *
     * @param User $user
     * @param Post $post
     * @return mixed
     */
    public function forceDelete(User $user, Post $post)
    {
        return false;
    }

    public function comment(User $user, Post $post)
    {
        return AccessResponse::allow();
    }

    public function karmaOrRate(User $user, Post $post): AccessResponse
    {
        return $post->user_id !== $user->id
            ? AccessResponse::allow()
            : AccessResponse::deny('Вы не можете голосовать за свои записи');
    }
}
