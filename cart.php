<?php
require_once('files/functions.php');
require_once('files/header.php');
protected_area();

$sql = "SELECT cart.id as cart_id, products.id as product_id, products.name, products.price, products.image
        FROM cart 
        INNER JOIN products ON cart.product_id = products.id";

$result = $conn->query($sql);

$totalPrice = 0;

$items = [];
while ($row = $result->fetch_assoc()) {
    $row['total'] = $row['price'] ; 
    $totalPrice += $row['total']; 
    $items[] = $row;
}

$conn->close();
?>

<link rel="stylesheet" href="css/cart.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.remove-item').on('click', function (event) {
            event.preventDefault();
            const cartId = $(this).data('cart-id');
            $.ajax({
                url: 'files/delete-from-cart.php',
                method: 'POST',
                data: { cart_id: cartId },
                success: function (response) {
                    alert('Item removed from cart');
                    location.reload();
                },
                error: function () {
                    alert('Failed to remove item from cart');
                }
            });
        });
    });
</script>

<body>
    <div class="cart-container">
        <h1>Your Cart</h1>
        <?php foreach ($items as $row):?>
            <div class="cart-items">
                <div class="cart-item">
                    <img src="<?php echo $row['image']; ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">
                    <div class="item-details">
                        <h2><?php echo htmlspecialchars($row['name']); ?></h2>
                        <p>Price: EGP <?php echo number_format($row['price'], 2); ?></p>
                        <button class="remove-item" data-cart-id="<?php echo $row['cart_id']; ?>">Remove</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="cart-summary">
            <h2>Cart Summary</h2>
            <p>Total: <span id="total-price">EGP <?php echo number_format($totalPrice, 2); ?></span></p>
            <button class="checkout-button"><a href="checkout-2.php" style="text-decoration:none; color:white;">Proceed to Checkout</a></button>
        </div>
    </div>

    <?php require_once('files/footer.php'); ?>
</body>
</html>
