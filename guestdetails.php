<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traveller + Booking Details</title>
    <link rel="stylesheet" href="guestdetails.css">
</head>

<body>
    <h2>
        <pre class="guestdetails">Guest Details</pre>
    </h2>
<?php
include 'dbconnect.php';
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $title = $_POST['title'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $contactNum = $_POST['contactNum'];
    $membershipNum = $_POST['membershipNum'];
    $aadharNum = $_POST['aadharNum'];
    $special = $_POST['special'];
    $query = "INSERT INTO `guest-details` (`title`,`aadhar`,`first_name`,`last_name`,`email`,`contact`,`mem_num`,`special`) VALUES ('title','$aadharNum','$firstName','$lastName','$email','$contactNum','$membershipNum','$special')";
    $result = mysqli_query($conn, $query);
    // $res = mysqli_fetch_assoc($result);
    // echo $res['fname'];
}
?>
    <div id="container">
        <form action="guestdetails.php" method="post">
            <div class="item">
                <span>
                    <pre class="titleheading">Title*</pre>
                    <select class="title" id="select_opt" name="title">
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
                <pre class="fn"><input type="text" name="firstName"></pre>
                <!-- <input type="text" id="options" name="title"> -->
            </div>
            <div class="item">
                <pre class="lnheading">Last Name*</pre>
                <pre class="ln"><input type="text" name="lastName"></pre>
            </div>
            <div class="email" class="item">
                <br>
                <pre class="emailheading">Email*</pre>
                <input type="email" placeholder="abc@gmail.com" name="email">
            </div>
            <br>
            <!-- <div class="item">
                <pre class="titleheading">Country*</pre>
                <select class="title" name="country">
                    <pre><option value="India" id="1">India (+91)</option></pre>
                </select>
            </div> -->
            <div class="item">
                <pre class="phoneheading">Phone Number*</pre>
                <input class="phone" type="tel" placeholder="123456789" name="contactNum">
            </div>
            <br><br>
            <div class="item">
                <pre class="titleheading">Membership Number</pre>
                <pre><input class="title" type="text" name="membershipNum"></pre>
            </div>
            <div class="item">
                <pre class="aadharhead">Aadhar Card Number*</pre>
                <pre><input class="aadharnum" type="text" name="aadharNum"></pre>
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
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>