<?php

namespace App\Controller;

use App\Core\Controller;

class HomeController extends Controller
{
    /**
     * Route = "host/public/index.php?route="homepage"
     *
     * @return string
     */
    public function home()
    {

        $name = "Test name";

        return $this->render("homepage/homepage.html.php", [
            'testName' => $name,
        ]);
    }
}