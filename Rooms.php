<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Rooms</title>
  <link rel="stylesheet" href="Rooms_styles.css">
  <header>
    <nav>
      <a class="logo" href="index.php"><img height="55" width="55" src="Logo1.jpeg" alt="Hotel Logo"></a><a
        href="index.php#branches">Our
        Branches</a><a href="index.php#amenities">Amenities</a><a href="managebooking.php">Manage Booking</a>
      <div class="asmButt"><a
          href="index.php#mainouterbranches"><span></span><span></span><span></span><span></span>Book a
          Stay</a></div>
    </nav>
  </header>
</head>

<body>
<?php
include 'dbconnect.php';
if ($_SERVER["REQUEST_METHOD"]=="POST"){
  if ($_POST['flag']=="0") {
    $_SESSION['start'] = $_POST['start'];
    $_SESSION['end'] = $_POST['end'];
  }

  if ($_POST['flag']=="1") {
    $_SESSION['type'] = $_POST['type'];
    $_SESSION['price'] = $_POST['price'];
    $_SESSION['src'] = $_POST['src'];
    header("location:guestdetails.php");
  }
}
?>
  <div class="date">
    <form id="form" action="Rooms.php" method="post">
      <input type="hidden" name="flag" value="0">
      <input type="date" required name="start">
      <input type="date" required name="end">
      <button type="submit">Set</button>
    </form>
  </div>
  <div class="OuterDiv">
    <br>
    <hr class="mainhr">
    <h1 id="Heading">Rooms</h1>


    <div class="roomDiv">
      <div class="roomDiv_img">
        <img class="roomimg" src="deluxe-non-ac-room-500x500 (1).png" alt="Deluxe Non-A.C Room">
      </div>

      <div class="roomDiv_desc">
        <div class="room_title">
          <h1 class="title">Deluxe Non-A.C</h1>
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
          <h3 class="otherprices">From 2000/-</h3>
        </div>
        <a>
          <div class="button">
            <form action="rooms.php" method="post">
            <input type="hidden" name="flag" value="1">
              <input type="hidden" name="type" value="Deluxe Non-A.C">
              <input type="hidden" name="price" value="2000">
              <input type="hidden" name="src" value="deluxe-non-ac-room-500x500 (1).png">
              <span><button >Book </button></span>
            </form>
          </div>
        </a>
      </div>

    </div>

    <!-- Room2 -->
    <div class="roomDiv">
      <div class="roomDiv_img">
        <img class="roomimg" src="superior-room-ac1 (1).jpg" alt="Deluxe A.C Room">
      </div>

      <div class="roomDiv_desc">
        <div class="room_title">
          <h1 class="title">Deluxe A.C</h1>
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
          <h3 class="otherprices">From 3000/-</h3>
        </div>
        <a>
          <div class="button">
            <form action="rooms.php" method="post">
            <input type="hidden" name="flag" value="1">
              <input type="hidden" name="type" value="Deluxe A.C">
              <input type="hidden" name="price" value="3000">
              <input type="hidden" name="src" value="superior-room-ac1 (1).jpg">
              <span><button >Book </button></span>
            </form>
          </div>
        </a>
      </div>
    </div>

    <!-- Room3 -->
    <div class="roomDiv">

      <div class="roomDiv_img">
        <img class="roomimg" src="Executive_Suite.jpg" alt="Executive Suite">
      </div>

      <div class="roomDiv_desc">
        <div class="room_title">
          <h1 class="title">Executive Suite</h1>
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
          <h3 class="otherprices">From 5000/-</h3>
        </div>
        <a>
          <div class="button">
            <form action="rooms.php" method="post">
            <input type="hidden" name="flag" value="1">
              <input type="hidden" name="type" value="Executive Suite">
              <input type="hidden" name="price" value="5000">
              <input type="hidden" name="src" value="Executive_Suite.jpg">
              <span><button >Book </button></span>
            </form>
          </div>
        </a>

      </div>
    </div>

    <!--  Room4-->
    <div class="roomDiv">
      <div class="roomDiv_img">
        <img class="roomimg" src="https://www.daraphuket.com/images/2397.jpg" alt="Honeymoon Suite">
      </div>

      <div class="roomDiv_desc">
        <div class="room_title">
          <h1 class="title">Honeymoon Suite</h1>
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
          <h3 class="otherprices">From 5000/-</h3>
        </div>
        <a>
          <div class="button">
            <form action="rooms.php" method="post">
            <input type="hidden" name="flag" value="1">
              <input type="hidden" name="type" value="Honeymoon Suite">
              <input type="hidden" name="price" value="5000">
              <input type="hidden" name="src" value="https://www.daraphuket.com/images/2397.jpg">
              <span><button >Book </button></span>
            </form>
          </div>
        </a>
      </div>

    </div>

    <!-- Room5 -->
    <div class="roomDiv">
      <div class="roomDiv_img">
        <img class="roomimg" src="two bedroom villa.jpg" alt="Two Bedroom Villa">
      </div>

      <div class="roomDiv_desc">
        <div class="room_title">
          <h1 class="title">Two Bedroom Villa</h1>
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
          <h3 class="otherprices">From</h3>
          <h3 class="h31000">10000/-</h3>
        </div>
        <a>
          <div class="button">
            <form action="rooms.php" method="post">
            <input type="hidden" name="flag" value="1">
              <input type="hidden" name="type" value="Two Bedroom Villa">
              <input type="hidden" name="price" value="10000">
              <input type="hidden" name="src" value="two bedroom villa.jpg">
              <span><button >Book </button></span>
            </form>
          </div>
        </a>
      </div>

    </div>

  </div>
  <footer>
    <p>Connect with us</p>
    <div>
      <a href="" target="_main"><img class="facebook" height="28px" width="28px" src="facebook.png"></a></pre>
      <a href="" target="_main"><img class="instagram" height="35px" width="35px" src="instagram.png"></a></pre>
      <a href="" target="_main"><img class="twitter" height="34px" width="34px" src="twitter.png"></a></pre>
      <a href="" target="_main"><img class="youtube" height="32px" width="32px" src="youtube.png" height="40"></a></pre>
    </div>
  </footer>
</body>

</html>

<style>
  * {
  margin: 0;
  padding: 0;
}

header {
  box-sizing: border-box;
  position: sticky;
  text-align: center;
  background-color: #d5eefc;
  font-size: 20px;
  font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
    Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  z-index: 2;
}

header img {
  border-radius: 50%;
}

.logo {
  margin: 12px;
  margin-left: 40px;
  margin-bottom: 10px;
  vertical-align: middle;
  transition: 0.5s;
}

.logo:hover {
  transform: scale(1.075);
}

header nav>a {
  font-size: 19px;
  text-decoration: none;
  color: #47b5ff;
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
  align-items: center;
  margin: 12px;
  margin-left: 40px;
  display: inline-block;
  position: relative;
  bottom: 0px;
}

.asmButt {
  display: inline-block;
}

.asmButt a {
  position: relative;
  padding: 8px;
  padding-top: 7px;
  padding-bottom: 9px;
  text-decoration: none;
  color: rgba(255, 255, 255, 0.4);
  background: #0f4c75;
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

.date {
  margin: auto;
}

button {
  cursor: pointer;
  background: none;
  color: white;
  border: none;
  font-size: 20px;
  font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
    "Lucida Sans", Arial, sans-serif;
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
  border-color: #98cdeb;
  border-width: 7px;
  width: 7%;
  margin: auto;
  padding-bottom: 20px;
}

#Heading {
  color: hsl(203, 86%, 29%);
  text-align: center;
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
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
  height: 250px;
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
  padding-top: 20px;
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
  font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
    Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  border-bottom: 10px;
  border-top: 2px ridge #256d85;
  padding-top: 20px;
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
  margin-top: 15px;
}

/* End Section */
.roomDiv_end {
  display: inline-block;
  height: 250px;
  width: 240px;
  position: relative;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: "\00bb";
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

.button {
  position: absolute;
  bottom: 30px;
  right: 40px;
  border-radius: 4px;
  background-color: #06283d;
  border: none;
  color: #ffffff;
  text-align: center;
  font-size: 22px;
  padding: 20px;
  width: 70px;
  cursor: pointer;
  margin: 5px;
}

.price {
  display: inline-block;
  height: 20px;
  width: 50px;
  position: absolute;
  top: 70px;
  right: 74px;
  font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
    Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
}

.h31000 {
  margin-left: -7px;
}

.otherprices {
  margin-left: -2px;
}

footer {
  justify-content: center;
  background-color: #dff6ff;
  width: 100%;
  text-align: center;
  font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
    Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  padding-top: 5px;
  padding-bottom: 14px;
  font-size: 18px;
  color: hsl(195, 82%, 13%);
}

footer p {
  font-size: 15px;
  padding: 8px;
  padding-bottom: 21px;
}

footer a {
  margin-right: 40px;
}

footer img {
  transition: 0.3s;
}

footer img:hover {
  transform: scale(1.3);
}

footer a:last-child {
  margin-right: revert;
}

.facebook {
  padding-bottom: 4px;
}

.youtube {
  padding-bottom: 2px;
}

.instagram {
  padding-bottom: -1px;
}
</style>