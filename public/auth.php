<?php
$airlines = json_decode(file_get_contents('http://localhost:8080/airlines/findAllAirlines'), true);
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

        <p class="title">Login to Travel</p>

        <form action="processAuth.php" method="POST">

            <input list="airlines" id="airlinesInput" type="text" placeholder="Airline" name="airline" required>
            <datalist id="airlines">
                <?php
                foreach ($airlines as $airline) {
                    echo "<option value=" . '"' . $airline['airline'] . '"' . ">";
                } ?>
            </datalist>

            <label>
                <input name="username" placeholder="Username" required>
            </label>
            <label>
                <input name="password" type="password" placeholder="Password" required>
            </label>

            <button type="submit" id="login">Log In</button>

        </form>

    </div>
</section>


</body>

</html>