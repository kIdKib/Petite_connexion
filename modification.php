<?php 
    session_start() ;
    require("bases/header.php");
    require("connex.php");
    require("logic/modife.php");

?>
<h3 style="text-align:center; margin-top:20px;">Bienvenue <?= $_SESSION['username'] ?> </h3>

<form action="modification.php" method="post" style="width:100%;display:flex;justify-content:center;flex-wrap:wrap;">

    <div style="width:30rem;;display:flex;flex-wrap:wrap;justify-content:space-between" >
        
        <input style="margin-top: 10px;height:30px;padding-left:5px;border-radius:3px; border: 1px solid; font-size:1rem; text-align:center;" type="text" name="email" value="<?= $_SESSION['email'] ?>" placeholder="email@mail.com" >
        <input style="margin-top: 10px;height:30px;padding-left:5px;border-radius:3px; border: 1px solid; font-size:1rem; text-align:center;" type="text" name="lastname" value="<?= $_SESSION['lastname'] ?>" placeholder="lastname" >
        <input style="margin-top: 10px;height:30px;padding-left:5px;border-radius:3px; border: 1px solid; font-size:1rem; text-align:center;" type="text" name="firstname" value="<?= $_SESSION['firstname'] ?>" placeholder="firstname" >
        <input style="margin-top: 10px;height:30px;padding-left:5px;border-radius:3px; border: 1px solid; font-size:1rem; text-align:center;" type="text" name="mdp" value="<?= $_SESSION['mdp'] ?>" placeholder="password" >
        <input style="margin-top: 10px;height:30px;padding-left:5px;border-radius:3px; border: 1px solid; font-size:1rem; text-align:center;" type="text" name="age" value="<?= $_SESSION['age'] ?>" placeholder="age">
        <input style="margin-top: 10px;height:30px;padding-left:5px;border-radius:3px; border: 1px solid; font-size:1rem; text-align:center;" type="text" name="username" value="<?= $_SESSION['username'] ?>" placeholder="username">

    </div>

    <div style="width: 100%;display:flex; justify-content:center; margin-top:20px;">
        <button name="modif" style="align-self:flex-end; border:none; width:7rem; height:35px; color:white; background-color:black;cursor:pointer;">Modifier</button>
    </div>

</form>

<?php require('bases/footer.php'); ?>