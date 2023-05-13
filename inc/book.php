<!DOCTYPE html>
<html>
<head>
    <title>Hotel Booking Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{
            background: linear-gradient(to bottom, #13547a, #80d0c7);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 style="color:white">Hotel Booking</h2><br>
                <form action="book.php" method="POST">
                    <div class="form-group">
                        <label for="name" style="color:white">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="Phone" style="color:white">Phone Number</label>
                        <input type="Text" class="form-control" id="email" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="Phone" style="color:white">Hotel Name</label>
                        <input type="Text" class="form-control" id="email" name="hotel" required>
                    </div>
                    <div class="form-group">
                        <label for="checkin" style="color:white">Check-in Date</label>
                        <input type="date" class="form-control" id="checkin" name="checkin" required>
                    </div>
                    <div class="form-group">
                        <label for="checkout" style="color:white">Check-out Date</label>
                        <input type="date" class="form-control" id="checkout" name="checkout" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Book Now</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>


<?php
  include ('config.php');

	if (isset($_POST['submit'])) {
		if (!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['hotel']) && !empty($_POST['checkin']) && !empty($_POST['checkout'])) {
		
		
			$name=$_POST['name'];
			$phone=$_POST['phone'];
            $hotel=$_POST['hotel'];
			$checkin=$_POST['checkin'];
			$checkout=$_POST['checkout'];
	

			$sql = "INSERT INTO `bookings`( `name`, `phone`,`hotel`, `checkin`, `checkout`) VALUES ('$name','$phone','$hotel','$checkin','$checkout')";

			$run = mysqli_query($conn,$sql);

			if ($run == true) {
				
				?>
				<script>
					alert("Booked Successfully");
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
