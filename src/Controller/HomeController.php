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
        return $this->render("homepage/homepage.html.php", []);
    }
}