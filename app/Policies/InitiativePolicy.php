<?php

namespace App\Policies;

use App\Initiative;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response as AccessResponse;

class InitiativePolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param $initiative
     * @return void
     */
    public function before(User $user, $initiative)
    {
        return;
    }

    /**
     * Determine whether the user can view any initiatives.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(?User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the initiative.
     *
     * @param User $user
     * @param Initiative $initiative
     * @return mixed
     */
    public function view(?User $user, Initiative $initiative)
    {
        return true;
    }

    /**
     * Determine whether the user can create initiatives.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the initiative.
     *
     * @param User $user
     * @param Initiative $initiative
     * @return mixed
     */
    public function update(User $user, Initiative $initiative)
    {
        return $initiative->user_id === $user->id;
    }

    /**
     * Determine whether the user can delete the initiative.
     *
     * @param User $user
     * @param Initiative $initiative
     * @return mixed
     */
    public function delete(User $user, Initiative $initiative)
    {
        return $initiative->user_id === $user->id;
    }

    /**
     * Determine whether the user can restore the initiative.
     *
     * @param User $user
     * @param Initiative $initiative
     * @return mixed
     */
    public function restore(User $user, Initiative $initiative)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the initiative.
     *
     * @param User $user
     * @param Initiative $initiative
     * @return mixed
     */
    public function forceDelete(User $user, Initiative $initiative)
    {
        return false;
    }

    public function karmaOrRate(User $user, Initiative $initiative): AccessResponse
    {
        return $initiative->user_id !== $user->id
            ? AccessResponse::allow()
            : AccessResponse::deny('Вы не можете голосовать за свои инициативы или обращения');
    }
}
