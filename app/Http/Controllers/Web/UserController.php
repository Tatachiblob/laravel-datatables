<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Display list of users
     *
     * @param Illuminate\Http\Request $request
     */
    public function index(Request $request)
    {
        $users = User::take(50)->get();

        return view('pages.users.index')
            ->with([
                'users' => $users,
            ]);
    }

}
