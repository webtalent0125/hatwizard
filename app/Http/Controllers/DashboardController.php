<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return Inertia::render('Dashboard/Index');
    }
    public function address()
    {
        return Inertia::render('Dashboard/Address');
    }
    public function account()
    {
        return Inertia::render('Dashboard/Account');
    }
}
