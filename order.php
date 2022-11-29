<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
</head>

<?php
include 'dbconnect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $confirmno = $_POST['confirmno'];
    $emailadd = $_POST['emailadd'];
    $sql = "SELECT * FROM `guest-details` WHERE `email`='$emailadd' AND `srn`='$confirmno'";
    $res = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($res);
    $result = mysqli_fetch_assoc($res);
    $first_name = $result['first_name'];
    // echo $fname;
    if ($num == 1) {
        $sql1 = "SELECT * FROM `order-details` WHERE `fname`='$first_name'";
        $res1 = mysqli_query($conn, $sql1);
        $result1 = mysqli_fetch_assoc($res1);
    }
}
?>

<body>
    <div class="container">
        <img style="padding: 10px 0px 10px 0px;" src="<?php echo $result1['src'] ?>" alt="Room Photo">
        <p>Name: <?php echo $result1['fname'] ?><?php echo " " . $result1['lname'] ?></p>
        <hr style="border:none; height: 0.15em; background:#06283D;">
        <p>Room Type: <?php echo $result1['room_type'] ?></p>
        <p>Room Price: &#8377; <?php echo $result1['price'] ?></p>
        <p>Start Date: <?php echo $result1['sdate'] ?></p>
        <p>End Date: <?php echo $result1['edate'] ?></p>
        <p>Date of Booking: <?php echo $result1['date'] ?></p>
    </div>
</body>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap');

    body {
        font-family: 'Lato', sans-serif;
        background-image: linear-gradient(267deg, #1746A2, #5F9DF7);
    }

    p {
        font-size: 17px;
        color: #06283D;
    }

    img {
        border-radius: 30px;
    }

    .container {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        /* border: 2px solid black; */
        padding: 20px 70px 20px 70px;
        background-color: #dff6ffbb;
        border-radius: 20px;
    }
</style>

</html>