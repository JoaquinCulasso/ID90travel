<?php
session_start();
$user = $_SESSION["user"];
if (!$user) {
    header("location : /auth.php");
    exit();
}

if (!empty($_POST['guests'] && !empty($_POST['checkin']) && !empty($_POST['checkout']) && !empty($_POST['destination']))) {

    $paramData = http_build_query(
        array(
            'guests' => $_POST['guests'],
            'checkin' => $_POST['checkin'],
            'checkout' => $_POST['checkout'],
            'destination' => $_POST['destination']
        )
    );

    $hotels = json_decode(file_get_contents('http://localhost:8080/hotels/findAllHotels?' .$paramData), true);

    $_SESSION['hotels'] = $hotels;
    header("Location: hotel.php");
    exit();
}


