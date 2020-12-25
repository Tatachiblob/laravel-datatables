<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Return user data
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function index (Request $request)
    {
        $users = User::all();

        return UserResource::collection($users);
    }

}
