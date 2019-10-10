<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Services\business\SecurityService;

class LoginController extends Controller
{
    
    public function index(Request $request)
    {
        
        $username=$request->input('username');
        $password=$request->input('password');
        
        //echo "Your name is: " . $firstName . " " . $lastName;
        
        echo '<br>';
        
        $UM = new UserModel($username, $password);
       
        $SD = new SecurityService();
        
        $UM = $SD->login($UM);//$SD->findbyUser($request);
        if (($UM))
        {
            return view('LoginFailed');
        }
        else return view("LoginPassed")->with($UM);
        
        
    }
}