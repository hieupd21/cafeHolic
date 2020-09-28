<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddUserRequest;
use App\User;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function postSignUp(AddUserRequest $request) {
        $user = new User;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->address = $request->address;
        $user->phone = $request->phone;

        $user->save();

        return redirect()->route('getLogin');
    }
}
