document.getElementById('search').addEventListener('input', function ()  {
    var searchTerm = this.value.toLowerCase().trim();
    var packages = document.querySelectorAll('#packages .card');
    packages.forEach(function (pkg) {
        var cityName = pkg.querySelector('.card-text i').nextSibling.textContent.toLowerCase().trim();
        var priceText = pkg.querySelector('.price-egp').textContent.replace(' EGP', '').trim();
        var price = parseInt(priceText, 10);

        var searchTerms = searchTerm.split(' ');
        var searchCity = searchTerms.find(term => isNaN(term));
        var searchPrice = searchTerms.find(term => !isNaN(term));

        var matchesCity = searchCity ? cityName.includes(searchCity) : true;
        var matchesPrice = searchPrice ? price <= parseInt(searchPrice, 10) : true;

        if (matchesCity && matchesPrice) {
            pkg.parentElement.style.display = 'block';
        } else {
            pkg.parentElement.style.display = 'none';
        }
    });
});
