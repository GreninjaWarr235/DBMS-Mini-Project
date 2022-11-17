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
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $confirmno = $_POST['confirmno'];
    $emailadd = $_POST['emailadd'];
    $sql="SELECT * FROM `guest-details` WHERE `email`='$emailadd' AND `srn`='$confirmno'";
        $res = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($res);
        $result = mysqli_fetch_assoc($res);
        $first_name = $result['first_name'];
        // echo $fname;
    if($num==1){
        $sql1="SELECT * FROM `order-details` WHERE `fname`='$first_name'";
        $res1 = mysqli_query($conn,$sql1);
        $result1 = mysqli_fetch_assoc($res1);
    ?> 
    <p>Name <?php echo $result1['fname'] , $result1['lname']?></p>
    <img src="<?php echo $result1['src']?>" alt="Room Photo">
    <p>Room Type <?php echo $result1['room_type']?></p>
    <p>Room Price <?php echo $result1['price']?></p>
    <p>Start Date <?php echo $result1['sdate']?></p>
    <p>End Date <?php echo $result1['edate']?></p>
    <p>Date of Booking <?php echo $result1['date']?></p>
    <?php
    }
}
?>

<body>
    
</body>
</html>