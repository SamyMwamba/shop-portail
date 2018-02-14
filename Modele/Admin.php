<?php

/**
 * Created by PhpStorm.
 * User: samy
 * Date: 7/24/17
 * Time: 4:38 AM
 */
require_once 'Configuration.php';
class Admin
{

    private $id;
    private $username;
    private $password;

    /**
     * Admin constructor.
     * @param $id
     * @param $username
     * @param $password
     */
    public function __construct($id, $username, $password)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public static function login($username, $password)
    {
        $tableauadmin=array();
        $connexion=Configuration::getConnexion();
        $sql="select * from mini555 WHERE (username= '".$username."' AND password='".$password."')";
        if($connexion!=null)
        {

            $resultat= $connexion->prepare($sql);
            $resultat->execute();
            while($object = $resultat->fetch(PDO::FETCH_OBJ))
            {
                $tableauadmin[] = new Admin
                ($object->id,
                    $object->username,
                    $object->password


                );
            }
        }
        else
        {
            return "probleme de la base de donnees";
        }
        return $tableauadmin;

    }





}