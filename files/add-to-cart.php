<?php
require_once('functions.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $quantity = 1;

    $sql = "INSERT INTO cart (product_id, quantity) VALUES ($product_id, $quantity)";

    if ($conn->query($sql) === TRUE) {
        echo "Item added to cart";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
