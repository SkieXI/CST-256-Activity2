<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class WhatsMyName extends Controller
{
    public function index(Request $request)
    {
        $firstName=$request->input('firstname');
        $lastName=$request->input('lastname');
        
        echo "Your name is: " . $firstName . " " . $lastName;
        
        echo '<br>';
        
        
        $path=$request->path();
        echo'PathMethod:'.$path;
        echo '<br>';
        
        $url=$request->url();
        echo 'URL method:'.$url;
        echo '<br>';
        
        $data = ['firstName' => $firstName, 'lastName' => $lastName];
        return view('thatswhoiam')->with($data);
        
    }
}
