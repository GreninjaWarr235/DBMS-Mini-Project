<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>

<?php
include 'dbconnect.php';
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    header("location:cart.php");
}
?>

<body>
    <div id="modal" class="modal" style="display:none;">
        <div class="imgcoll" style="display: grid; grid-template-columns: repeat(3)">
            <form id="form" action="cart.php" method="post">
                <img onclick="opn1()" class="roomimg" src="deluxe-non-ac-room-500x500 (1).png"
                    alt="Deluxe Non-A.C Room">
                <img onclick="opn2()" class="roomimg" src="superior-room-ac1 (1).jpg" alt="Deluxe A.C Room">
                <img onclick="opn3()" class="roomimg" src="Executive_Suite.jpg" alt="Executive Suite">
                <img onclick="opn4()" class="roomimg"
                    src="https://i.pinimg.com/originals/78/74/7f/78747fb2b7cc49a3f3571a1cc0a1f77b.jpg"
                    alt="Honeymoon Suite">
                <img onclick="opn5()" class="roomimg" src="two bedroom villa.jpg" alt="Two Bedroom Villa">
                <button onclick="callend()" type="submit">Set</button>
            </form>
        </div>
    </div>
    <div class="outer">
        <div class="container">
            <div class="disp" style="font-size: 24px; weight: 500px">Booking Details</div>
            <div class="photo" style="padding: 0; height: 250px; width: 300px;"><img height="250px" width="300px"
                    class="pht" src="<?php echo $_SESSION['src'] ?>" alt="Chosen Room Photo"></div>
            <div class="rtype">
                <?php echo $_SESSION['type'] ?>
            </div>
            <?php
        $date1 = date_create($_SESSION['start']);
        $date2 = date_create($_SESSION['end']);
        //difference between two dates
        $diff = date_diff($date2,$date1);
        $_SESSION['tprice'] = $diff->format("%a") * $_SESSION['price'];
        //count days
        //echo 'Total days - '.$diff->format("%a");
        //echo 'Total amt - '.$diff->format("%a") * $_SESSION['price'];
        ?>
            <div class="tdays" style="padding: 0 10px;">
                <?php echo 'You have booked for '.$diff->format("%a").' day(s)'; ?>
            </div>
            <div class="tamt">
                <?php echo 'Total Amount: &#8377; '.$diff->format("%a") * $_SESSION['price']; ?>
            </div>
            <div class="subm"><a><button onclick="call()">Update</button></a><a><button>Cancel</button></a><a
                    href="transaction.php"><button>Confirm</button></a></div>
        </div>
    </div>
</body>
<script type="text/javascript">
    function call() { document.getElementById('modal').style.display = 'block'; }
    function callend() { document.getElementById('modal').style.display = 'none'; }
    function opn1() {
    <? php
        $_SESSION['type'] = "Deluxe Non-A.C Room";
        $_SESSION['src'] = "deluxe-non-ac-room-500x500 (1).png";
        // header("location:cart.php");
    ?>
}
    function opn2() {
    <? php
        $_SESSION['type'] = "Deluxe A.C Room";
        $_SESSION['src'] = "superior-room-ac1 (1).jpg";
        // header('location:cart.php');
    ?>
} function opn3() {
    <? php
        $_SESSION['type'] = "Executive Suite";
        $_SESSION['src'] = "Executive_Suite.jpg";
        // header('location:cart.php');
    ?>
} function opn4() {
    <? php
        $_SESSION['type'] = "Honeymoon Suite";
        $_SESSION['src'] = "https://i.pinimg.com/originals/78/74/7f/78747fb2b7cc49a3f3571a1cc0a1f77b.jpg";
        // header('location:cart.php');
    ?>
} function opn5() {
    <? php
        $_SESSION['type'] = "Two Bedroom Villa";
        $_SESSION['src'] = "two bedroom villa.jpg";
        // header('location:cart.php');
        // echo $_SESSION['room_type'];
    ?>
}
</script>

</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap');

    body {
        background-color: white;
    }

    .outer {
        display: grid;
        justify-content: center;
        align-items: center;
    }

    .container {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        height: 357px;
        width: 564px;
        display: grid;
        grid-template-areas:
            'disp disp'
            'rtype photo'
            'tdays photo'
            'tamt photo'
            'subm subm';
        grid-gap: 6px;
        background-color: #125D98;
        padding: 10px;
        justify-content: center;
        align-items: stretch;
        justify-items: stretch;
        align-content: center;
        font-family: 'Lato', sans-serif;
    }

    .container>div {
        background-color: rgb(192 231 252);
        text-align: center;
        padding: 10px 0;
        font-size: 19px;
        height: auto;
        width: auto;
    }

    .disp {
        grid-area: disp;
    }

    .photo {
        grid-area: photo;
        /* display: block;
        margin-left: auto;
        margin-right: auto;
        width: auto;
        height: auto; */
    }

    .rtype {
        grid-area: rtype;
        display: grid;
        align-content: center;
    }

    .tdays {
        grid-area: tdays;
        display: grid;
        align-content: center;
    }

    .tamt {
        grid-area: tamt;
        display: grid;
        align-content: center;
    }

    .subm {
        grid-area: subm;
    }

    .modal {
        z-index: 4;
        position: fixed;
        margin: auto;
        background-color: rgba(146, 146, 146, 0.082);
        backdrop-filter: blur(10px);
        text-align: center;
        height: 100vh;
        width: 100vw;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }

    form img {
        height: 250px;
        width: 300px;
    }
</style>