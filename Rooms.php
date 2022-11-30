<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rooms</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <header class="header">
    <a class="logo" href="index.php"><img height="55" width="55" src="Logo1.jpeg" alt="Hotel Logo"></a>
    <nav>
      <ul class="nav_links">
        <li>
          <a href="index.php#branches">Our
            Branches</a>
        </li>
        <li>
          <a href="index.php#amenities">Amenities</a>
        </li>
        <li>
          <a href="managebooking.php">Manage Booking</a>
        </li>
        <li>
          <a href="#connect">Connect With Us</a>
        </li>
        <div class="asmButt"><a href="index.php#mainouterbranches"><span></span><span></span><span></span><span></span>Book a
            Stay</a></div>
      </ul>
    </nav>
  </header>
</head>

<body>
  <div id="modal" class="modal" style="display:block;">
    <div class="date">
      <form id="form" action="Rooms.php" method="post">
        <input type="hidden" name="flag" value="0">
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
  <?php
  include 'dbconnect.php';
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['flag'] == "0") {
      $_SESSION['start'] = $_POST['start'];
      $_SESSION['end'] = $_POST['end'];
  ?>
      <script type="text/javascript">
        document.getElementById('modal').style.display = 'none';
      </script>
  <?php
    }
    if ($_POST['flag'] == "1") {
      $_SESSION['type'] = $_POST['type'];
      $_SESSION['price'] = $_POST['price'];
      $_SESSION['src'] = $_POST['src'];
      header("location:guestdetails.php");
    }
  }
  ?>
  <div class="OuterDiv">
    <br>
    <hr class="mainhr">
    <h1 id="Heading" style="weight: 1000px;">Rooms</h1>


    <div class="roomDiv">
      <div class="roomDiv_img">
        <img class="roomimg" src="deluxe-non-ac-room-500x500 (1).png" alt="Deluxe Non-A.C Room">
      </div>

      <div class="roomDiv_desc">
        <div class="room_title">
          <h2 class="title">Deluxe Non-A.C</h2>
        </div>
        <div class="roomdesc">
          <p>Room Capacity: 2 Persons</p>
          <p>Room Size: 600 sq. ft</p>
        </div>
        <div class="room_am">
          <span class="review">Customer Review : &#11088; &#11088; &#11088;</span>
        </div>
      </div>

      <div class="roomDiv_end">
        <div class="price">
          <h3 class="otherprices">From<br>&#8377; 2000/-</h3>
        </div>
        <div class="button">
          <form action="rooms.php" method="post">
            <input type="hidden" name="flag" value="1">
            <input type="hidden" name="type" value="Deluxe Non-A.C">
            <input type="hidden" name="price" value="2000">
            <input type="hidden" name="src" value="deluxe-non-ac-room-500x500 (1).png">
            <div class="asmButt"><a><span></span><span></span><span></span><span></span><button type="submit">Book</button></a></div>
          </form>
        </div>
      </div>

    </div>

    <!-- Room2 -->
    <div class="roomDiv">
      <div class="roomDiv_img">
        <img class="roomimg" src="superior-room-ac1 (1).jpg" alt="Deluxe A.C Room">
      </div>

      <div class="roomDiv_desc">
        <div class="room_title">
          <h2 class="title">Deluxe A.C</h2>
        </div>
        <div class="roomdesc">
          <p>Room Capacity: 2 Persons</p>
          <p>Room Size: 650 sq. ft</p>
        </div>
        <div class="room_am">
          <span class="review">Customer Review : &#11088; &#11088; &#11088; &#11088;</span>
        </div>
      </div>

      <div class="roomDiv_end">
        <div class="price">
          <h3 class="otherprices">From<br>&#8377; 3000/-</h3>
        </div>
        <div class="button">
          <form action="rooms.php" method="post">
            <input type="hidden" name="flag" value="1">
            <input type="hidden" name="type" value="Deluxe A.C">
            <input type="hidden" name="price" value="3000">
            <input type="hidden" name="src" value="superior-room-ac1 (1).jpg">
            <div class="asmButt"><a><span></span><span></span><span></span><span></span><button type="submit">Book</button></a></div>
          </form>
        </div>
      </div>
    </div>

    <!-- Room3 -->
    <div class="roomDiv">

      <div class="roomDiv_img">
        <img class="roomimg" src="Executive_Suite.jpg" alt="Executive Suite">
      </div>

      <div class="roomDiv_desc">
        <div class="room_title">
          <h2 class="title">Executive Suite</h2>
        </div>
        <div class="roomdesc">
          <p>Room Capacity: 4 Persons</p>
          <p>Room Size: 900 sq. ft</p>
          <p>City View, Executive Suite Access</p>
        </div>
        <div class="room_am">
          <span class="review">Customer Review : &#11088; &#11088; &#11088; &#11088;</span>
        </div>
      </div>

      <div class="roomDiv_end">
        <div class="price">
          <h3 class="otherprices">From<br>&#8377; 5000/-</h3>
        </div>
        <div class="button">
          <form action="rooms.php" method="post">
            <input type="hidden" name="flag" value="1">
            <input type="hidden" name="type" value="Executive Suite">
            <input type="hidden" name="price" value="5000">
            <input type="hidden" name="src" value="Executive_Suite.jpg">
            <div class="asmButt"><a><span></span><span></span><span></span><span></span><button type="submit">Book</button></a></div>
          </form>
        </div>
      </div>
    </div>

    <!--  Room4-->
    <div class="roomDiv">
      <div class="roomDiv_img">
        <img class="roomimg" src="https://i.pinimg.com/originals/78/74/7f/78747fb2b7cc49a3f3571a1cc0a1f77b.jpg" alt="Honeymoon Suite">
      </div>

      <div class="roomDiv_desc">
        <div class="room_title">
          <h2 class="title">Honeymoon Suite</h2>
        </div>
        <div class="roomdesc">
          <p>Room Capacity: 2 Persons</p>
          <p>Room Size: 800 sq. ft</p>
          <p>City View, Jacuzzi </p>
        </div>
        <div class="room_am">
          <span class="review">Customer Review : &#11088; &#11088; &#11088; &#11088; &#11088;</span>
        </div>
      </div>

      <div class="roomDiv_end">
        <div class="price">
          <h3 class="otherprices">From<br>&#8377; 5000/-</h3>
        </div>
        <div class="button">
          <form action="rooms.php" method="post">
            <input type="hidden" name="flag" value="1">
            <input type="hidden" name="type" value="Honeymoon Suite">
            <input type="hidden" name="price" value="5000">
            <input type="hidden" name="src" value="https://i.pinimg.com/originals/78/74/7f/78747fb2b7cc49a3f3571a1cc0a1f77b.jpg">
            <div class="asmButt"><a><span></span><span></span><span></span><span></span><button type="submit">Book</button></a></div>
          </form>
        </div>
      </div>

    </div>

    <!-- Room5 -->
    <div class="roomDiv">
      <div class="roomDiv_img">
        <img class="roomimg" src="two bedroom villa.jpg" alt="Two Bedroom Villa">
      </div>

      <div class="roomDiv_desc">
        <div class="room_title">
          <h2 class="title">Two Bedroom Villa</h2>
        </div>
        <div class="roomdesc">
          <p>Room Capacity: 6 Persons</p>
          <p>Room Size: 1400 sq. ft</p>
          <p>Personal Staff, Jacuzzi, All other benefits</p>
        </div>
        <div class="room_am">
          <span class="review">Customer Review : &#11088; &#11088; &#11088; &#11088; &#11088;</span>
        </div>
      </div>

      <div class="roomDiv_end">
        <div class="price">
          <h3 class="h3others">From<br>&#8377; 10000/-</h3>
        </div>
        <div class="button">
          <form action="rooms.php" method="post">
            <input type="hidden" name="flag" value="1">
            <input type="hidden" name="type" value="Two Bedroom Villa">
            <input type="hidden" name="price" value="10000">
            <input type="hidden" name="src" value="two bedroom villa.jpg">
            <div class="asmButt"><a><span></span><span></span><span></span><span></span><button type="submit">Book</button></a></div>
          </form>
        </div>
      </div>

    </div>

  </div>
  <footer>
    <p id="connect">Connect With Us</p>
    <div>
      <a href="" target="_main"><img class="facebook" height="28px" width="28px" src="facebook.png"></a></pre>
      <a href="" target="_main"><img class="instagram" height="35px" width="35px" src="instagram.png"></a></pre>
      <a href="" target="_main"><img class="twitter" height="34px" width="34px" src="twitter.png"></a></pre>
      <a href="" target="_main"><img class="youtube" height="32px" width="32px" src="youtube.png"></a></pre>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap');

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    margin: 0px;
  }

  html {
    scroll-behavior: smooth;
    scroll-padding-top: var(--scroll-padding, 70px);
  }

  header {
    position: sticky;
    top: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-align: center;
    background-color: #d5eefc;
    z-index: 1;
  }

  .nav_links {
    padding: 0px;
    margin: 0px;
    list-style: none;
  }

  .nav_links li {
    display: inline-block;
  }

  .logo {
    margin: 0px;
    padding-left: 250px;
  }

  .logo img {
    border-radius: 50%;
    transition: .5s;
  }

  .logo img:hover {
    transform: scale(1.075);
  }

  header nav>a:last-child {
    margin-right: revert;
  }

  header nav>a:hover {
    text-decoration: underline;
  }

  header nav>a:visited {
    color: #3390ce;
  }

  header a {
    font-size: 20px;
    font-family: 'Lato', sans-serif;
    text-decoration: none;
    color: #47B5FF;
    align-items: center;
    margin: 12px;
    display: inline-block;
    position: relative;
  }

  header .asmButt {
    padding-right: 250px;
    font-size: 20px;
    font-family: 'Lato', sans-serif;
    display: inline-block;
  }

  .asmButt a {
    position: relative;
    padding: 8px;
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

  input[type="date"] {
    padding: 10px;
    border: none;
    background-color: #0F4C75;
    color: white;
    outline: none;
    font-size: 14px;
    border-radius: 5px;
  }

  ::-webkit-calendar-picker-indicator {
    filter: invert(1);
  }

  .date {
    font-family: 'Lato', sans-serif;
    z-index: 3;
    margin: auto;
    border-radius: 25px;
    background-color: white;
    padding: 39px 50px 10px 50px;
    max-width: fit-content;
    height: 296px;
    text-align: center;
    position: fixed;
    top: 0;
    bottom: 0px;
    left: 0;
    right: 0;
  }

  .date button {
    padding: 6px 12px 6px 12px;
    color: white;
    background-color: #b2cce7;
    margin-top: 22px;
    border-radius: 15px;
    transition: transform 0.3s;
  }

  .date button:hover {
    transform: scale(1.02);
  }

  .modal form {
    align-items: center;
    justify-content: center;
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

  .OuterDiv {
    height: 1500px;
    width: 1050px;
    margin: auto;
    padding: 10px;
  }

  .mainhr {
    border-style: none;
    border-top-style: dotted;
    border-color: #47b5ff;
    border-width: 7px;
    width: 7%;
    margin: auto;
    padding-bottom: 20px;
  }

  #Heading {
    color: hsl(203, 86%, 29%);
    text-align: center;
    font-family: 'Lato', sans-serif;
  }

  .roomDiv {
    height: 250px;
    margin: 20px 0 20px 0;
    background-color: #e8f9fd;
    border: 4px solid #256d85;
  }

  /* Image Section */
  .roomDiv_img {
    display: inline-block;
    height: 250px;
    width: 300px;
  }

  .roomimg {
    position: absolute;
    height: 242px;
    width: 300px;
  }

  /* Description Section */
  .roomDiv_desc {
    display: inline-block;
    height: 250px;
    width: 492px;
    vertical-align: top;
    position: relative;
  }

  .room_title {
    display: inline-block;
    height: 60px;
    width: 482px;
  }

  .title {
    display: inline-block;
    padding-top: 18px;
    margin-left: 20px;
    font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
      "Lucida Sans", Arial, sans-serif;
  }

  .hello {
    display: inline-block;
    width: 3px;
  }

  .roomdesc {
    display: inline-block;
    height: 130px;
    width: 482px;
    position: absolute;
    left: 24px;
    top: 70px;
    font-family: 'Lato', sans-serif;
    border-bottom: 10px;
    border-top: 2px ridge #256d85;
    padding-top: 11px;
  }

  .room_am {
    display: inline-block;
    position: absolute;
    bottom: 0;
    left: 24px;
    height: 50px;
    width: 482px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
      Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  }

  .review {
    display: inline-block;
    margin-top: 8px;
  }

  /* End Section */
  .roomDiv_end {
    text-align: center;
    justify-content: center;
    display: inline-block;
    height: 242px;
    width: 210px;
    top: -8px;
    left: 11px;
    position: relative;
  }

  .button .asmButt {
    position: absolute;
    bottom: 40px;
    right: 68px;
    font-family: 'Lato', sans-serif;
  }

  button {
    cursor: pointer;
    background: none;
    border: none;
    font-size: 20px;
    font-family: 'Lato', sans-serif;
    color: rgba(255, 255, 255, 0.4);
  }

  button:hover {
    color: white;
  }

  .button .asmButt a {
    padding: 10px;
  }

  .price {
    display: inline-block;
    height: auto;
    width: auto;
    position: absolute;
    /* top: 88px;
    right: 74px; */
    font-family: 'Lato', sans-serif;
  }

  .otherprices {
    position: absolute;
    right: -43px;
    top: 100px;
    font-size: 20px;
    width: 78px;
  }

  .h3others {
    position: absolute;
    right: -47px;
    top: 100px;
    font-size: 20px;
    width: 87px;
  }

  footer {
    justify-content: center;
    background-color: #dff6ff;
    width: 100%;
    text-align: center;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    padding-top: 5px;
    padding-bottom: 16px;
    font-size: 18px;
    color: hsl(195, 82%, 13%);
  }

  footer p {
    font-size: 15px;
    padding: 8px;
    padding-bottom: 4px;
  }

  footer a {
    margin-right: 40px;
  }

  footer img {
    transition: .3s;
  }

  footer img:hover {
    transform: scale(1.3);
  }

  footer a:last-child {
    margin-right: revert;
  }
</style>