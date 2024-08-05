<?php
require_once ('functions.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cart_id = $_POST['cart_id'];
    $sql = "DELETE FROM cart WHERE id = $cart_id";
    if ($conn->query($sql) === TRUE) {
        echo "Item removed from cart";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
