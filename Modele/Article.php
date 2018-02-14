<?php

/**
 * Created by PhpStorm.
 * User: samy
 * Date: 6/26/17
 * Time: 1:31 PM
 */
require_once 'Configuration.php';
class Article
{
    private $id;
    private $designation;
    private $prix;
    private $type;
    private $details;
    private $image;
    private $lien;
    private $subtype;

    /**
     * Article constructor.
     * @param $id
     * @param $designation
     * @param $prix
     * @param $type
     * @param $details
     * @param $image
     * @param $lien
     */
    public function __construct($id, $designation, $prix, $type, $details, $image, $lien,$subtype)
    {
        $this->id = $id;
        $this->designation = $designation;
        $this->prix = $prix;
        $this->type = $type;
        $this->details = $details;
        $this->image = $image;
        $this->lien = $lien;
        $this->subtype=$subtype;
    }


    /**
     * @return mixed
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * @param mixed $subtype
     */
    public function setSubtype($subtype)
    {
        $this->subtype = $subtype;
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
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * @param mixed $designation
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param mixed $details
     */
    public function setDetails($details)
    {
        $this->details = $details;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getLien()
    {
        return $this->lien;
    }

    /**
     * @param mixed $lien
     */
    public function setLien($lien)
    {
        $this->lien = $lien;
    }


    public static function affichetout()
    {
        $connexion=Configuration::getConnexion();
        $tableau=array();
        $sql="select * from article";
        if($connexion!=null)
        {
            $resultat=$connexion->prepare($sql);
            $resultat->execute();
            while($object = $resultat->fetch(PDO::FETCH_OBJ))
            {
                $tableau[] = new Article
                ($object->id,
                    $object->designation,
                    $object->prix,
                    $object->type,
                    $object->details,
                    $object->image,
                    $object->lien,
                    $object->subtype

                );
            }
        }
        return $tableau;

    }

    public static function affichetype($type)
    {
        $connexion=Configuration::getConnexion();
        $tableau=array();
        $sql="select * from article where type='".$type."'";
        if($connexion!=null)
        {
            $resultat=$connexion->prepare($sql);
            $resultat->execute();
            while($object = $resultat->fetch(PDO::FETCH_OBJ))
            {
                $tableau[] = new Article
                ($object->id,
                    $object->designation,
                    $object->prix,
                    $object->type,
                    $object->details,
                    $object->image,
                    $object->lien,
                    $object->subtype

                );
            }
        }
        return $tableau;

    }

    public static function affichesoustype($type,$soustype)
    {
        $connexion=Configuration::getConnexion();
        $tableau=array();
        $sql="select * from article where (subtype='".$soustype."'  AND type='".$type."')";
        if($connexion!=null)
        {
            $resultat=$connexion->prepare($sql);
            $resultat->execute();
            while($object = $resultat->fetch(PDO::FETCH_OBJ))
            {
                $tableau[] = new Article
                ($object->id,
                    $object->designation,
                    $object->prix,
                    $object->type,
                    $object->details,
                    $object->image,
                    $object->lien,
                    $object->subtype

                );
            }
        }
        return $tableau;

    }

    public static function afficheapercu($apercu)
    {
        $connexion=Configuration::getConnexion();
        $tableau=array();
        $sql="select * from article where apercupage='".$apercu."'";
        if($connexion!=null)
        {
            $resultat=$connexion->prepare($sql);
            $resultat->execute();
            while($object = $resultat->fetch(PDO::FETCH_OBJ))
            {
                $tableau[] = new Article
                ($object->id,
                    $object->designation,
                    $object->prix,
                    $object->type,
                    $object->details,
                    $object->image,
                    $object->lien,
                    $object->subtype

                );
            }
        }
        return $tableau;

    }

    public static function afficheapercumeuble($apercu)
    {
        $connexion=Configuration::getConnexion();
        $tableau=array();
        $sql="select * from article where apercupage='".$apercu."'";
        if($connexion!=null)
        {
            $resultat=$connexion->prepare($sql);
            $resultat->execute();
            while($object = $resultat->fetch(PDO::FETCH_OBJ))
            {
                $tableau[] = new Article
                ($object->id,
                    $object->designation,
                    $object->prix,
                    $object->type,
                    $object->details,
                    $object->image,
                    $object->lien,
                    $object->subtype

                );
            }
        }
        return $tableau;

    }

    public static function afficheId($id)
    {
        $connexion=Configuration::getConnexion();
        $tableau=array();
        $sql="select * from article where id='".$id."'";
        if($connexion!=null)
        {
            $resultat=$connexion->prepare($sql);
            $resultat->execute();
            while($object = $resultat->fetch(PDO::FETCH_OBJ))
            {
                $tableau[] = new Article
                ($object->id,
                    $object->designation,
                    $object->prix,
                    $object->type,
                    $object->details,
                    $object->image,
                    $object->lien,
                    $object->subtype

                );
            }
        }
        return $tableau;

    }



    public static function affichesearch($search)
    {
        $connexion=Configuration::getConnexion();
        $tableau=array();
        $sql="select * from article where (prix  like '%".$search."%'  OR designation like '%".$search."%')";
        if($connexion!=null)
        {
            $resultat=$connexion->prepare($sql);
            $resultat->execute();
            while($object = $resultat->fetch(PDO::FETCH_OBJ))
            {
                $tableau[] = new Article
                ($object->id,
                    $object->designation,
                    $object->prix,
                    $object->type,
                    $object->details,
                    $object->image,
                    $object->lien,
                    $object->subtype

                );
            }
        }
        return $tableau;

    }


    public static function updateprixdesi($id,$prix,$designation,$type,$soustype)
    {
        $connexion=Configuration::getConnexion();

        $sql="update article set prix='".$prix."', designation='".$designation."', type='".$type."', subtype='".$soustype."' where id='".$id."'";
        if($connexion!=null)
        {
            $resultat=$connexion->prepare($sql);
            $resultat->execute();

        }





    }


}