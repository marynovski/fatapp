<?php


abstract class Repository extends Database implements DatabaseInterface
{
    public function getAllUsers()
    {
        $query = 'SELECT * users WHERE active = 1';
        return var_dump($query);
    }
}