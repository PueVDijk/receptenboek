<?php

require "database.php";

$id = $_GET['recept_id']; // haal data uit de url

$sql = "SELECT * FROM recepten WHERE recept_id = $id";

$result = mysqli_query($conn, $sql);

$recept = mysqli_fetch_assoc($result);

require "header.php";
?>
<h1><?php echo $recept['receptnaam'] ?></h1>
<p>
    <?php echo "<img class='detailreceptfoto' src= 'images/" . $recept["foto"] . "' alt='receptfoto'>"; ?></p>
<p>
    ID:
    <?php echo $recept['recept_id'] ?></p>
<p>
    Bereidingstijd:
    <?php echo $recept['bereidingstijd'] ?></p>
<p>
<p>
    Aantal ingrediënten:
    <?php echo $recept['aantal_ingredienten'] ?></p>
<p>
    Moeilijkheidsgraad:
    <?php echo $recept['moeilijkheidsgraad'] ?></p>
<p>
    Type gerecht (menugang):
    <?php echo $recept['type_gerecht'] ?></p>
<p>
    Aantal personen:
    <?php echo $recept['aantal_personen'] ?></p>
<p>
    Ingrediënten:
    <?php echo "<pre>" . $recept['ingredienten'] . "</pre>"; ?></p>
<p>
    Bereidingswijze:
    <?php echo "<pre>" . $recept['bereidingswijze'] . "</pre>"; ?></p>
<?php
require "footer.php";
?>