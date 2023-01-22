<?php
$tab = $_POST['tab'];
$count = 0;

while ($count <= 10) {
    echo $tab . "x" . $count . "=" . ($tab * $count) . "<br/>";
    $count++;
}

?>