document.addEventListener('DOMContentLoaded', function () {
    const cashFields = document.getElementById('cash-fields');
    const visaFields = document.getElementById('visa-fields');
    const paymentImage = document.getElementById('payment-image');
    const paymentMethodRadios = document.querySelectorAll('input[name="paymentMethod"]');

    paymentMethodRadios.forEach(radio => {
        radio.addEventListener('change', function () {
            if (this.value === 'cash') {
                cashFields.classList.remove('d-none');
                visaFields.classList.add('d-none');
                paymentImage.src = 'cash-image.jpg';
            } else if (this.value === 'visa') {
                cashFields.classList.add('d-none');
                visaFields.classList.remove('d-none');
                paymentImage.src = 'visa-image.jpg';
            }
        });
    });
});
