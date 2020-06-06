<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;

/**
 * @group User
 *
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(User::class);
    }

    /**
     * Display the specified user.
     *
     * @param User $user
     * @return UserResource
     */
    public function show(User $user)
    {
        return UserResource::make($user);
    }

    /**
     * Display info about me
     * @authenticated
     *
     * @param Request $request
     * @return UserResource
     */
    public function me(Request $request)
    {
        return UserResource::make($request->user('api'));
    }
}
