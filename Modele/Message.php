<?php

/**
 * Created by PhpStorm.
 * User: samy
 * Date: 6/28/17
 * Time: 2:28 PM
 */

require_once 'Configuration.php';
class Message
{
    private  $id;
    private $prenom;
    private $email;
    private $telephone;
    private $message;

    /**
     * Message constructor.
     * @param $id
     * @param $prenom
     * @param $email
     * @param $telephone
     * @param $message
     */
    public function __construct($id, $prenom, $email, $telephone, $message)
    {
        $this->id = $id;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->message = $message;
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
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }


    public static function newmessage(Message $message)
    {
        $connexion=Configuration::getConnexion();
        $sql="insert into contacts(prenom, email, telephone,message) values('".$message->getPrenom()."','".$message->getEmail()."','".$message->getTelephone()."','".$message->getMessage()."')";
        if($connexion!=null)
        {

            $requete=$connexion->prepare($sql);
            $requete->execute();

        }



    }




}