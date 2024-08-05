<?php
require_once ('files/header.php');
require_once('files/functions.php');
protected_area();
?>
<?php
require_once ('ChatBotYousef.html');
?> 

<body id = "body">
    <div class="div mt-5 "></div>
<style>
   #btn {
         cursor: pointer;
         padding: 10px;
        border-radius: 5px; 
        background-color: #d4af37;
        color: #ffffff;
        font-weight: bold;
        border: none;
        
   }
   #body .card {
       background-color: #ffffff;
       color: #d4af37;
   }

   #body .card-body label {
       color: #d4af37;
   }

   #body .card-body input[type="text"],
   #body .card-body input[type="email"],
   #body.card-body input[type="button"] {
       background-color: #ffffff;
       color: #343a40;
       border: 1px solid #d4af37;
       border-radius: 5px;
       padding: 10px;
       margin-bottom: 10px;
       width: 100%;
   }

   #body .card-body input[type="checkbox"],
   #body .card-body input[type="radio"] {
       margin-right: 10px;
   }

   #body .card-body input[type="button"] {
       background-color: #d4af37;
       color: #ffffff;
       font-weight: bold;
   }

   #body .card-body input[type="button"]:hover {
       background-color: #b89b2c;
   }

   #body .img-fluid {
       max-height: 100%;
       object-fit: cover;
   }
   #body  .img {
    background-image: url('f.jpg');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
    }
</style>

    <div class="container">
    <div class="alert alert-success  d-none" role="alert" style="min-height: 50px; text-align:center;" id ="alert">
    We Will Communicate With You During a Day
</div>
        <div class="card mb-3 mx-auto">
            <div class="row no-gutters">
                <div class="col-md-6 img" >
                   
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h1 class="card-title">Travel Information Form</h1>
                        <form id="form">
                            <label for="phone">Phone:</label>
                            <input type="text" id="phone" name="phone">

                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email">

                            <label for="language">Language:</label><br>
                            <input type="checkbox" id="english" name="language" value="English">
                            <label for="english">English</label><br>
                            <input type="checkbox" id="spanish" name="language" value="Spanish">
                            <label for="spanish">Spanish</label><br>
                            <input type="checkbox" id="french" name="language" value="French">
                            <label for="french">French</label><br><br>

                            <label for="destination_city">Destination City:</label>
                            <input type="text" id="destination_city" name="destination_city">

                            <label for="trip">Trip:</label>
                            <input type="text" id="trip" name="trip">

                            <label for="transportation">Transportation:</label>
                            <input type="text" id="transportation" name="transportation">

                            <label for="accommodation">Accommodation:</label><br>
                            <input type="radio" id="hotel" name="accommodation" value="Hotel">
                            <label for="hotel">Hotel</label><br>
                            <input type="radio" id="airbnb" name="accommodation" value="AirBNB">
                            <label for="airbnb">AirBNB</label><br><br>

                            <input type="button" value="Submit" onclick="sendMail()" id = "btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once ("files/footer.php" );
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></scrip >
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="sendmail.js"></script>