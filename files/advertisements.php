<?php require_once ('files/display-advertise.php'); ?>

<link rel="stylesheet" href="../css/backages.css">

<div class="col-md-3">
    <?php while ($row_2 = $result->fetch_assoc()): ?>
        <div class="ad mb-4">
            <img src="<?php echo $row_2['image']; ?>" alt="image" class="img-fluid">
            <h5 class="text-success"><?php echo $row_2['adver_name'] ?></h5>
            <p><?php echo $row_2['description']; ?></p>
            <a href="<?php echo $row_2['link']; ?>" class="btn btn-success" target="_blank">learn more</a>
        </div>
    <?php endwhile; ?>
</div>