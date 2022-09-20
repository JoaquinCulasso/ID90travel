<?php
require_once __DIR__ . '/../bootstrap.php';
use Id90travel\web\App;
use Id90travel\web\controller\HotelController;
session_start();
$user = $_SESSION["user"];
if (!$user) {
    header("location : /auth.php");
    exit();
}

if (!empty($_POST['guests'] && !empty($_POST['checkin']) && !empty($_POST['checkout']) && !empty($_POST['destination']))) {

    $hotelController = App::getControllerForFront(HotelController::class);
//    $_POST['guest'], $_POST['checkin'], $_POST['checkout'], $_POST['destination']
    $hotels = $hotelController->findAllHotels($_POST);
//    session_start();
    $_SESSION['hotels'] = $hotels;
    header("Location: hotel.php");
    exit();
}


