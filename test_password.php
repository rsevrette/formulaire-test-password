<?php
   $password = $_POST['password'];
   $faible = "/^.{0,7}$/";
   $moyen = "/^(?=.*[0-9]).{8,}$/";
   $fort = "/^(?=.*[A-Z])(?=.*[0-9])(?=.*[^a-zA-Z0-9]).{10,}$/";
;
   if (preg_match($fort, $password)){
       echo "mot de passe fort"
   }
   elseif (preg_match($moyen, $password)){
       echo "mot de passe moyen"
   }
   elseif(preg_match($faible, $password)){
       echo "mot de passe faible"
   }
   else {
       echo "format non reconnu";
   }
?>
