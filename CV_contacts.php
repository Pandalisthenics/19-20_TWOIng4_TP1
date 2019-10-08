<?php
$nom = $_POST['nom'];
$email = $_POST['email'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];

$content="From: $nom \n Email: $email \n Message: $message";
$recipient = "paul.coanet@edu.ece.fr";
$mailheader = "From: $email \r\n";
mail($recipient, $sujet, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>