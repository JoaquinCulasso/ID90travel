<?php

if (!empty($_POST['airline']) && !empty($_POST['username']) && !empty($_POST['password'])) {

    $postData = http_build_query(
        array(
            'airline' => $_POST['airline'],
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'remember_me' => 1
        )
    );

    $opts = array('http' =>
        array(
            'method'  => 'POST',
            'header'  => 'Content-Type: application/x-www-form-urlencoded',
            'content' => $postData
        )
    );

    $context  = stream_context_create($opts);

    $authUser = file_get_contents('http://localhost:8080/auth/userAuth', false, $context);
    session_start();
    $_SESSION["user"] = $authUser;
    header("Location: search.php");
} else {
    header("Location: auth.php");
}
exit();

