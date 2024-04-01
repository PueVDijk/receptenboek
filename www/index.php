<?php

require "database.php";

$sql = "SELECT * FROM recepten";

$result = mysqli_query($conn, $sql);


require "header.php";   
?>
<H1>Recepten:</H1>
<div class="flexboxContainer">
<?php
while ($data = mysqli_fetch_assoc($result)) {
    echo "<div class='receptcontainer'>";
        echo "  <div class='recepttitel'>";
            echo "    <a href='detail.php?recept_id=" . $data["recept_id"] . "'>" . $data["receptnaam"] . "</a>";
        echo "  </div>";
        echo "  <div class='receptfoto'>";
            echo "<img src= 'images/" . $data["foto"] . "' alt='receptfoto'>";
        echo "  </div>";
    echo "</div>";
}
?>
</div>
<?php
require "footer.php";
