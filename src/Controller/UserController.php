<?php


namespace App\Controller;


use App\Core\Controller;
use App\Repository\UserRepository;

class UserController extends Controller
{
    /**
     * Route = "host/public/index.php?route=users_list
     */
    public function list()
    {
        /** @var UserRepository $uRepo */
        $uRepo = new UserRepository();
        $user = $uRepo->findAll();

        return $this->render('users/list.html.php', [
            'user' => $user,
        ]);
    }
}