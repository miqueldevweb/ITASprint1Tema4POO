<?php
require_once "main.php";
$amount = $_POST['amount'];
$option = $_POST['options'];
$client->selection($option,$amount);
?>