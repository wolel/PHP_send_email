<?php
ini_set("error_reporting",E_ALL);

class email
{
private $email;
private $subject;
private $msg;

public function __construct($email,$subject,$msg)
{
if(mail('wola.elena@yahoo.com',$this->subject,$this->msg)){
    echo "Email bien envoyé !";
}else{
    echo "Erreur d\'envoie de l'email. ( Verifiez votre boite email ) ";
}

$this->email = $email;
$this->subject = $subject;
$this->msg = $msg;

}
/*
public function donnees($email,$subject,$msg){
    $this->email = $email;
}
public function sendEmail($email,$subject,$msg){
    if($this->email === true){
        return "email envoyé".' '.$this->email;
    }else

    $this->email = $email;
    $this->subject = $subject;
    $this->msg = $msg;
}
public function getDonnes(){
    return $this->email;

}
*/
}