<?php
require_once __DIR__ . '/../bootstrap.php';
session_start();
$user = $_SESSION["user"];

if (!$user) {
    header("location : /auth.php");
    exit();
}

$hotels = $_SESSION["hotels"];

if (!$hotels) {
    header("search : /auth.php");
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
    <link rel="stylesheet" href="css/style_hotel.css">
</head>
<body>

<div class="galeria">

    <h1>Booking Hotel</h1>
    <div class="linea"></div>

    <div class="contenedor-imagenes">
        <?php
        foreach ($hotels as $hotel) {
            echo '  <div class="imagen">';
            echo '<img src="' . $hotel->getImage() . '"alt="">';
            echo '<div class="overlay">';
            echo '<h4>' . $hotel->getName() . '</h4>';
            echo '<h4>' . $hotel->getDescription() . '</h4>';
            echo '<h4>' . $hotel->getTotal() . 'USD </h4>';
            echo '<h4>' . $hotel->getLocation()->getCity() . '</h4>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>


</div>
</body>