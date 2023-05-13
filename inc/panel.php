<!DOCTYPE html>
<html>
<head>
    <title>Hotel Booking Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
                <h2>Hotel Booking</h2>
                <div class="customer-info text-center">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 jumbotron">
                  
                            <form action="panel.php" method="post">
                <input type="text" name="name" placeholder="Enter name" style="width: 240px;height: 35px;">
           
                  <input type="submit" name="show" value="SHOW INFO" class="btn btn-success text-center" style="margin-left: 30px;" >  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                <table class="table table-striped table-bordered table-responsive text-center">
    <tr>

        <th class="text-center">name</th>
        <th class="text-center">Phone</th>
        <th class="text-center">Hotel Name</th>
        <th class="text-center">checkin</th>
        <th class="text-center">checkout</th>
     
    </tr>
</body>
</html>
<?php
           include ('config.php');

                if (isset($_POST['show'])) {

                    $name = $_POST['name'];
            
                    $sql = "SELECT * FROM `bookings` WHERE `name`='$name'";
            
                    $result = mysqli_query($conn,$sql);
                    if (mysqli_num_rows($result)>0) {
                        while ($DataRows = mysqli_fetch_assoc($result)) {
         
                            $name = $DataRows['name'];
                            $phone = $DataRows['phone'];
                            $hotel = $DataRows['hotel'];
                            $checkin = $DataRows['checkin'];
                            $checkout = $DataRows['checkout'];
                       
                            ?>
                            <tr>
                       
                                <td><?php echo $name; ?></td>
                                <td><?php echo $phone; ?></td>
                                <td><?php echo $hotel; ?></td>
                                <td><?php echo $checkin; ?></td>
                                <td><?php echo $checkout; ?></td>
                            </tr>
                            <?php
                            
                        }
                        
                    } else {
                        echo "<tr><td colspan ='7' class='text-center'>No Record Found</td></tr>";
                    }
                }
            
             ?>
                