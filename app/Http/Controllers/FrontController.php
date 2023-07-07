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
}
