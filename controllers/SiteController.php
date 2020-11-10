<?php


namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

/**
 * Class SiteController
 * @package app\controllers
 */

class SiteController extends Controller
{
    public function home(){
        $params = [
            'name' => "TheKrissz"
        ];
        return $this->render('home', $params);
    }

    public function contact(){
        $params = [
            'name' => "TheKrissz"
        ];
        return $this->render('contact');
    }

    public function handleContact(Request $request){
        $body = $request->getBody();
        var_dump($body);
        return 'Handling submitted data';
    }
}