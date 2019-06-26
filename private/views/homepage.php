<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="css/modaal.css">

<?php include "header.php" ?>
<div class="t-wrapper">
<span class="modaal-knop">Login</span>

<div class="modaalContent">
    <form action="GET">
        <label id="gebruikersnaam">Gebruikersnaam</label>
        <input type="text" name="gebruikersnaam">
        <label id="wachtwoord">Wachtwoord</label>
        <input type="password" name="wachtwoord">
        <input type="submit" value="Log in">
    </form>
</div>

<span class="modaal-knop">Registreer</span>
<div class="modaalContent">
    <form action="GET">
        <label id="gebruikersnaam2">Gebruikersnaam</label>
        <input type="text" name="gebruikersnaam">
        <label id="wachtwoord1" >Wachtwoord</label>
        <input type="password" name="wachtwoord">
        <label id=wachtwoord2 >Herhaal wachtwoord</label>
        <input type="password" name="wachtwoord2">
    </form> 
</div>
</div>
<!-- </header> -->

<div class="wrapper">
<!--Werkt dit? -->

<?php
$i = 0; 
foreach ( $statement as $db   ): $i++?>
    <div class="cover">

<img class="modaal-knop modaal-foto" src="<?php echo $db['image']?>" alt="<?php echo $db['titel'] ?>" style="width: 250px; height: 140px;">
<h4 class="title"><?php echo $db['titel'] ?></h4>
</div>
<div class="album modaalContent">
<img  src="<?php echo $db['image']?>" alt="<?php echo $db['titel'] ?>" style="max-width: 100%;">
    <article>
            <span class="item-<?php echo $i?>">
                <h2 class="title"><?php echo $db['titel'] ?></h2>
         <p>   <?php echo $db['beschrijving']?>;</p>
                <p>
                    Gepost op <?php echo $db['datum'] ?>  <br> door <?php echo $db['auteur'] ?> <br/>
                    
                </p>
            </span>
                </article>
            </div>
        <?php endforeach; ?>

</div>
<!-- Eind Josylvio -->
</div>

        <script src="js/modaal.js"></script>

        <?php include "footer.php"?>
