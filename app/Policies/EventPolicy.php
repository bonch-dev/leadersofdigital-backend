<?php

namespace App\Policies;

use App\Event;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response as AccessResponse;

class EventPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param $event
     * @return void
     */
    public function before(User $user, $event)
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
     * @param Event $event
     * @return mixed
     */
    public function view(?User $user, Event $event)
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
     * @param Event $event
     * @return mixed
     */
    public function update(User $user, Event $event)
    {
        return $event->user_id === $user->id;
    }

    /**
     * Determine whether the user can delete the event.
     *
     * @param User $user
     * @param Event $event
     * @return mixed
     */
    public function delete(User $user, Event $event)
    {
        return $event->user_id === $user->id;
    }

    /**
     * Determine whether the user can restore the event.
     *
     * @param User $user
     * @param Event $event
     * @return mixed
     */
    public function restore(User $user, Event $event)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the event.
     *
     * @param User $user
     * @param Event $event
     * @return mixed
     */
    public function forceDelete(User $user, Event $event)
    {
        return false;
    }

    public function comment(User $user, Event $event)
    {
        return AccessResponse::allow();
    }

    public function karmaOrRate(User $user, Event $event): AccessResponse
    {
        return $event->user_id !== $user->id
            ? AccessResponse::allow()
            : AccessResponse::deny('Вы не можете голосовать за свои инициативы или обращения');
    }
}
