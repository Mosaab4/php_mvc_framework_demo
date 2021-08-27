<?php

namespace App\Controllers;

use Mosaab\MVC\Application;
use Mosaab\MVC\Controller;
use Mosaab\MVC\Request;
use Mosaab\MVC\Response;
use App\Models\ContactForm;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => 'mosaab'
        ];

        return $this->render('home', $params);
    }


    public function contact(Request $request, Response $response)
    {
        $contact = new ContactForm();

        if ($request->isPost()) {
            $contact->loadData($request->getBody());
            if ($contact->validate() ) {
                Application::$app->session->setFlash('success', 'Thanks for contacting us');
                $response->redirect('/contact');
            }
        }

        return $this->render('contact',[
            'model' => $contact
        ]);
    }
}