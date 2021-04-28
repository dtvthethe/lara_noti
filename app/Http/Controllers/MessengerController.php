<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class MessengerController extends Controller
{
    use AuthorizesRequests;

    /**
     * Login.
     */
    public function index()
    {
        return view('messenger.index');
    }
}
