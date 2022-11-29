<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation Page</title>
</head>

<body>
    <?php
    include 'dbconnect.php';
    $query1 = "SELECT * FROM `guest-details` WHERE `srn` = (SELECT max(srn) FROM `guest-details`)";
    $res1 = mysqli_query($conn, $query1);
    $result1 = mysqli_fetch_assoc($res1);
    $query2 = "SELECT * FROM `order-details` WHERE `srn` = (SELECT max(srn) FROM `order-details`)";
    $res2 = mysqli_query($conn, $query2);
    $result2 = mysqli_fetch_assoc($res2);
    ?>
    <div class="container">
        <h2 style="color: green; text-align: center;">Transaction was successful!</h2>
        <div style="text-align: center; font-size: 20px;">
            <p style="color: #06283D">Amount Paid: &#8377; <?php echo $result2['price'] ?></p>
            <p style="color: #06283D">Room Booked: <?php echo $result2['room_type'] ?></p>
            <img src="<?php echo $result2['src'] ?>" alt="Image">
            <p style="font-weight: 1000; color: #06283D">Your confirmation number is <?php echo $result1['srn'] ?></p>
        </div>
    </div>
</body>

</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap');

    body {
        font-family: 'Lato', sans-serif;
        background-image: linear-gradient(45deg, #1746A2, #5F9DF7);
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