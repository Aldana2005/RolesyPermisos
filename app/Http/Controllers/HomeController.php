<?php

namespace App\Http\Controllers;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function prueba()
    {
        return view('prueba');
    }

    public function sector()
    {
        return view('sector');
    }

    public function producto()
    {
        $data=['title'=> 'Productos Sector Agricola'];  
        return view('producto',$data);
    }
     
     public function instructor()
    {
        return view('instructor');
    }
   
    
}
