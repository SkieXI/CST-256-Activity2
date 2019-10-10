<?php
namespace App\Services\business;

use App\Models\UserModel;
use App\Services\Data\SecurityDAO;

class SecurityService
{
    public function login(UserModel $user)
    {
        $UM = $user;
        $SD = new SecurityDAO();
        
        $UM = $SD->findbyUser($UM);
        if (count($UM) == 0)
        {
            return view('LoginFailed');
        }
        else return view("LoginPassed")->with($user);
    }
}

