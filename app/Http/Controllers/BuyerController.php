<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function __construct()
    {

        $this->middleware(['auth', 'role:buyer']);
    }

    public function index()
    {
        return view('buyer.dashboard');
    }


    public function shop()
    {
        return view('buyer.shop'); 
    }
}
