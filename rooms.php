<!DOCTYPE html>
<html>
<head>
	<title>Hotel Booking Website</title>
	<!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200&family=Poppins:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Nunito:ital,wght@1,200&family=Poppins:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>


</head>
<body>

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">Crystal Hotel</h2>

  <div class="h-line bg-dark"></div>
 
</div>

<div class="container">
<div class="col-lg-12 col-md-12 px-4">
  <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/1.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Simple Room Name</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              3 Rooms
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Bathroom
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              3 Sofa
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Television
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Room Heater
            </span>
          </div>
          <div class="guests">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              6 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              7 Children
            </span>
          </div>  
    </div>
    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
      <h6 class="mb-4">$1000 per night </h6>
      <a href="inc/book.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
    </div>
  </div>
 </div>
 <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/2.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Simple Room Name</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Rooms
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Bathroom
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              3 Sofa
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Television
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Room Heater
            </span>
          </div>
          <div class="guests">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              3 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Children
            </span>
          </div>  
    </div>
    <div class="col-md-2 text-center">
      <h6 class="mb-4">$500 per night </h6>
      <a href="inc/book.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
    </div>
  </div>
</div>
<div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/3.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Simple Room Name</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Rooms
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Bathroom
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              3 Sofa
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Television
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Room Heater
            </span>
          </div>
          <div class="guests">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">  
              4 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              5 Children
            </span>
          </div>  
    </div>
    <div class="col-md-2 text-center">
      <h6 class="mb-4">$600 per night </h6>
      <a href="inc/book.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
    </div>
  </div>
</div>
</div>


  </div>
</div>



<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>