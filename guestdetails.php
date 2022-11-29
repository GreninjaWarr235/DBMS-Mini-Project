<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Details</title>
</head>

<?php
include 'dbconnect.php';
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $title = $_POST['title'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $_SESSION['firstName'] = $_POST['firstName'];
    $_SESSION['lastName'] = $_POST['lastName'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $contactNum = $_POST['contactNum'];
    $membershipNum = $_POST['membershipNum'];
    $aadharNum = $_POST['aadharNum'];
    $special = $_POST['special'];
    $query = "INSERT INTO `guest-details` (`title`,`aadhar`,`first_name`,`last_name`,`email`,`country`,`contact`,`mem_num`,`special`) VALUES ('title','$aadharNum','$firstName','$lastName','$email','$country','$contactNum','$membershipNum','$special')";
    $result = mysqli_query($conn, $query);
    // $res = mysqli_fetch_assoc($result);
    // echo $res['fname'];
    header("location:cart.php");
}
?>

<body>
    <h2>
        <pre class="guestdetails" style="text-align: center; font-size: 26px; color: white">Guest Details</pre>
    </h2>
    <div id="container" style="border-radius: 10px;">
        <form action="guestdetails.php" method="post">
            <div class="item">
                <span>
                    <pre class="titleheading">Title*</pre>
                    <select required class="title" id="select_opt" name="title">
                        <option value="Mr." id="1">Mr.</option>
                        <option value="Ms." id="2">Ms.</option>
                        <option value="Mrs." id="3">Mrs.</option>
                        <option value="Dr." id="4">Dr.</option>
                        <option value="Prof." id="5">Prof.</option>
                    </select>
                </span>
            </div>
            <div class="item">
                <pre class="fnheading">First Name*</pre>
                <pre class="fn"><input type="text" required name="firstName"></pre>
                <!-- <input type="text" id="options" name="title"> -->
            </div>
            <div class="item">
                <pre class="lnheading">Last Name*</pre>
                <pre class="ln"><input type="text" required name="lastName"></pre>
            </div>
            <div class="email" class="item">
                <br>
                <pre class="emailheading">Email*</pre>
                <input type="email" required placeholder="abc@gmail.com" name="email">
            </div>
            <br>
            <div class="item">
                <pre class="titleheading">Country*</pre>
                <select required class="title" name="country">
                    <pre><option value="India" id="1">India (+91)</option></pre>
                </select>
            </div>
            <div class="item">
                <pre class="phoneheading">Phone Number*</pre>
                <input class="phone" type="tel" required placeholder="123456789" name="contactNum">
            </div>
            <br><br>
            <div class="item">
                <pre class="titleheading">Membership Number</pre>
                <pre><input class="title" type="text" name="membershipNum"></pre>
            </div>
            <div class="item">
                <pre class="aadharhead">Aadhar Card Number*</pre>
                <pre><input class="aadharnum" type="text" required name="aadharNum"></pre>
            </div>
            <br><br>
            <div class="item">
                <pre class="titleheading"><strong>Special Requests</strong></pre>
                <pre><input class="title" type="text" name="special"></pre>
            </div>
            <br><br>
            <div class="check">
                <label for="a">
                    <pre><input type="checkbox" required value="a" name="policy" id="1"> I have read and understood the Privacy Policy.*</pre>
                </label>
                <label for="b">
                    <pre><input type="checkbox" required value="b" name="policy" id="2"> I have read and agree to the Terms & Conditions.*</pre>
                </label>
                <pre><p class="dec"> * All fields mandatory</p></pre>
            </div>
            <div class="asmButt"><a><span></span><span></span><span></span><span></span><button  type="submit"
                  >Book</button></a></div>
        </form>
    </div>
</body>

</html>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap');

    body {
        background-image: linear-gradient(45deg, #1746A2, #5F9DF7);
    }

    button {
        cursor:pointer; 
        background:none; 
        border:none; 
        font-size:20px; 
        font-family:'Lato', sans-serif; 
        color:rgba(255, 255, 255, 0.4);
      }

      button:hover {
        color: white;
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

    #container {
        margin: auto;
        margin-bottom: 55px;
        background-color: white;
        width: 548px;
        padding-top: 13px;
        padding-bottom: 13px;
        /* margin-top: 20px;
        margin-left: 450px;
        margin-bottom: 40px; */
    }

    pre {
        font-family: 'Lato', sans-serif;
    }

    .guestdetails {
        margin-top: 40px;
        color: hsl(195, 82%, 13%);
    }

    .item {
        display: inline-block;
        width: 180px;
        height: 75px;
        color: hsl(195, 82%, 13%);
    }

    .titleheading {
        margin-left: 31px;
    }

    .title {
        margin-left: 30px;
    }

    .fnheading {
        margin-left: -80px;
    }

    .fn {
        margin-left: -81px;
    }

    .lnheading {
        margin-left: -73px;
    }

    .ln {
        margin-left: -74px;
        margin-right: -20px;
    }

    .emailheading {
        margin-left: 1px;
    }

    .email {
        margin-left: 30px;
    }

    .phoneheading {
        margin-left: -43px;
    }

    .phone {
        margin-left: -44px;
    }

    .aadharhead {
        margin-left: 38px;
    }

    .aadharnum {
        margin-left: 37px;
    }

    .check {
        margin-left: 26px;
        color: hsl(195, 82%, 13%);
    }

    .dec {
        font-size: 13px;
    }

    .button {
        margin: 18px 0px 22px 29px;
    }

    .box {
        background-color: white;
        width: 300px;
        border: 1px solid black;
        padding: 120px;
        padding-right: -20px;
        margin-right: 20px;
        margin: 80px;
    }

    #res:hover {
        background-color: aqua;
        cursor: pointer;
    }

    .asmButt {
        display: inline-block;
        margin-left: 31px;
        margin-top: 10px;
        margin-bottom: 25px;
    }

    .asmButt a {
        position: relative;
        padding: 10px;
        padding-top: 8px;
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