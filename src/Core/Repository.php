<?php


namespace App\Core;


abstract class Repository
{
    public function findAll(string $entityClass, string $tableClass)
    {
        $query = "SELECT * FROM $tableClass";
    }

    public function findOneBy(string $entityClass, array $parameters)
    {


        return $object;
    }

    public function findBy()
    {

    }
}