<?php


namespace app\controllers;


use anup\phpmvc\Application;
use anup\phpmvc\Controller;
use anup\phpmvc\Request;

class HomeController extends Controller
{
    public function home(){
        $params = [
            'name' =>'Anup Shrestha'
        ];
        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }
    public function handleContact(Request $request){
        $body = $request->getBody();
        echo "<pre>";
        var_dump($body);
        echo "</pre>";

        exit;

//        return Application::$app->router->renderContent('Handling Submitted Data');
    }
}