<?php $title = "Syn-Code"; ?>
<?php include "inc/header.php"; ?>


<div class="container"><!-- main content -->
<div class="jumbotron"><!-- Jumbotron Start -->

<!-- image slider goes here -->

       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="img/code.jpg" alt="PHP code used to develop modern web pages">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/computer.jpg" alt="Only place to stop for your website needs.">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/current-work.png" alt="Modern Responsive using the latest tachniques">
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
        </div>

</div> <!-- Jumbotron end -->

<div class="container">
	<div class="row">
		<div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card img-top">
                    <img src="img/001-internet.png" alt="">
                </div>
                <div class="card-body">
                    <h3 class="card-title"><a class="text-secondary" href="work.php">See Our Work</a></h3>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                </div>
            </div>
		</div><!-- end of card 1 -->

		<div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card img-top">
                    <img src="img/002computer.png" alt="">
                </div>
                <div class="card-body">
                    <h3 class="card-title"><a class="text-secondary" href="services.php">Our Services</a></h3>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                </div>
            </div>
		</div> <!-- end of card 2 --> 

		<div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card img-top">
                    <img src="img/002-people.png" alt="">
                </div>
                <div class="card-body">
                    <h3 class="card-title"><a class="text-secondary" href="charities.php">Charities We've Helped</a></h3>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                </div>
            </div>
		</div> <!-- end of card 3 --> 
</div>
</div>
</div><!-- end of main content -->


<?php  include "inc/footer.php"; ?>