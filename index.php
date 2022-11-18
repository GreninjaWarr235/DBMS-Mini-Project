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
        <img width="100%" height="643px" src="Mumbai.jpg" class="d-block w-100" alt="Mumbai Photo">
        <div class="carousel-caption d-none d-md-block">
          <h6>Mumbai</h6>
        </div>
      </div>
      <div class="carousel-item">
        <img width="100%" height="643px" src="https://wallpaperset.com/w/full/a/8/c/173787.jpg" class="d-block w-100"
          alt="Delhi Photo">
        <div class="carousel-caption d-none d-md-block">
          <h6>New Delhi</h6>
        </div>
      </div>
      <div class="carousel-item">
        <img width="100%" height="643px" src="tajmahal.jpg" class="d-block w-100" alt="Agra Photo">
        <div class="carousel-caption d-none d-md-block">
          <h6>Agra</h6>
        </div>
      </div>
      <div class="carousel-item">
        <img width="100%" height="643px"
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
  <h3 style="padding-bottom:15px">EXPLORE MVS</h3>
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
      imagine and centuries of history hide in the most unassuming places. Discover the world's most spectacular urban
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
      your stay with us at Mumbai, New Delhi, Agra and Puducherry.</p>
  </div>
  <div id="mainouterbranches">
    <br><br>
    <hr style="margin-bottom: 20px;">
    <div class="branchesouter">
      <a href="Rooms.php" target="_blank">
        <div class="branches">
          <div class="Upperblock">
            <img class="branchimg" src="mumbai.png" alt="Mumbai">
          </div>
          <div class="lowerblock">
            <h5 class="hotelCityName">Mumbai</h5>
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
            <h5 class="hotelCityName">New Delhi</h5>
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
            <h5 class="hotelCityName">Agra</h5>
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
            <h5 class="hotelCityName">Puducherry</h5>
          </div>
        </div>
      </a>
      <hr style="margin-top: 20px;">
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

<style>
  @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap');

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  z-index: 0;
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

.asmButt {
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

h3 {
  padding-top: 30px;
  color: hsl(203, 86%, 29%);
  text-align: center;
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

#carouselExampleCaptions h6 {
  color: white;
}

h5 {
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  color: hsl(195, 82%, 13%);
}

.intro {
  margin: auto;
  text-align: center;
  width: 800px;
}

.intro_container {
  display: grid;
  grid-template-columns: repeat(4, auto);
  width: auto;
  height: auto;
  justify-content: center;
  grid-gap: 10px;
  padding: 10px;
  padding-bottom: 30px;
}

.intro_container div {
  background-color: #b2cce7;
  height: 250px;
  border-radius: 6px;
}

.text p {
  font-size: 18px;
  font-weight: 700;
  color: rgb(255, 255, 255);
}

.text {
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  padding: 20px;
  padding-top: 30px;
}

.intro_img {
  height: 100%;
  width: 100%;
  border-radius: 6px;
}

.intro_container div p {
  text-align: center;
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

.image_container img:hover {
  border-radius: 25px;
  box-shadow: 0 0 11px hsla(193, 63%, 17%, 0.682);
}

.image_container img {
  border-radius: 10px;
  transition: all ease 0.7s;
}

.image_container img:last-child {
  grid-gap: revert;
}

.image_container {
  display: grid;
  justify-content: center;
  grid-template-columns: repeat(3, minmax(300px, max-content));
  grid-gap: 20px;
  height: auto;
  width: auto;
}

#branches {
  padding-bottom: 15px;
}

.branches {
  display: inline-block;
  width: 240px;
  height: 350px;
  margin: 25px;
  transition: 0.5s;
  border-width: 3px;
}

.branches:hover {
  cursor: pointer;
  transform: scale(1.08);
}

.branchfirst {
  display: inline-block;
  width: 240px;
  height: 350px;
  margin: 25px;
  margin-left: 70px;
  transition: 0.5s;
}

.branchimg {
  margin: 0 auto 0 auto;
  height: 100%;
  width: 100%;
  object-fit: contain;
  border-top-left-radius: 20px;
  border-top-right-radius: 20px;
  border-width: 3px;
  text-decoration: none;
}

.lowerblock {
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  display: inline-block;
  height: 50px;
  width: 240px;
  background-color: #DFF6FF;
  position: relative;
  text-align: center;
  border-bottom-left-radius: 20px;
  border-bottom-right-radius: 20px;
  border-width: 3px;
}

.Upperblock {
  height: 300px;
  width: 240px;
  bottom: 50px;
  border-radius: 20px;
}

.hotelCityName {
  display: inline-block;
  text-align: center;
  margin-top: 13px;
  margin-bottom: 10px;
  color: #06283D;
}

.branchesouter {
  display: inline-block;
  width: auto;
  height: auto;
}

#mainouterbranches {
  margin-left: 170px;
  display: inline-block;
  width: auto;
  height: auto;
}

#mainouterbranches a {
  text-decoration: none;
}

#mainouterbranches hr {
  margin: auto;
  border-style: none;
  border-top-style: dotted;
  border-color: #47b5ff;
  border-width: 7px;
  width: 7%;
}

.branchDesc {
  margin: auto;
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  font-size: 20px;
  width: 750px;
  text-align: center;
}
</style>