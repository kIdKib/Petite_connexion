<?php require("bases/header.php"); ?>
<?php require("logic/connexion.php"); ?>

<h3 style="text-align:center; margin-top:20px;">Se connecter</h3>
<form action="login.php" method="post" style="width:100%;display:flex;justify-content:center;">

    <div style="width:25rem;display:flex;flex-wrap:wrap;justify-content:space-between" >
        <input style="margin-top: 10px;height:30px;padding-left:5px;border-radius:3px; border: 1px solid" type="email" name="email" placeholder="email@mail.com" required>
        <input style="margin-top: 10px;height:30px;padding-left:5px;border-radius:3px; border: 1px solid" type="password" name="mdp" placeholder="password" required>
        <div style="position:relative;width: 100%;display:flex; justify-content:center; margin-top:20px;">
            <button name="login" style="align-self:flex-end; border:none; width:7rem; height:35px; color:white; background-color:black;cursor:pointer;">Connexion</button>
            <a href="index.php" style="position:absolute;right:-2rem;top:1.2rem;font-size:12px">Inscrivez-vous ici</a>
        </div>
    </div>
    <div>123456</div>

</form>

<?php require('bases/footer.php'); ?>