<?php

class Validation{


  public function ids($pseudo, $password)
    {
        session_start();
        if (!preg_match("/^[0-9a-zA-Z_]{5,250}$/", $pseudo)) {
            $errors="Votre pseudo doit contenir au minimum 5 caractères";

            $_SESSION["errors"] = $terrors;
            return false;
        }
        elseif (!preg_match("/^[a-z0-9_-]{5,}$/", $password)) {
            $errors->"votre mot de passe doit contenir au moins 8 caractères avec au minimum une majuscule,une minuscule et 1 nombre ";

            $_SESSION["errors"] = $terrors;
            return false;
        }

        $_SESSION["errors"] ="";
        return true;
    }

  


}


?>
