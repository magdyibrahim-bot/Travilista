<?php
require_once ('files/display-backage.php');
require_once ('files/header.php');
protected_area();
?>
<?php
require_once ('ChatBotYousef.html');
?> 
<link rel="stylesheet" href="css/backages.css">
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

<body>
<br><br>
    <!-- carousel -->
    <?php require_once ('files/slide.php'); ?>
    <div class="container-fluid">
        <!-- الجزء بتاع السيرش -->
        <div class="container mt-4">
            <div class="search-bar">
                <input type="text" id="search" class="form-control" placeholder="Search by city or price">
            </div>
            <!-- Section -->
            <div class="row mt-4">
                <!-- Cards -->
                <div class="col-md-9">
                    <div class="row" id="packages">
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <div class="col-md-6 mb-4">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>"
                                            class="img-fluid">
                                        <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                        <p class="card-text"><i class="fas fa-map-marker-alt"></i>
                                            <?php echo $row['description']; ?></p>
                                        <?php require ('files/rating.php'); ?>
                                        <p class="card-text">Price: <span class="price-egp"><?php echo $row['price']; ?>
                                                EGP</span> </p>
                                        </form>
                                        <form action="item-details.php" method="get">
                                            <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                                            <input type="submit" class="btn btn-primary" value="See More">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>

                <!-- أعلانات -->
                <?php require_once ('files/advertisements.php') ?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="JS/script.js"></script>

</body>
<?php
require_once ('files/footer.php');
?>

</html>