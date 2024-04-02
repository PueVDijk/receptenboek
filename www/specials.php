<?php
require 'database.php';
// langste recept
$sql = "SELECT * FROM `recepten` ORDER BY bereidingstijd DESC;";

$result_langste = mysqli_query($conn, $sql);

// meeste ingredienten
$sql = "SELECT * FROM `recepten` ORDER BY aantal_ingredienten DESC;";

$result_meeste = mysqli_query($conn, $sql);

// 
$sql = "SELECT ROUND(AVG(aantal_ingredienten), 0) AS 'gemiddeld_aantal_ingredienten' FROM `recepten`;";

$result_gemiddeld = mysqli_query($conn, $sql);


require 'header.php';
?>

<H1>Recept met langste duur</H1>
<ul>
<?php foreach ($result_langste as $data) {
    echo " <li><a href='recept.php?recept_id=" . $data["recept_id"] . "'>" . $data["receptnaam"] . ': ' . $data["bereidingstijd"] . ' minuten</a></li>'; 
} ?>
</ul>

<H1>Recept met meeste ingredienten</H1>
<ul>
<?php foreach ($result_meeste as $data) {
    echo " <li><a href='recept.php?recept_id=" . $data["recept_id"] . "'>" . $data["receptnaam"] . ': ' . $data["aantal_ingredienten"] . ' ingredienten</a></li>';
} ?>
</ul>

<H1>Gemiddeld aantal ingredienten per recept</H1>
<?php $data = $result_gemiddeld->fetch_array(); ?>
<?php echo " Gemiddeld " . $data["gemiddeld_aantal_ingredienten"] . ' ingredienten per recept'; ?>

<?php
require "footer.php";
?>