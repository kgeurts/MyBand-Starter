<?php include "header.php" ?>
  <link rel="stylesheet" type="text/css" href="css/modaal.css">
<div class="wrapper">
<!--Werkt dit? -->

<?php

$i = 0; 
foreach ( $zoekresultaten as $db   ): $i++?>

    <div class="cover">

<img class="modaal-knop modaal-foto" src="<?php echo $db['image']?>" alt="<?php echo $db['title'] ?>" style="width: 250px; height: 140px;">
<h4 class="title"><?php echo $db['title'] ?></h4>
</div>
<div class="album modaalContent">
<img  src="<?php echo $db['image']?>" alt="<?php echo $db['title'] ?>" style="max-width: 100%;">
    <article>
            <span class="item-<?php echo $i?>">
                <h2 class="title"><?php echo $db['title'] ?></h2>
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