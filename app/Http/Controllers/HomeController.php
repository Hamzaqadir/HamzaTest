<?php

namespace App\Http\Controllers;

use App\Commons;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(auth()->user()->role_id == Commons::ADMIN) {
            return view('admin.home');
        }
        else if(auth()->user()->role_id == Commons::USER) {

            $products = auth()->user()->products()->get();
            return view('users.home', compact('products'));
        }
    }
}
