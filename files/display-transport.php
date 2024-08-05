<?php
require_once('functions.php');

$sql = "SELECT * FROM products WHERE category = 'transportations'";

$result = $conn->query($sql);