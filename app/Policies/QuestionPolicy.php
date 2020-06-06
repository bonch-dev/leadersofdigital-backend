<?php

namespace App\Policies;

use App\Question;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response as AccessResponse;

class QuestionPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param $question
     * @return void
     */
    public function before(User $user, $question)
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
     * @param Question $question
     * @return mixed
     */
    public function view(?User $user, Question $question)
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
     * @param Question $question
     * @return mixed
     */
    public function update(User $user, Question $question)
    {
        return $question->user_id === $user->id;
    }

    /**
     * Determine whether the user can delete the event.
     *
     * @param User $user
     * @param Question $question
     * @return mixed
     */
    public function delete(User $user, Question $question)
    {
        return $question->user_id === $user->id;
    }

    /**
     * Determine whether the user can restore the event.
     *
     * @param User $user
     * @param Question $question
     * @return mixed
     */
    public function restore(User $user, Question $question)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the event.
     *
     * @param User $user
     * @param Question $question
     * @return mixed
     */
    public function forceDelete(User $user, Question $question)
    {
        return false;
    }

    public function comment(User $user, Question $question)
    {
        return AccessResponse::allow();
    }

    public function karmaOrRate(User $user, Question $question): AccessResponse
    {
        return $question->user_id !== $user->id
            ? AccessResponse::allow()
            : AccessResponse::deny('Вы не можете голосовать за свои инициативы или обращения');
    }

    public function answer(User $user, Question $question): AccessResponse
    {
        return AccessResponse::allow();
    }
}
