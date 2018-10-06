<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // 追加

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        
        return view('users.index', [
            'users' => $users,
        ]);
    }

    public function show($id)
    {
        $user = User::find($id);
        if (\Auth::id() == $id) {
            return view('users.show', [
            'user' => $user,
            ]);
        }else {
            return view('users/erroruser');
        }
    }
    
}