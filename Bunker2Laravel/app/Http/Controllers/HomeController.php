<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Data;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$view = view('home');
		
		//Get all data from DB
		$view->datas = Data::latest()->get();
        return $view;
    }
}
