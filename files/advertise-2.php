<?php require_once ('files/display-advertise.php'); ?>

<link rel="stylesheet" href="../css/trips.css">

<?php while ($row_2 = $result->fetch_assoc()): ?>
<section id="adv"><br><br>
    <div class="card text-center mb-3" style="width: 18rem;" data-aos="fade-down">
        <img src="<?php echo $row_2['image']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text"><?php echo $row_2['description']; ?></p>
            <a href="#" class="btn btn-outline-secondary">View Now</a>
        </div>
    </div><br><br>
</section>
<?php endwhile; ?>