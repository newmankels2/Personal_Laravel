<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    //
    public function index(){
        echo "this is from the controller";
        return view('user');
    }

}
