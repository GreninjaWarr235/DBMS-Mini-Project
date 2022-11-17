<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Booking</title>
    <link rel="stylesheet" href="managebooking.css">
</head>

<body>
    <form action="order.php" method="post">
        <div class="container">
            <div class="box">
                <h2 class="title">Find Your Reservations</h2>
                <h3 class="title">With Confirmation # or Itinerary #</h3>
                <div class="info">
                    <pre><input type="text" placeholder="Confirmation or Itinerary No." name="confirmno" rows="5"></pre>
                    <pre><input type="text" placeholder="Email Address" name="emailadd" rows="5"></pre>
                    <br>
                    <div class="asmButt"><a><span></span><span></span><span></span><span></span><button type="submit" style="background:none; border:none; color: white">Find Reservation</button></a></div>
                </div>
                <br>
                <hr>
                <p>Don't know your Confirmation Number?</p>
                <p>Your Confirmation Number was included in an email sent at the time of booking. Please check your
                    email to recover the number.
                </p>
                <br>
                <div class="info">
                    <div class="asmButt"><a href="#"><span></span><span></span><span></span><span></span>Help</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>