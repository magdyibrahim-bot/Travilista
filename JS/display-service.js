$(document).ready(function () {
    $('.add-to-cart-form').on('submit', function (event) {
        event.preventDefault();
        $.ajax({
            url: 'add_to_cart.php',
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