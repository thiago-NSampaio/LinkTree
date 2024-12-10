<?php

namespace App\Http\Controllers;


class LogoutController extends Controller
{
    public function __invoke()
    {
        auth()->Auth::logout();
        session()->invalidate();

        return to_route('login');
    }
}
