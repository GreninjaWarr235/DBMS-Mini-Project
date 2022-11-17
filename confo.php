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
    <div>
        <p style="color: green;">Transaction was successful!</p>
        <p>Amount Paid <?php echo $result2['price']?></p> 
        <p>Room Booked <?php echo $result2['room_type']?></p>
        <p>Confirmation Number <?php echo $result1['srn']?></p>
    </div>
</body>
</html>