<?php

namespace application\controllers;

use application\core\Controller;
use http\Env\Response;

class AccountController extends Controller {

	public function loginAction() {
		$this->view->render('Вход');
	}

	public function registerAction() {
		$this->view->render('Регистрация');
	}

	public function registrationAction(){
        $input = file_get_contents('php://input');
        $userData = json_decode($input, true);
        echo $userData;
//        var_dump($userData['user_name']);
    }

    public function profileAction(){
        echo "aaaaaaaaaaaaa";
    }

}