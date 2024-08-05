function filterCards() {
    // Get the input value
    const maxPrice = parseFloat(document.getElementById('priceFilter').value);
    
    // Get all cards
    const cards = document.querySelectorAll('.card');
    
    // Loop through all cards and display/hide based on the price
    cards.forEach(card => {
        const cardPrice = parseFloat(card.getAttribute('data-price'));
        if (cardPrice <= maxPrice) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}