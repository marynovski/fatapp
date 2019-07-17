<?php

class User
{
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

    public function __construct($id, $username, $email, $password, $name, $surname, $birthDate, $description, $role, $active, $occupation)
    {
        $this->id           = $id;
        $this->username     = $username;
        $this->email        = $email;
        $this->password     = $password;
        $this->name         = $name;
        $this->surname      = $surname;
        $this->birthDate    = $birthDate;
        $this->description  = $description;
        $this->role         = $role;
        $this->active       = $active;
        $this->occupation   = $occupation;
    }
}