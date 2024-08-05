<?php
require_once ("files/functions.php");
require_once ("files/header.php");
protected_area();
$product_id = $_GET['product_id'];
$sql = "SELECT * FROM products WHERE id = $product_id";
$result = $conn->query($sql);
$product = $result->fetch_assoc();

?>
<?php
require_once ('ChatBotYousef.html');
?> 
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.add-to-cart-form').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: 'files/add-to-cart.php',
                method: 'POST',
                data: $(this).serialize(),
                success: function (response) {
                    alert('Item added to cart');
                },
                error: function () {
                    alert('Failed to add item to cart');
                }
            });
        });
    });
</script>

<div class="card mb-3 container">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="<?php echo $product['image']; ?>" class="img-fluid rounded-start" alt="..."
                style="height: 500px; width:450px;">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h1 class="card-title"><?php echo $product['name']; ?></h1>
                <p class="card-text" style="font-size: 20px;"></p>
                <?php require_once ('files/rating.php') ?>
                <form class="add-to-cart-form" method="post">
                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                    <input type="submit" value="Add to Cart" id ="btn">
                    <style>
                           #btn {
         cursor: pointer;
         padding: 10px;
        border-radius: 5px; 
        background-color: #d4af37;
        color: #ffffff;
        font-weight: bold;
        border: none;
        
   }
                    </style>
                </form>
                <br><br>
                <h3>more details</h3>
                <p><?php echo $product['about']; ?></p>
                <h5>Price: <span>EGP <?php echo $product['price']; ?></span></h5>
            </div>
        </div>
    </div>
</div>
<br>
<div class="adv" style="display: flex; justify-content:space-around;">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="col-md-4">
                    <img src="images/did2.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="col-md-4">
                    <img src="images/did2.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<script src="JS/bootstrap.bundle.js"></script>
</body>

</html>