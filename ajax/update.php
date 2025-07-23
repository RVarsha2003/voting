<?php
$new = $_POST["heading"];
file_put_contents("heading.txt", $new);
echo "Heading updated!";
?>
