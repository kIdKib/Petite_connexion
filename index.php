<?php require(__DIR__."/bases/header.php"); ?>
<?php require("connex.php"); ?>
<?php require(__DIR__."/logic/inscription.php"); ?>

<h3 style="text-align:center; margin-top:20px;">S'inscrire</h3>
<form action="index.php" method="post" style="width:100%;display:flex;justify-content:center;">

    <div style="width:25rem;display:flex;flex-wrap:wrap;justify-content:space-between" required>
        <input style="margin-top: 10px;height:30px;padding-left:5px;border-radius:3px; border: 1px solid" type="text" name="lastname" placeholder="lastname" required>
        <input style="margin-top: 10px;height:30px;padding-left:5px;border-radius:3px; border: 1px solid" type="text" name="firstname" placeholder="first name" required>
        <input style="margin-top: 10px;height:30px;padding-left:5px;border-radius:3px; border: 1px solid" type="email" name="email" placeholder="email@mail.com" required>
        <input style="margin-top: 10px;height:30px;padding-left:5px;border-radius:3px; border: 1px solid" type="text" name="username" placeholder="username" required>
        <input style="margin-top: 10px;height:30px;padding-left:5px;border-radius:3px; border: 1px solid" type="password" name="mdp" placeholder="password" required>
        <input style="margin-top: 10px;height:30px;padding-left:5px;border-radius:3px; border: 1px solid" type="text" name="age" placeholder="age" required>
        <div style="width: 100%;display:flex; justify-content:center; margin-top:20px;">
            <button name="sign" style="align-self:flex-end; border:none; width:7rem; height:35px; color:white; background-color:blue">S'inscrire</button>
        </div>
    </div>

</form>

<?php require(__DIR__.'/bases/footer.php'); ?>