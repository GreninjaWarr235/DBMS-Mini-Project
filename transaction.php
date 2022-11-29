<?php
session_start();
?>

<?php
include 'dbconnect.php';
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["name"];
    $card_num = $_POST["card_num"];
    $cvv = $_POST["cvv"];
    $sql="select * from bank where name ='$name' AND card_num = '$card_num' AND cvv = '$cvv'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if($num!=0){
        $fname = $_SESSION['firstName'];
        $lname = $_SESSION['lastName'];
        $src = $_SESSION['src'];
        $room_type = $_SESSION['type'];
        $sdate = $_SESSION['start'];
        $edate = $_SESSION['end'];
        $date1 = date_create($_SESSION['start']);
        $date2 = date_create($_SESSION['end']);
        $diff = date_diff($date2,$date1);
        $price = $diff->format("%a") * $_SESSION['price'];
        $query = "INSERT INTO `order-details` (`fname`,`lname`,`src`,`room_type`,`sdate`,`edate`,`price`,`name`) VALUES ('$fname','$lname','$src','$room_type','$sdate','$edate','$price','$name')";
        $result = mysqli_query($conn, $query);
        header("location:confo.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
    <form action="transaction.php" method="post">
    <div class="container p-0">
        <div class="card px-4">
            <p class="h8 py-3">Payment Details</p>
            <div class="row gx-3">
                <div class="col-12">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">Person Name</p>
                        <input class="form-control mb-3" type="text" name="name" placeholder="Name" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">Card Number</p>
                        <input class="form-control mb-3" type="text" name="card_num" placeholder="1234 5678 435678" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">Expiry</p>
                        <input class="form-control mb-3" type="text" placeholder="MM/YYYY">
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">CVV/CVC</p>
                        <input class="form-control mb-3 pt-2" type="password" name="cvv" placeholder="***" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="btn btn-primary mb-3">
                        <span class="ps-3"><button type="submit" style="background:none; color:white; border:none; font-size:16px;">Pay &#8377; <?php
    $date1 = date_create($_SESSION['start']);
    $date2 = date_create($_SESSION['end']);
    //difference between two dates
    $diff = date_diff($date2,$date1);

    //count days
    echo $diff->format("%a") * $_SESSION['price'];
    ?></button></span>
                        <span class="fas fa-arrow-right"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>

</html>

<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #0C4160;

        padding: 30px 10px;
    }

    .card {
        max-width: 500px;
        margin: auto;
        color: black;
        border-radius: 20 px;
    }

    p {
        margin: 0px;
    }

    .container .h8 {
        font-size: 30px;
        font-weight: 800;
        text-align: center;
    }

    .btn.btn-primary {
        width: 100%;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 15px;
        background-image: linear-gradient(to right, #77A1D3 0%, #79CBCA 51%, #77A1D3 100%);
        border: none;
        transition: 0.5s;
        background-size: 200% auto;

    }


    .btn.btn.btn-primary:hover {
        background-position: right center;
        color: #fff;
        text-decoration: none;
    }



    .btn.btn-primary:hover .fas.fa-arrow-right {
        transform: translate(15px);
        transition: transform 0.2s ease-in;
    }

    .form-control {
        color: white;
        background-color: #223C60;
        border: 2px solid transparent;
        height: 60px;
        padding-left: 20px;
        vertical-align: middle;
    }

    .form-control:focus {
        color: white;
        background-color: #0C4160;
        border: 2px solid #2d4dda;
        box-shadow: none;
    }

    .text {
        font-size: 14px;
        font-weight: 600;
    }

    ::placeholder {
        font-size: 14px;
        font-weight: 600;
    }
</style>