<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <header class="header">
    <a class="logo" href="index.php"><img height="55" width="55" src="Logo1.jpeg" alt="Hotel Logo"></a>
    <nav>
      <ul class="nav_links">
        <li>
          <a href="#branches">Our
            Branches</a>
        </li>
        <li>
          <a href="#amenities">Amenities</a>
        </li>
        <li>
          <a href="managebooking.php">Manage Booking</a>
        </li>
        <li>
          <a href="#connect">Connect With Us</a>
        </li>
        <div class="asmButt"><a href="#mainouterbranches"><span></span><span></span><span></span><span></span>Book a
            Stay</a></div>
      </ul>
    </nav>
  </header>
</head>

<body>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img width="100%" height="635" src="Agra.jpg" class="d-block w-100" alt="Agra Photo">
        <div class="carousel-caption d-none d-md-block">
          <h6>Agra</h6>
        </div>
      </div>
      <div class="carousel-item">
        <img width="100%" height="635px" src="https://wallpaperset.com/w/full/a/8/c/173787.jpg" class="d-block w-100"
          alt="Delhi Photo">
        <div class="carousel-caption d-none d-md-block">
          <h6>New Delhi</h6>
        </div>
      </div>
      <div class="carousel-item">
        <img width="100%" height="635px" src="Mumbai.jpg" class="d-block w-100" alt="Mumbai Photo">
        <div class="carousel-caption d-none d-md-block">
          <h6>Mumbai</h6>
        </div>
      </div>
      <div class="carousel-item">
        <img width="100%" height="635px"
          src="https://pondicherrytourism.co.in/images/places-to-visit/header/paradise-beach-puducherry-tourism-entry-fee-timings-holidays-reviews-header.jpg"
          class="d-block w-100" alt="Puducherry Photo">
        <div class="carousel-caption d-none d-md-block">
          <h6>Puducherry</h6>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <br>
  <h3>EXPLORE MVS</h3>
  <div class="intro">
    <h5>Descend into a world that was once the sole preserve of royalty, step onto the soft, white sand beaches at a
      secluded island or discover the hidden secrets of mist-draped hills with MVS</h5>
  </div>
  <br><br>
  <div class="intro_container">
    <div><img class="intro_img" height="200px" width="300px"
        src="https://www.tajhotels.com/content/dam/tajhotels/in/en/themes/Beach_dining_theme.png/jcr:content/renditions/cq5dam.web.512.512.png"
        alt=""></div>
    <div class="text">
      <p>BEACH RETREATS</p>
      Wake up to the sound of waves lapping lazily at the shore. Uncover serenity and marvel at the wealth of beauty
      within the glittering blue seas. Give in to the siren song of the sun, sand and surf with Beach Retreats.
    </div>
    <div><img class="intro_img" height="200px" width="300px"
        src="https://www.tajhotels.com/content/dam/tajhotels/in/en/themes/hill_station_theme.png/jcr:content/renditions/cq5dam.web.512.512.png"
        alt=""></div>
    <div class="text">
      <p>HILL STATIONS</p>
      Gaze at the mist rolling in over the hill-tops from your luxurious villa. Marvel at glorious sunsets that will
      take your breath away from a private deck.
    </div>
    <div class="text">
      <p>ROYAL INDIA</p>
      Wander through the storied halls of a fairy tale palace, where dreams come to life. Retreat into your majestic
      suite, inspired by elegance.
    </div>
    <div><img class="intro_img" height="200px" width="300px"
        src="https://www.tajhotels.com/content/dam/tajhotels/in/en/themes/royal_theme.png/jcr:content/renditions/cq5dam.web.512.512.png"
        alt=""></div>
    <div class="text">
      <p>URBAN GETAWAYS</p>
      There is magic to be found in the energy of a bustling city. Where vibrant markets offer you everything you could
      imagine and centuries of history hide in the most unassuming places. Discover the world’s most spectacular urban
      hubs.
    </div>
    <div><img class="intro_img" height="200px" width="300px"
        src="https://media.cntraveler.com/photos/5ca50d2b19fc3838ff1a31b0/master/w_4000,h_2667,c_limit/Hong-Kong-China_GettyImages-900611166.jpg"
        alt=""></div>
  </div>
  <div class="branchDesc">
    <h3 id="branches">OUR BRANCHES</h3>
    <p>The unrivalled guardian of grandeur, MVS conjures a panoply of superlatives. With an art of hospitality that has
      been perfected over a century, MVS delivers unmatched experiences and lasting memories for guests around the
      world. </p>
    <p>Our branches span from the mighty north to the majestic south with a blend of their unique cultures. Experience
      your stay with us at Mumbai, Agra, Delhi and Puducherry.</p>
  </div>
  <div id="mainouterbranches">
    <br><br>
    <hr>
    <div class="branchesouter">
      <a href="Rooms.php" target="_blank">
        <div class="branches">
          <div class="Upperblock">
            <img class="branchimg" src="mumbai.png" alt="Mumbai">
          </div>
          <div class="lowerblock">
            <h4 class="hotelCityName">Mumbai</h4>
          </div>
        </div>
      </a>

      <a href="Rooms.php" target="_blank">
        <div class="branches">
          <div class="Upperblock">
            <img class="branchimg" src="https://examsdaily.in/wp-content/uploads/2018/12/new-delhi-240x300.jpg"
              alt="New Delhi">
          </div>
          <div class="lowerblock">
            <h4 class="hotelCityName">New Delhi</h4>
          </div>
        </div>
      </a>

      <a href="Rooms.php" target="_blank">
        <div class="branches">
          <div class="Upperblock">
            <img class="branchimg"
              src="https://indiatajtours.com/wp-content/uploads/2019/02/IMG_2746-59c2327eedd26__880-240x300.jpg"
              alt="Agra">
          </div>
          <div class="lowerblock">
            <h4 class="hotelCityName">Agra</h4>
          </div>
        </div>
      </a>

      <a href="Rooms.php" target="_blank">
        <div class="branches">
          <div class="Upperblock">
            <img class="branchimg" src="https://aquablissresort.com/wp-content/uploads/2019/07/pik36-240x300.jpg"
              alt="Kerala">
          </div>
          <div class="lowerblock">
            <h4 class="hotelCityName">Puducherry</h4>
          </div>
        </div>
      </a>
      <hr>
      <br><br>
    </div>
  </div>
  <main>
    <h3 id="amenities">OUR ANCILLARY SERVICES</h3>
    <br>
    <div class="image_container">
      <div>
        <img src="https://image.wedmegood.com/resized/800X/uploads/member/77182/1489015432_1468053919_taj4.jpg"
          height="250" width="350" />
      </div>
      <div>
        <img
          src="https://static2.tripoto.com/media/filter/tst/img/15546/TripDocument/1460134534_1_quan_spa_3_luxurylaunches.jpg"
          height="250" width="350" />
      </div>
      <div>
        <img
          src="https://content.jdmagicbox.com/comp/mumbai/j3/022pxx22.xx22.120109161138.y5j3/catalogue/gold-s-gym-powai-mumbai-gyms-dsf2hfd5ux.jpg?clr=3b2b2b"
          height="250" width="350" />
      </div>
      <div>
        <img
          src="https://www.tajhotels.com/content/dam/luxury/hotels/Taj_Mahal_Delhi/images/4x3/Varq-PrivateDiningRoom-Master.jpg/jcr:content/renditions/cq5dam.web.512.512.jpeg"
          height="250" width="350" />
      </div>
      <div>
        <img src="https://cf.bstatic.com/data/xphoto/1182x887/401/40108648.jpg?size=S" height="250" width="350" />
      </div>
      <div>
        <img src="https://media-cdn.tripadvisor.com/media/photo-s/09/3d/de/b7/city-the-village.jpg" height="250"
          width="350" />
      </div>
      <br>
    </div>
  </main>
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