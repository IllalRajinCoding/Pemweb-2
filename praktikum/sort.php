<?php
$buah = ["j" => "jeruk", "m" => "mangga", "p" => "pisang", "a" => "apel"];
echo "<ol>";
sort($buah);
echo "<hr/>";
echo "<ol>";
foreach ($buah as $key => $value) {
    echo "<li>$key. $value</li>";
}
echo "</ol>";
?>