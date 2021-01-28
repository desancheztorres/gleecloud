<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;

class LoginController extends Controller {

    public function __invoke(LoginRequest $request)
    {
        if(!auth()->attempt($request->only('email', 'password'))) {
            throw new AuthenticationException();
        }
    }
}
