<?php
session_start();
session_destroy();
header('Location:offender_login.php');
?>