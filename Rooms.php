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
      <button type="submit" style="color:black;">Set</button>
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
  .date {
    margin: auto;
  }

  button {
    background: none;
    color: white;
    border: none;
    font-size: 20px;
    font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
      "Lucida Sans", Arial, sans-serif;
  }
</style>
