<?php
// $title = $_POST['title'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
// $country = $_POST['country'];
$contactNum = $_POST['contactNum'];
$membershipNum = $_POST['membershipNum'];
$aadharNum = $_POST['aadharNum'];
// $special = $_POST['special'];

$conn = new mysqli('localhost', 'root', '', 'mvs hotels');
if ($conn->connect_error) {
    die('Connection failed: '.$conn->connect_error);
} 
else {
    $stmt = $conn->prepare("insert into guest-details(firstName, lastName, email, contactNum, membershipNum, aadharNum) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiiis", $firstName, $lastName, $email, $contactNum, $membershipNum, $aadharNum);
    $stmt->execute();
    echo "Details have been submitted successfully";
    $stmt->close();
    $conn->close();
}
?>