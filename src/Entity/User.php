<?php

class User
{
    const PHP_DEV = 1;
    const FRONT_END_DEV = 2;
    const ACTIVE = TRUE;
    const DEACTIVATED = FALSE;

    private $id;
    private $username;
    private $email;
    private $password;
    private $name;
    private $surname;
    private $birthDate;
    private $description;
    private $role;
    private $active;
    private $occupation;

    public function __construct()
    {

    }

    public function getAllUsers()
    {
        $users = [
            0 => [
                'id' => 1,
                'username' => 'marynovski',
                'email'    => 'marynovski@fatapp.com',
                'password' => 'dolarydolary',
                'name'     => 'Kamil',
                'surname'  => 'Marynowski',
                'birthDate' => '1997-12-24',
                'description' => 'Pracuję jako PHP developer. Na co dzień zajmuję się rozowojem aplikacji dla firmy, w której pracuje. Głównie tworzę aplikacje w Symfony3. Poza PHP staram się rozwijać umiejętności również z drugie strony czyli front-end. Poza programowanie interesuję się muzyką klasyczną, koleją oraz wspinaczką górską',
                'role'        => 'ROLE_ADMIN',
                'active' => self::ACTIVE,
                'occupation' => self::PHP_DEV,
            ],
            1 => [
                'id' => 2,
                'username' => 'kberg',
                'email'    => 'kberg@fatapp.com',
                'password' => 'dolarydolary',
                'name'     => 'Krystian',
                'surname'  => 'Berg',
                'birthDate' => '2000-07-13',
                'description' => 'Pracuję jako Front-end developer. Na co dzień zajmuję się rozowojem aplikacji dla firmy, w której pracuje. Głównie tworzę aplikacje w Symfony3. Poza PHP staram się rozwijać umiejętności również z drugie strony czyli front-end. Poza programowanie interesuję się muzyką klasyczną, koleją oraz wspinaczką górską',
                'role'        => 'ROLE_ADMIN',
                'active' => self::ACTIVE,
                'occupation' => self::FRONT_END_DEV,
            ],

        ];

        return $users;
    }
}