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
  <h2 class="fw-bold h-font text-center">CONTACT US</h2>

  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
  If you have a message or need to contact us, please provide the details of your inquiry, and I'll do my best to assist you.
  </p>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
        <h5>Address</h5>
        <a href="https://goo.gl/maps/jFdoRUnTvq314zJy6" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
          <i class="bi bi-geo-alt-fill"></i> 32-Park, Erbil, Iraq.
        </a>
        <h5 class="mt-4">Call us</h5>
       <i class="bi bi-telephone-fill"></i> +964 565 8799</a>
        <br>
       <i class="bi bi-telephone-fill"></i> +964 356 5767</a>
        <h5 class="mt-4">Email</h5>
        <i class="bi bi-envelope-fill"></i> gonnaadnan12@gmail.com <br>
     <i class="bi bi-envelope-fill"></i> Maryamchawshin22@gmail.com

        <h5 class="mt-4">Follow us</h5>
        <a href="https/www.twitter.com" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-twitter me-1"></i>
        </a>
        
        <a href="https/www.facebook.com" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-facebook me-1"></i>
        </a>
        
        <a href="https/www.instagram.com" class="d-inline-block text-dark fs-5">
          <i class="bi bi-instagram me-1"></i>
          
        </a>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
      <form action="contact.php" method="POST">
          <h5>Send a message</h5>
          <div class="mb-3">
          <label class="form-label" style="font-weight: 500;">Name</label>
          <input type="text" name="name" class="form-control shadow-none">
          </div>
          <div class="mb-3">
          <label class="form-label" style="font-weight: 500;">Email</label>
          <input type="email" name="email" class="form-control shadow-none">
          </div>
          <div class="mb-3">
          <label class="form-label" style="font-weight: 500;">Message</label>
          <textarea class="form-control shadow-none" name="msg" rows="5" style="resize: none;"></textarea>
          </div>
          <button type="submit" name="submit" class="btn text-white custom-bg mt-3">Send</button>
        </form>
      </div>
    </div>
</div>
    
  </div>
</div>

<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



<?php
  include ('inc/config.php');

	if (isset($_POST['submit'])) {
		if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['msg'])) {
		
		
			$name=$_POST['name'];
			$email=$_POST['email'];
            $msg=$_POST['msg'];
		
	

			$sql = "INSERT INTO `contact`( `name`, `email`,`msg`) VALUES ('$name','$email','$msg')";

			$run = mysqli_query($conn,$sql);

			if ($run == true) {
				
				?>
				<script>
					alert("Sent Successfully");
				</script>
				<?php
			} else {
				echo "Error : ".$sql."<br>". mysqli_error($conn); 
			}
		} else {
				?>
				<script>
					alert("Please insert all information coorectly dont miss any field");
				</script>
				<?php
		}


	}

 ?>
