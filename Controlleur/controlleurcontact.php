<?php
/**
 * Created by PhpStorm.
 * User: samy
 * Date: 6/28/17
 * Time: 2:35 PM
 */
include_once '../Modele/Message.php';

if(isset($_POST['contact']))
{
$message=new Message(null, $_POST['prenom'],$_POST['email'],$_POST['telephone'],$_POST['message']);

    Message::newmessage($message);



}