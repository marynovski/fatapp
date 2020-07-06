<?php

namespace App\Controller;

use App\Core\Controller;
use App\Entity\User;

class HomeController extends Controller
{
    /**
     * Route = "host/public/index.php?route="homepage"
     *
     */
    public function home()
    {

        $user = new User();
        $user->setId(1);
        $user->setUsername('kamistal1');
        $user->setEmail('kamistal1@wp.pl');

        return $this->render("homepage/homepage.html.php", [
            'user' => $user,
            'appName' => 'FatApp'
        ]);
    }
}