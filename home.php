<?php 
    session_start() ;
    require("bases/header.php");
    require("logic/deconnexion.php")
   

?>
<h3 style="text-align:center; margin-top:20px;">Bienvenue <?= $_SESSION['username'] ?>  </h3>

<div style="width:100%;display:flex;justify-content:center;">
    <div style="width:30rem;display:flex;flex-wrap:wrap;justify-content:space-between" >
        
        <input style="margin-top: 10px;height:30px;padding-left:5px;border-radius:3px; border: 1px solid; font-size:1rem; text-align:center;" type="text" value="<?= $_SESSION['email'] ?> " disabled>
        <input style="margin-top: 10px;height:30px;padding-left:5px;border-radius:3px; border: 1px solid; font-size:1rem; text-align:center;" type="text" value="<?= $_SESSION['lastname'] ?>" disabled>
        <input style="margin-top: 10px;height:30px;padding-left:5px;border-radius:3px; border: 1px solid; font-size:1rem; text-align:center;" type="text" value="<?= $_SESSION['firstname'] ?>" disabled>
        <input style="margin-top: 10px;height:30px;padding-left:5px;border-radius:3px; border: 1px solid; font-size:1rem; text-align:center;" type="text" value="<?= $_SESSION['mdp'] ?> " disabled>
        <input style="margin-top: 10px;height:30px;padding-left:5px;border-radius:3px; border: 1px solid; font-size:1rem; text-align:center;" type="text" value="<?= $_SESSION['age'] ?> ans" disabled>

    </div>
    
</div>

<form action="home.php" method="post" style="width:100%;display:flex;justify-content:center;">

    <div style="width:30rem;display:flex;flex-wrap:wrap;justify-content:space-between" >

        <div style="width: 100%;display:flex; justify-content:center; margin-top:20px;column-gap:10px">
            <button name="login" style="border:none; width:7rem; height:35px; color:white; background-color:black;cursor:pointer;">Modifier</button>
            <button name="deconnexion" style="border:black solid 1px; width:7rem; height:35px; color:black; background-color:white;cursor:pointer;">Deconnexion</button>
        </div>
    </div>
    

</form>

<?php require('bases/footer.php'); ?>