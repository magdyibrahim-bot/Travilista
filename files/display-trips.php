<?php
require_once('functions.php');

$sql = "SELECT * FROM products WHERE category = 'trips'";

$result = $conn->query($sql);