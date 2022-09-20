<?php
require_once __DIR__ . '/../bootstrap.php';
use Id90travel\infra\src\main\restClient\auth\dto\UserAuthDTO;
use Id90travel\web\App;
use Id90travel\web\controller\AuthController;

if (!empty($_POST['airline']) && !empty($_POST['username']) && !empty($_POST['password'])) {
    $authController = App::getControllerForFront(AuthController::class);
    $authUser = $authController->userAuth(new UserAuthDTO($_POST['airline'], $_POST['username'], $_POST['password'], '1'));
    session_start();
    $_SESSION["user"] = $authUser;
    header("Location: search.php");
    exit();
} else {
    header("Location: auth.php");
    exit();
}

