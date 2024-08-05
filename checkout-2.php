<?php
require_once ('files/header.php');
require_once ('files/functions.php');

protected_area();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn->query("DELETE FROM cart");
    alert('success', 'Thank you for your Trust');
    header('Location:hotels.php');
}


$sql = "SELECT cart.id as cart_id, products.id as product_id, products.name, products.price, products.image
        FROM cart 
        INNER JOIN products ON cart.product_id = products.id";

$result = $conn->query($sql);

$totalPrice = 0;

$items = [];
while ($row = $result->fetch_assoc()) {
    $row['total'] = $row['price'];
    $totalPrice += $row['total'];
    $items[] = $row;
}
$conn->close();
?>



<link rel="stylesheet" href="css/style3.css">


<section class="allp">
    <div class="container-fluid">
        <div class="row">

            <!-- Left Section -->
            <div class="col-md-8 payment-section">
                <div class="container">
                    <form id="payment-form" method="POST">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="paymentMethod" id="cash" value="cash"
                                checked>
                            <label class="form-check-label" for="cash">Cash</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="paymentMethod" id="visa" value="visa">
                            <label class="form-check-label" for="visa">Visa</label>
                        </div>
                        <div id="cash-fields" class="payment-fields">
                            <img src="images/cash.png" alt="Cash Image">
                            <input type="text" class="form-control" placeholder="Name">
                            <input type="text" class="form-control" placeholder="Phone Number">
                            <input type="email" class="form-control" placeholder="Email">
                            <input type="text" class="form-control" placeholder="Address">
                        </div>
                        <div id="visa-fields" class="payment-fields d-none">
                            <img src="images/visa.png" alt="Visa Image">
                            <input type="text" class="form-control" placeholder="Card Number">
                            <input type="text" class="form-control" placeholder="Card Holder Name">
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="MM">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="YY">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="CVV">
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Phone Number">
                            <input type="text" class="form-control" placeholder="Address">
                        </div>
                        <button type="submit" id="remove-item" class="btn btn-primary confirm-button">Confirm Payment</button>
                    </form>
                </div>
            </div>

            <div class="col-md-3">
                <div class="summary mb-4">
                    <h3 class="custom-heading">Order summary</h3>
                    <?php foreach ($items as $row): ?>
                        <ul>
                            <li>
                                <h5><b><?php echo htmlspecialchars($row['name']); ?> $</b></h5>
                                <ul>
                                    <h5><b>EGP <?php echo htmlspecialchars($row['price']); ?> </b></h5>
                                </ul>
                            </li>
                        </ul>
                    <?php endforeach; ?>
                    <p>all detels</p>
                    <a href="cart.php" class="btn custom-btn">See details</a>
                </div>
            </div>


        </div>

</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="JS/sc.js"></script>
</body>

</html>