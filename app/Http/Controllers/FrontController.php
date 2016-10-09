<?php

namespace Ceidin\Http\Controllers;

use Illuminate\Http\Request;

use Ceidin\Http\Requests;

class FrontController extends Controller{
    
    public function admin(){
    	return view('front.admin');
    }    
}
