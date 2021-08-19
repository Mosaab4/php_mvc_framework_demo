<?php

namespace App\Controllers;

use App\Core\Application;
use App\Core\Controller;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name'  =>  'mosaab'
        ];

        return $this->render('home' , $params);
    }


    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContact()
    {
        return 'Post request';
    }
}