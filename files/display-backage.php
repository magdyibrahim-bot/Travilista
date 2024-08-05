<?php
require_once('functions.php');

$sql = "SELECT * FROM products WHERE category = 'backage'";

$result = $conn->query($sql);