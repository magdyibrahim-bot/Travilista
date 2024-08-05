<?php
require_once ('files/header.php');
require_once ('files/display-transport.php');
protected_area();
?>
<?php
require_once ('ChatBotYousef.html');
?> 
<head>
    <link rel="stylesheet" href="css/transport.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" />
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
</head>

<body>
    <br><br>
    <!-- carousel -->
    <?php require_once ('files/slide.php'); ?>
    <div class="container">
        <!-- Search Bar -->
        <div class="search">
            <input type="number" id="priceFilter" class="form-control" placeholder="Search by price (e.g., $25.00)" />
            <span><button onclick="filterCards()" class="btn btn-outline-secondary">Filter</button></span>
        </div>
        <br>
        <?php while ($row = $result->fetch_assoc()): ?>
            <section id="display">
                <!-- Cards Section -->

                <section id="cards">
                    <div class="card mb-3" style="max-width: 700px;" data-aos="fade-down-left" data-price="150.00">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?php echo $row['image']; ?>" class="img-fluid rounded-start" alt="Car">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                    <p class="card-text"><?php echo $row['description']; ?> <br>
                                        <span>EGP <?php echo $row['price']; ?></span>
                                    </p>
                                    <form class="add-to-cart-form">
                                        <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                                        <input type="submit" class="btn btn-outline-warning" value="Buy Now">
                                    </form>
                                    <form action="item-details.php" method="get">
                                        <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                                        <input type="submit" class="btn btn-outline-warning" value="See More">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="adv" style=""><br><br>
                    <div class="card text-center mb-3" style="width: 18rem;" data-aos="fade-down">
                        <img src="images/did2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-outline-secondary">View Now</a>
                        </div>
                    </div>
                </section>
            </section>
        <?php endwhile; ?>
    </div>


    <?php require_once ('files/footer.php'); ?>

    <script src="JS/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script src="JS/filter.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>