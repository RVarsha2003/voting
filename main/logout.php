<?php
session_start();
session_destroy();


header("Location: /voting/main/index.php");

?>