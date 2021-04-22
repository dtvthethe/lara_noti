<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class DashboardController extends BaseController
{
    use AuthorizesRequests;

    /**
     * Dashboard.
     */
    public function index()
    {
        return view('dashboard');
    }
}
