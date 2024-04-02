<?php

// SQL-query om het aantal recepten te tellen
$sql = "SELECT COUNT(*) AS aantal_recepten FROM recepten";
$result_aantal = mysqli_query($conn, $sql);

if ($result_aantal) {
    $row = mysqli_fetch_assoc($result_aantal);
    $aantal_recepten = $row['aantal_recepten'];
}
?>
<nav>
    <a href="index.php">receptenlijst (<?php echo $aantal_recepten ?> recepten)</a>
    <a href="specials.php">overzichten</a>
</nav>