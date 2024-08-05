<?php
require_once('functions.php');

$sql = "SELECT * FROM products WHERE category = 'medical'";

$result = $conn->query($sql);