<?php
    session_start();
    if (isset($_POST['modif']) && !empty($_POST['email']) && !empty($_POST['mdp']) && !empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['age']) && !empty($_POST['username']) ) {
        #require("connex.php");

        try{
            $db = Database::connect();
            
            $id = $_SESSION['id'];
            $mdp = $_POST['mdp'] ; 
            $email = $_POST['email'];
            $lastname = $_POST['lastname'];
            $firstname = $_POST['firstname'];
            $username = $_POST['username'];
            $age = $_POST['age'];
            var_dump($_SESSION);

            $req_insert = $db->prepare('UPDATE `users` SET `nom`=? ,`prenom`=? ,`mdp`=? ,`pseudo`=? ,`email`=? ,`age`=? WHERE id ='.$id);
            $req_insert->execute(array($lastname, $firstname, $mdp, $username, $email, $age));

            
            $_SESSION['mdp'] = $mdp ; 
            $_SESSION['email'] = $email ;
            $_SESSION['lastname'] = $lastname ;
            $_SESSION['firstname'] = $firstname ;
            $_SESSION['username'] = $username ;
            $_SESSION['age'] = $age ;
        
            Database::disconnect();
            echo "ca fonctionne <br>";
            var_dump($_SESSION);

            header('location: home.php');
            
            

        }catch (PDOException $e){
            die("ERROR: Could not able to execute $sql . " . $e->getMessage());
	
        }

    }

?>