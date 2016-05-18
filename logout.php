<?php
session_start(); 
session_unset($_SESSION['member_id']); 
session_destroy($_SESSION['member_id']);
header("location: index.php");
?>