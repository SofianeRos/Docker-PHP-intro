<?php require_once("./templates/_header.php");  ?>

<h1>Inscription</h1>

<form action="" method="post">
    <div>
        <label for=""> Saisir votre pseudo </label>
        <input type="text" name="nickname" >
    </div>
    <div>
        <label for=""> Saisir votre mot de passe </label>
        <input type="password" name="password" >
    </div>

    <button type="submit"> Se connecter </button>
    
    <p>Vous avez deja un compte <a href="./index.php"> Connectez vous </a></p> 


</form>

<?php require_once("./templates/_footer.php"); ?>