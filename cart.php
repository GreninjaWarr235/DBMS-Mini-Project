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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['flag'] == "0") {
        $start = $_SESSION['start'];
        $end = $_SESSION['end'];
        $_SESSION['start'] = $start;
        $_SESSION['end'] = $end;
        $_SESSION['type'] = $_POST['type'];
        $_SESSION['price'] = $_POST['price'];
        $_SESSION['src'] = $_POST['src'];
        header("location:cart.php");
    }
    if ($_POST['flag'] == "1") {
        $_SESSION['start'] = $_POST['start'];
        $_SESSION['end'] = $_POST['end'];
        header("location:cart.php");
    }
}
?>

<body>
    <div id="modal" class="modal" style="display:none;">
        <div class="imgchoices" style="width:100%">
            <div class="imgcoll" style="display: grid; grid-template-columns: repeat(3, auto); justify-content:space-around; margin-bottom:30px">
                <div><img onclick="opn1()" class="roomimg" src="deluxe-non-ac-room-500x500 (1).png" alt="Deluxe Non-A.C Room">
                    <p style="font-size:19px; font-family: 'Lato', sans-serif; font-weight: 1000;">Deluxe Non-A.C Room</p>
                </div>
                <div>
                    <img onclick="opn2()" class="roomimg" src="superior-room-ac1 (1).jpg" alt="Deluxe A.C Room">
                    <p style="font-size:19px; font-family: 'Lato', sans-serif; font-weight: 1000;">Deluxe A.C Room</p>
                </div>
                <div>
                    <img onclick="opn3()" class="roomimg" src="Executive_Suite.jpg" alt="Executive Suite">
                    <p style="font-size:19px; font-family: 'Lato', sans-serif; font-weight: 1000;">Executive Suite</p>
                </div>
            </div>
            <div style="display:grid; grid-template-columns: repeat(2, auto); justify-content:space-around;">
                <div style="margin-left: 250px;">
                    <img style="height:250px; width:300px;" onclick="opn4()" class="roomimg" src="https://i.pinimg.com/originals/78/74/7f/78747fb2b7cc49a3f3571a1cc0a1f77b.jpg" alt="Honeymoon Suite">
                    <p style="font-size:19px; font-family: 'Lato', sans-serif; font-weight: 1000;">Honeymoon Suite</p>
                </div>
                <div style="margin-right: 250px;">
                    <img onclick="opn5()" class="roomimg" src="two bedroom villa.jpg" alt="Two Bedroom Villa">
                    <p style="font-size:19px; font-family: 'Lato', sans-serif; font-weight: 1000;">Two Bedroom Villa</p>
                </div>
            </div>
        </div>
    </div>
    <div id="date" class="modal" style="display:none;">
        <div class="date">
            <form id="form" action="cart.php" method="post">
                <input type="hidden" name="flag" value="1">
                <p style="margin: 0px">Start Date</p>
                <input type="date" style="margin-top: 5px; margin-bottom: 15px;" placeholder="DD/MM/YYYY" required name="start" style="margin-top: 20px;">
                <br>
                <p style="margin: 0px;">End Date</p>
                <input type="date" style="margin-top: 5px;" placeholder="DD/MM/YYYY" required name="end" style="margin-top: 20px;">
                <br>
                <button type="submit">Set</button>
            </form>
        </div>
    </div>
    <form action="cart.php" id="form1" method="post">
        <input type="hidden" id="val1" name="type">
        <input type="hidden" id="val2" name="src">
        <input type="hidden" id="val3" name="price">
        <input type="hidden" name="flag" value="0">
    </form>
    <div class="outer">
        <div class="container">
            <div class="disp" style="font-size: 24px; weight: 500px">Booking Details</div>
            <div class="photo" style="padding: 0; height: 250px; width: 300px;"><img height="250px" width="300px" class="pht" src="<?php echo $_SESSION['src'] ?>" alt="Chosen Room Photo"></div>
            <div class="rtype">
                <?php echo $_SESSION['type'] ?>
            </div>
            <?php
            $date1 = date_create($_SESSION['start']);
            $date2 = date_create($_SESSION['end']);
            $diff = date_diff($date2, $date1);
            $_SESSION['tprice'] = $diff->format("%a") * $_SESSION['price'];
            ?>
            <div class="tdays" style="padding: 0 10px;">
                <?php echo 'You have booked for ' . $diff->format("%a") . ' day(s)'; ?>
            </div>
            <div class="tamt">
                <?php echo 'Total Amount: &#8377; ' . $diff->format("%a") * $_SESSION['price']; ?>
            </div>
            <style>
                #buttColour {
                    color: rgba(255, 255, 255, 0.4);
                }

                #buttColour:hover {
                    color: white;
                }
            </style>
            <div class="subm">
                <div class="asmButt" style="margin: 10px 10px 10px 0px;"><a><span></span><span></span><span></span><span></span><button id="buttColour" onclick="call()" style="background:none; border:none;">Update</button></a></div>
                <div class="asmButt" style="margin: 10px 10px 10px 0px;"><a><span></span><span></span><span></span><span></span><button id="buttColour" onclick="calldate()" style="background:none; border:none;">Change Date</button></a></div>
                <div class="asmButt" style="margin: 10px 10px 10px 0px;"><a href="Rooms.php"><span></span><span></span><span></span><span></span><button id="buttColour" style="background:none; border:none;">Cancel</button></a></div>
                <div class="asmButt" style="margin: 10px 0px 10px 0px;"><a href="transaction.php"><span></span><span></span><span></span><span></span><button id="buttColour" style="background:none; border:none;">Confirm</button></a></div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
    function call() {
        document.getElementById('modal').style.display = 'block';
    }

    function calldate() {
        document.getElementById('date').style.display = 'block';
    }

    function opn1() {
        document.getElementById('val1').value = "Deluxe Non-A.C Room";
        document.getElementById('val2').value = "deluxe-non-ac-room-500x500 (1).png";
        document.getElementById('val3').value = "2000";
        document.getElementById('form1').submit();
    }

    function opn2() {
        document.getElementById('val1').value = "Deluxe A.C Room";
        document.getElementById('val2').value = "superior-room-ac1 (1).jpg";
        document.getElementById('val3').value = "3000";
        document.getElementById('form1').submit();
    }

    function opn3() {
        document.getElementById('val1').value = "Executive Suite";
        document.getElementById('val2').value = "Executive_Suite.jpg";
        document.getElementById('val3').value = "5000";
        document.getElementById('form1').submit();
    }

    function opn4() {
        document.getElementById('val1').value = "Honeymoon Suite";
        document.getElementById('val2').value = "https://i.pinimg.com/originals/78/74/7f/78747fb2b7cc49a3f3571a1cc0a1f77b.jpg";
        document.getElementById('val3').value = "5000";
        document.getElementById('form1').submit();
    }

    function opn5() {
        document.getElementById('val1').value = "Two Bedroom Villa";
        document.getElementById('val2').value = "two bedroom villa.jpg";
        document.getElementById('val3').value = "10000";
        document.getElementById('form1').submit();
    }
</script>

</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap');

    body {
        background-image: linear-gradient(267deg, #1746A2, #5F9DF7);
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
        height: 374px;
        width: 564px;
        display: grid;
        grid-template-areas:
            'disp disp'
            'rtype photo'
            'tdays photo'
            'tamt photo'
            'subm subm';
        grid-gap: 4px;
        background-color: #073c66;
        padding: 7px;
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

    .subm button {
        cursor: pointer;
        background: none;
        border: none;
        font-size: 17px;
        font-family: 'Lato', sans-serif;
        color: rgba(255, 255, 255, 0.4);
    }



    input[type="date"] {
        padding: 10px;
        border: none;
        background-color: #0F4C75;
        color: white;
        outline: none;
        font-size: 14px;
        border-radius: 5px;
    }

    .date {
        font-family: 'Lato', sans-serif;
        z-index: 3;
        margin: auto;
        border-radius: 25px;
        background-color: white;
        padding: 39px 50px 10px 50px;
        max-width: fit-content;
        height: 220px;
        text-align: center;
        position: fixed;
        top: 0;
        bottom: 0px;
        left: 0;
        right: 0;
    }

    .date button {
        cursor: pointer;
        font-family: 'Lato', sans-serif;
        padding: 6px 12px 6px 12px;
        color: white;
        background-color: #b2cce7;
        margin-top: 22px;
        border-radius: 15px;
        border: none;
        font-size: 19px;
        transition: transform 0.3s;
    }

    .date button:hover {
        transform: scale(1.02);
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

    .asmButt {
        display: inline-block;
    }

    .asmButt a {
        position: relative;
        padding: 8px;
        padding-top: 4px;
        text-decoration: none;
        color: rgba(255, 255, 255, 0.4);
        background: #0F4C75;
        letter-spacing: 1px;
        font-size: 20px;
    }

    .asmButt a:hover {
        color: white;
    }

    .asmButt a span {
        display: block;
        position: absolute;
        background: #2894ff;
    }

    .asmButt a span:nth-child(1) {
        left: 0;
        bottom: 0;
        width: 2px;
        height: 100%;
        transform: scaleY(0);
        transform-origin: top;
        transition: transform 0.5s;
    }

    .asmButt a:hover span:nth-child(1) {
        transform: scaleY(1);
        transform-origin: bottom;
        transition: transform 0.5s;
    }

    .asmButt a span:nth-child(2) {
        left: 0;
        bottom: 0;
        width: 100%;
        height: 2px;
        transform: scaleX(0);
        transform-origin: right;
        transition: transform 0.5s;
    }

    .asmButt a:hover span:nth-child(2) {
        transform: scalex(1);
        transform-origin: left;
        transition: transform 0.5s;
    }

    .asmButt a span:nth-child(3) {
        right: 0;
        bottom: 0;
        width: 2px;
        height: 100%;
        transform: scaleY(0);
        transform-origin: top;
        transition: transform 0.5s;
        transition-delay: 0.5s;
    }

    .asmButt a:hover span:nth-child(3) {
        transform: scaleY(1);
        transform-origin: bottom;
        transition: transform 0.5s;
        transition-delay: 0.5s;
    }

    .asmButt a span:nth-child(4) {
        left: 0;
        top: 0;
        width: 100%;
        height: 2px;
        transform: scaleX(0);
        transform-origin: right;
        transition: transform 0.5s;
        transition-delay: 0.5s;
    }

    .asmButt a:hover span:nth-child(4) {
        transform: scalex(1);
        transform-origin: left;
        transition: transform 0.5s;
        transition-delay: 0.5s;
    }

    .imgchoices {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
</style>