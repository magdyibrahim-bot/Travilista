<?php
require_once ('files/header.php');
require_once ('files/signing.php');
?>
<?php
require_once ('ChatBotYousef.html');
?> 


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active carouselExampleIndicators"> </li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"  class ="carouselExampleIndicators"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"  class ="carouselExampleIndicators"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./images/post_5.png" class="d-block w-100" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="./images/BOOKNOW.jpg" class="d-block w-100" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
        </div>
        <div class="carousel-item">
            <img src="./images/post6.jpg" class="d-block w-100" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><br>
<?php
require_once ('files/alert.php');
?>
<div class="h2-container" id="categories">
    <h2><img style="width:7%;" src="images/logo-6.png" alt=""><b class="bold">Categories</b></h2>
</div>
<br>
<br>
<div class="cards" style="display: flex;
    justify-content: space-around;
    
">
 <div class="card" style="width: 18rem;">
  <img src="images/tran.jpg" class="card-img-top" alt="..." height ="200px">
  <div class="card-body">
    <h5 class="card-title">Transportation</h5>
    <a href="transport.php" class="btn btn-primary">click</a>
  </div>
 </div>
 <div class="card" style="width: 18rem;">
  <img src="images/WhatsApp Image 2024-08-02 at 13.00.55_f678d05d.jpg" class="card-img-top" alt="..." height ="200px"> 
  <div class="card-body">
    <h5 class="card-title">Trips</h5>
    <a href="trips.php" class="btn btn-primary">click</a>
  </div>
 </div>
 <div class="card" style="width: 18rem;">
  <img src="images/hotel-6.jpg" class="card-img-top" alt="..." height ="200px">
  <div class="card-body">
    <h5 class="card-title">Hotels</h5>
    <a href="hotels.php" class="btn btn-primary">click</a>
  </div>
 </div>
</div> <br>
<div class="cards" style="display: flex;
    justify-content: space-around;">
 <div class="card" style="width: 18rem;">
  <img src="images/air.jpg" class="card-img-top" alt="..." height ="200px">
  <div class="card-body">
    <h5 class="card-title">Air BNB</h5>
    <a href="timeline.php" class="btn btn-primary">click</a>
  </div>
 </div>
 <div class="card" style="width: 18rem;">
  <img src="images/PACKAGES.png" class="card-img-top" alt="..." height ="200px">
  <div class="card-body">
    <h5 class="card-title">Packages</h5>
    <a href="backages.php" class="btn btn-primary" >click</a>
  </div>
</div>
 <div class="card" style="width: 18rem;">
  <img src="images/make.png" class="card-img-top" alt="..." height ="200px">
  <div class="card-body">
    <h5 class="card-title">Make your Own Packages</h5>
    <a href="form.php" class="btn btn-primary" height ="200px">click</a>
  </div>
 </div>

</div><br>

<br>
<div class="h2-container" id="about-us">
    <h2><img style="width:7%;" src="images/logo-6.png" alt=""><b class="bold">About US</b></h2>
</div>
<div class="container about-section" >
    <h3 class="h3-tag"><b>Who you are (Travelista)</b></h3>
    <div class="row">
        <div class="col-md-6">

            <p>Our tourism application in Egypt aims to be the first source of tourist
                information for tourists of all categories. The application focuses on
                providing comprehensive information about famous and hidden tourist places,
                places that highlight popular heritage (such as the Baron’s Palace, the Islamic
                Museum, and Al-Azhar), natural places and reserves (such as Ras Muhammad Reserve
                and the Blue Hole), and other places.Special offers will be presented to the group.
            </p>
        </div>
        <div class="col-md-6" id="about-image-right">
            <img src="./images/logo-1.png" alt="About Us Image"
                class="about-image">
        </div>
    </div>
</div>
<div class="container about-section">
    <div class="row">
        <div class="col-md-6">
            <img src="./images/wallpaperflare.com_wallpaper (7).jpg" alt="About Us Image" class="about-image">
        </div>

        <div class="col-md-6">
            <h3 class="h3-tag"><b>The Future of Travelista</b></h3>
            <p>
                Later, artificial intelligence (AI) will be used in the search and information system,
                and offers will include housing. We can add that a small residential room in an
                apartment can be rented, cars, transportation, and tour guides.
            </p>
        </div>
    </div>
</div>

<br>
<br>
<div class="h2-container" id="services">
    <h2><img style="width:7%;" src="images/logo-6.png" alt=""><b class="bold">Services</b></h2>
</div>
<div class="container about-section" >
    <h3 class="h3-tag"><b>Our Services</b></h3>
    <div class="row">
        <div class="col-md-6">

            <p>We provide our clients with anything for their trip in egypt.
               Our aim is to make our client highly satisfied by our services we provide
               starting from Hotels, Transportaions and up to Trips.
               Our most unique services is allowing the client to choose his own package according to his prefrences.
               Feel free to choose the transportaion that suits you, the hotel that is applicable for you.
               Enjoy it all. 
            </p>
        </div>
        <div class="col-md-6" id="about-image-right">
            <img src="./images/logo-1.png" alt="About Us Image"
                class="about-image">
        </div>
    </div>
</div>

<?php
require_once ('files/footer.php');
?>


<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>