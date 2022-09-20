<?php
//require_once __DIR__ . '/../bootstrap.php';
session_start();
$user = $_SESSION["user"];
if (!$user) {
    header("location : /auth.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>


<body>

<section class="content">
    <div class="form">

        <p class="title">Search Hotel</p>

        <form action="processSearch.php" method="POST">


            <label>
                <input name="destination" placeholder="Destination" required>
            </label>

            <label>
                <input name="checkin" id="checkin" type="text" onfocus="(this.type='date')" placeholder="Checkin Date" autocomplete="off" required>
            </label>

            <label>
                <input name="checkout" id="checkout" type="text" onfocus="(this.type='date')" placeholder="Checkout Date" autocomplete="off" required>
            </label>


            <label>
                <input name="guests" placeholder="Guest number" min="1" max="4" type="number" required>
            </label>

            <button type="submit">Search</button>
        </form>

    </div>
</section>


</body>

</html>