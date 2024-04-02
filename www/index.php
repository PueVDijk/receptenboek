<?php

require "database.php";

$sql = "SELECT * FROM recepten";

$result = mysqli_query($conn, $sql);


require "header.php";   
?>
<H1>Recepten:</H1>
<div class="flexboxContainer">
<?php
foreach ($result as $data) {
    echo "<div class='receptcontainer'>";
        echo "  <div class='recepttitel'>";
            echo "    <a href='recept.php?recept_id=" . $data["recept_id"] . "'>" . $data["receptnaam"]; // Dynamische link met identifier
        echo "  </div>";
        echo "  <div class='receptfoto'>";
            echo "<img src='images/" . $data["foto"] . "' alt='receptfoto'>" . "</a>";
        echo "  </div>";
    echo "</div>";
}
?>
</div>
<?php
require "footer.php";
?>