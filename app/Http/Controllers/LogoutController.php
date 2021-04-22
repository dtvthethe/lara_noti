<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class LogoutController extends Controller
{
    use AuthorizesRequests;

    /**
     * Logout.
     */
    public function destroy()
    {
        Auth::logout();

        return Redirect::to('login');
    }
}
