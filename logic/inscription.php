<?php 
    
    if (isset($_POST['sign']) && !empty($_POST['lastname']) && !empty($_POST['firstname'])) {
        
        try{
            $db = Database::connect();
            
            $lastname = $_POST['lastname'];
            $firstname = $_POST['firstname'];
            $mdp = $_POST['mdp'] ; 
            $email = $_POST['email'];
            $username = $_POST['username'] ;
            $age = $_POST['age'];

            $req_insert = $db->prepare("INSERT INTO users(nom, prenom, mdp, pseudo, email, age) VALUES (?,?,?,?,?,?)");
            $req_insert->execute(array($lastname, $firstname, $mdp, $username, $email,$age));

            echo "ca fonctionne";
            Database::disconnect();
            header('location: login.php');
        }catch (PDOException $e){
            die("ERROR: Could not able to execute $sql . " . $e->getMessage());
	
        }
        
    }
    

    
?>