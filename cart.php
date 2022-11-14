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
<body>
        <img src="<?php echo $_SESSION['src'] ?>" alt="">
        <h3><?php echo $_SESSION['type'] ?></h3>
        <?php
    $date1 = date_create($_SESSION['start']);
    $date2 = date_create($_SESSION['end']);
    //difference between two dates
    $diff = date_diff($date2,$date1);
    $_SESSION['tprice'] = $diff->format("%a") * $_SESSION['price'];
    //count days
    echo 'Total days - '.$diff->format("%a");
    echo 'Total amt - '.$diff->format("%a") * $_SESSION['price'];
    ?>
    <a href="transaction.php"><button>Submit</button></a>
</body>
</html>