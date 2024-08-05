<?php
if (isset($_SESSION['alert'])) {
    ?>
    <div class="container pt-5">
        <div class="alert alert-<?= $_SESSION['alert']['type'] ?>">
            <?= $_SESSION['alert']['message'] ?>
        </div>
    </div>
    <?php unset($_SESSION['alert']);
}