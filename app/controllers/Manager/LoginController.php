<?php

namespace Manager;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController {

    public function login($username,$password) {

        $arrManagerUser = ManagerUser::where('username', '=', $username)->get()->first();

        if(Hash::check($password,$arrManagerUser['password']))
        {
            Session::put('loggedIn',true);
            Session::put('managerUser',$arrManagerUser['name']);
            Session::put('managerEmail',$arrManagerUser['email']);
            Session::put('managerId',$arrManagerUser['id']);
            return true;
        }
        else
        {
            return false;
        }

    }

    public static function logout() {
        Session::flush();
        return true;
    }

    public static function isLoggedIn() {

        if(Session::has('loggedIn')) {
            return true;
        }
        return false;
    }

} 