<?php
//Con esto cerramos la session
@session_start();
session_destroy();
header("Location: index.php");
?>