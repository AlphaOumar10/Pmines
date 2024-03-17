<?php 
include("../entite/connexion.php");
?>

<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nom = $_POST['name'];
    $to = $_POST['email'];
    $sujet = $_POST['subject'];
    $message = $_POST['message'];

    $headers = 'From: <alphaoumarbangoura477@gmail.com>' . "\r\n";

// The content type is required when sending HTML Based emails.
$headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers = "MIME-Version: 1.0" . "\r\n";

// calling the mail function to send the mail using the hosted web server.
mail($to,$sujet,$message,$headers);
?>
<?php

    $insertion = "INSERT INTO contact(nomC, emailC, sujetC,messageC)
                            VALUES('$nom','$email','$sujet','$message')";
              $statement =  $connexion->prepare($insertion); 
              $statement->execute();

              if($statement)
              {
                    header("contact.php?reponse=1");
              }
              else {
                  header("contact.php?reponse=2");
              }
            }
?>