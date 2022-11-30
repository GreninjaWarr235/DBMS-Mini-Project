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
                <style>
                    #buttColour {
                        color: rgba(255, 255, 255, 0.4);
                    }

                    #buttColour:hover {
                        color: white;
                    }
                </style>
                <div class="info">
                    <pre><input type="text" placeholder="Confirmation Number" name="confirmno" rows="5"></pre>
                    <pre><input type="text" placeholder="Email Address" name="emailadd" rows="5"></pre>
                    <br>
                    <div class="asmButt"><a><span></span><span></span><span></span><span></span><button id="buttColour" type="submit" style="background:none; border:none;">Find Reservation</button></a></div>
                </div>
                <br>
                <hr style="border:none; height: 0.08em; background:#06283D;">
                <p>Don't know your Confirmation Number?</p>
                <p>Your Confirmation Number was sent to you at the time of booking. Please check your confirmation transcript.
                </p>
                <!-- <br>
                <div class="info">
                    <div class="asmButt" style="font-family:'Lato', sans-serif; "><a href="#"><span></span><span></span><span></span><span></span>Help</a>
                    </div>
                </div> -->
            </div>
        </div>
    </form>
</body>

</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap');

    body {
        background-color: #f5f5f5;
        background-image: linear-gradient(267deg, #1746A2, #5F9DF7);
    }

    .item {
        display: inline-block;
        width: 180px;
        height: 75px;
    }

    .ext {
        margin-left: 80px;
    }

    .title {
        text-align: center;
        padding-bottom: 10px;
        color: hsl(195, 82%, 13%);
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    .email {
        margin-left: 80px;
    }

    .fn {
        margin-right: 40px;
    }

    .ln {
        margin-right: 40px;
    }

    .container {
        display: flex;
        text-align: center;
        justify-content: center;
    }

    .box {
        justify-content: center;
        background-color: white;
        width: 300px;
        border: 1px solid white;
        padding-top: 20px;
        padding-left: 50px;
        padding-right: 50px;
        padding-bottom: 40px;
        margin-right: 20px;
        margin: 80px;
        border-radius: 20px;
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    input {
        align-self: center;
    }

    .info {
        text-align: center;
    }

    p {
        color: hsl(195, 82%, 13%);
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    #res:hover {
        background-color: aqua;
        cursor: pointer;
    }

    button {
        cursor: pointer;
        background: none;
        border: none;
        font-size: 16px;
        font-family: 'Lato', sans-serif;
    }

    button:hover {
        color: white;
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
</style>