<?php
session_start();

if (!isset($_SESSION['id'])){
header('location:reservation.php');
}

$ses_id = $_SESSION['id'];

?>