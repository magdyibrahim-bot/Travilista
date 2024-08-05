<?php
require_once('functions.php');

$sql = "SELECT * FROM products WHERE category = 'hotels'";

$result = $conn->query($sql);