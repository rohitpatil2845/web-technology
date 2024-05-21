<?php
$size = 5; // Pyramid size
for ($i = 1; $i <= $size; $i++) {
    for ($j = 1; $j <= $size - $i; $j++) {
        echo "  ";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "*  ";
    }
    echo "<br />";
}
?>
