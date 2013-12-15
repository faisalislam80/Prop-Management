<?php

namespace Manager;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use BaseController;
use Illuminate\Support\Facades\Input;

class ManagerController extends BaseController {

    /**
     * Redirect to 'manager/login'
     * @return mixed
     */
    public function getIndex() {
        return Redirect::to('manager/login');
    }

    /**
     * Manager Login form
     * @return mixed
     */
    public function getLogin() {
        return LoginController::isLoggedIn() == true ? Redirect::to('dashboard') : View::make('manager/login/login');
    }


    public function postLogin() {

        $username = Input::get('username');
        $password = Input::get('password');

        $login = new LoginController();
        return $login->login($username,$password) == true ? Redirect::to('dashboard') : Redirect::to('manager/login');
    }

    public function getDashboard() {



    }

    public function getLogout() {

        return LoginController::logout() === true ? Redirect::to('manager/login') : null;

    }
}
