<?php
require 'database.php';
// langste recept
$sql = "SELECT * FROM `recepten` ORDER BY bereidingstijd DESC;";

$result_langste = mysqli_query($conn, $sql);

// meeste ingredienten
$sql = "SELECT * FROM `recepten` ORDER BY aantal_ingredienten DESC;";

$result_meeste = mysqli_query($conn, $sql);

// 
$sql = "SELECT AVG(aantal_ingredienten) AS 'gemiddeld_aantal_ingredienten' FROM `recepten`;";

$result_gemiddeld = mysqli_query($conn, $sql);


require 'header.php';
?>

<H1>Recept met langste duur</H1>
<?php $data = $result_langste->fetch_array(); ?>
<?php echo " <a href='recept.php?recept_id=" . $data["recept_id"] . "'>" . $data["receptnaam"] . '</a>'; ?>

<H1>Recept met meeste ingredienten</H1>
<?php $data = $result_meeste->fetch_array(); ?>
<?php echo " <a href='recept.php?recept_id=" . $data["recept_id"] . "'>" . $data["receptnaam"] . '</a>'; ?>

<H1>Gemiddeld aantal ingredienten per recept</H1>
<?php $data = $result_gemiddeld->fetch_array(); ?>
<?php echo " gemiddeld " . $data["gemiddeld_aantal_ingredienten"] . ' ingredienten'; ?>

<?php
require "footer.php";
?>