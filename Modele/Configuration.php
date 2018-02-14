<?php

/**
 * Created by PhpStorm.
 * User: samy
 * Date: 6/26/17
 * Time: 1:30 PM
 */
class Configuration
{
    public static function getConnexion()
    {

        try {
            $pdo = new PDO('mysql:host=db690127276.db.1and1.com;dbname=db690127276', 'dbo690127276', 'Lubumtech(2017)');
            return $pdo;
        }catch (Exception $e)
        {
            die($e->getMessage());

        }



    }



}