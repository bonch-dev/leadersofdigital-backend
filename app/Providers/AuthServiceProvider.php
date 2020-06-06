<?php

namespace App\Providers;

use App\Event;
use App\User;
use App\Initiative;
use App\Post;
use App\Comment;
use App\Policies\EventPolicy;
use App\Policies\UserPolicy;
use App\Policies\PostPolicy;
use App\Policies\InitiativePolicy;
use App\Policies\CommentPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [

        User::class => UserPolicy::class,
        Event::class => EventPolicy::class,
        Initiative::class => InitiativePolicy::class,
        Post::class => PostPolicy::class,
        Comment::class => CommentPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
