<?php 
session_start();
session_destroy();
header("location:/data/login.php");
 ?>