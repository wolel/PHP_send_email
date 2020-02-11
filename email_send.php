<?php
include ('email.php');

$email = $_POST['to'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];



$sendEmail = new email($email,$subject,$msg);
//$sendEmail->getDonnes();
//$sendEmail->donnees($email,$subject,$msg);