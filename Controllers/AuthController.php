<?php

namespace App\Controllers;

use App\Core\Application;
use App\Core\Controller;
use App\Core\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        $this->setLayout('auth');

        $user = new User();

        if ($request->isPost()) {
            $user->loadData($request->getBody());

            if ($user->validate() && $user->save()) {
                Application::$app->session->setFlash('success' , 'Thanks for registering');
                Application::$app->response->redirect('/');
                exit;
            }


            return $this->render('register', [
                'model' => $user
            ]);
        }


        return $this->render('register', [
            'model' => $user
        ]);
    }
}