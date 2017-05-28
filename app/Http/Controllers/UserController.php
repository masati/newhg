<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showProfile($id = null)
    {
        $title = 'Профиль пользователя';

        if (is_null($id) or $id == Auth::user()->id) {
            $id = Auth::user()->id;
            $title = 'Мой профиль';
        }
        $profile = User::find($id);

        if (is_null($profile)) {
                //abort(404, 'User not found');
            $title = 'Пользователь не существует';
        }
        return view('users.profile', ['profile' => $profile, 'title' => $title]);
    }
}
