<?php
session_start();

if (empty ( $_POST['inputUser']) && empty ( $_POST['inputPassword']))
{
 echo "Vide";
}
else
{
 $monfichier = fopen('Projet1_GL/formulaire.json', 'r');

 while (!feof ($monfichier))
 {
   $resultats = fgetcsv ( $monfichier , 200, ";");

   if ($_POST['inputUser'] ==  $resultats[2]) {

       if ($_POST['inputPassword'] ==  $resultats[3]) {
           header('location:http://localhost:8888/ApplicationVmMaster/client_accueil.php');
           break;
         } else {
         echo "Problème de mot de passe";
         header('location:http://localhost:8888/ApplicationVmMaster/index.php');
        }
   } else {
       echo "Problème de user";
       header('location:http://localhost:8888/ApplicationVmMaster/index.php');
   }
 }
 fclose($monfichier);
}

?>
