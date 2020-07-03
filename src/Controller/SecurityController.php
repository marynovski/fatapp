<?php


namespace App\Controller;


use App\Core\Controller;


class SecurityController extends Controller
{
    /**
     * Route = "host/public/index.php?route="login"
     */
    public function login()
    {

        return $this->render('security/login.html.php', []);
    }
}