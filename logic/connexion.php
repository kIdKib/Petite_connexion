<?php

    if (isset($_POST['login']) && !empty($_POST['email']) && !empty($_POST['mdp']) ) {
        require("connex.php");

        try{
            $db = Database::connect();
            
            $mdp = $_POST['mdp'] ; 
            $email = $_POST['email'];


            $req_insert = $db->prepare('SELECT * FROM `users` WHERE mdp = ? AND email = ?');
            $req_insert->execute(array($mdp, $email));

            $pom = $req_insert->fetch();
            

            if (empty($pom)) {
                echo "<script>alert(\"Ce que compte n'existe pas \")</script>";
            }else {
                session_start();

                $_SESSION["lastname"] = $pom['nom'];
                $_SESSION["firstname"] = $pom['prenom'];  
                $_SESSION["mdp"] = $pom['mdp'];
                $_SESSION["email"] = $pom['email'];
                $_SESSION["username"] = $pom['pseudo'];
                $_SESSION["age"] = $pom['age'];
                $_SESSION["id"] = $pom['id'];
                
                /*echo $pom['prenom'].'</br>';
                echo $_SESSION['username'].'</br>' ;*/
                Database::disconnect();
                # echo "ca fonctionne";
                

                header('location: home.php');
            }

            
            

        }catch (PDOException $e){
            die("ERROR: Could not able to execute $sql . " . $e->getMessage());
	
        }

    }

?>