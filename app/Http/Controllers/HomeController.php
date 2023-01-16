<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * create a new controller instant.
     * 
     * @return void
     */
     
    //  public function __construct(){
    //      $this->middleware('auth');
    //  }
    
     public function __invoke(Request $request)
    {
        
        return view('frontend.index');
    }
     
   
     
     /**
      * show the aplication dashboard.
      * @return \Illuminate\Contracts\Support|Renderable
      */
    //   public function index(){
    //       return view('home');
    //   }
     
     
}