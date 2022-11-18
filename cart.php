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
    <div class="container">
        <div class="disp">Booking Details</div>
        <div class="photo"><img class="pht" src="<?php echo $_SESSION['src'] ?>" alt="Chosen Room Photo"></div>
        <div class="rtype">
            <?php echo $_SESSION['type'] ?>
        </div>
        <?php
        $date1 = date_create($_SESSION['start']);
        $date2 = date_create($_SESSION['end']);
        //difference between two dates
        $diff = date_diff($date2,$date1);
        $_SESSION['tprice'] = $diff->format("%a") * $_SESSION['price'];
        //count days
        //echo 'Total days - '.$diff->format("%a");
        //echo 'Total amt - '.$diff->format("%a") * $_SESSION['price'];
        ?>
        <div class="tdays">
            <?php echo 'You have booked for '.$diff->format("%a").'days'; ?>
        </div>
        <div class="tamt">
            <?php echo 'Total amt - '.$diff->format("%a") * $_SESSION['price']; ?>
        </div>
        <div class="subm"><a href="transaction.php"><button>Submit</button></a></div>
    </div>
</body>

</html>

<style>
    .container {
        display: grid;
        grid-template-areas:
            'disp disp'
            'rtype photo'
            'tdays photo'
            'tamt photo'
            'subm subm';
        grid-gap: 10px;
        background-color: #2196F3;
        padding: 10px;
    }

    .container>div {
        background-color: rgba(255, 255, 255, 0.8);
        text-align: center;
        padding: 20px 0;
        font-size: 30px;
    }

    .disp {
        grid-area: disp;
    }

    .photo {
        grid-area: photo;
        /* display: block;
        margin-left: auto;
        margin-right: auto;
        width: auto;
        height: auto; */
    }

    .rtype {
        grid-area: rtype;
    }

    .tdays {
        grid-area: tdays;
    }

    .tamt {
        grid-area: tamt;
    }

    .subm {
        grid-area: subm;
    }
</style>