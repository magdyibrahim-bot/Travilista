
function sendMail() {
    var form = document.getElementById("form");
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var language = document.querySelector('input[name="language"]:checked').value;
    var destination_city = document.getElementById("destination_city").value;
    var trip = document.getElementById("trip").value;
    var transportation = document.getElementById("transportation").value;
    var accommodation = document.querySelector('input[name="accommodation"]:checked').value;
    
    var data = {
        phone: phone,
        email: email,
        language: language,
        destination_city: destination_city,
        trip: trip,
        transportation: transportation,
        accommodation: accommodation
    };
    
    var xhr = new XMLHttpRequest();
    //sendMail.php
    xhr.open("POST", "sendmail.php", true);
    xhr .setRequestHeader("Content-Type", "application/json");
    xhr.send(JSON.stringify(data));
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("alert").classList.remove("d-none");
		    setTimeout(function () {
			    document.getElementById("alert").classList.add("d-none");
		    }, 5000);
        }
    };

    form.reset();
}