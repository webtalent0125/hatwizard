<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontController extends Controller
{
    public function index()
    {
        return Inertia::render('Front/Home');
    }
    public function order()
    {
        return Inertia::render('Front/Order');
    }

    public function order1()
    {
        return Inertia::render('Front/Order1');
    }

    public function order2()
    {
        return Inertia::render('Front/Order2');
    }
    public function orderStatus()
    {
        return Inertia::render('Front/OrderStatus');
    }
    public function about()
    {
        return Inertia::render('Front/About');
    }
    public function faq()
    {
        return Inertia::render('Front/Faq');
    }
    public function contact()
    {
        return Inertia::render('Front/Contact');
    }
    public function returns()
    {
        return Inertia::render('Front/Returns');
    }
    public function terms()
    {
        return Inertia::render('Front/Terms');
    }
    public function policy()
    {
        return Inertia::render('Front/Policy');
    }
}
