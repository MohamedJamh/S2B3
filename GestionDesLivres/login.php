<?php
    include('script.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Gestion | Log in</title>
</head>
<body class="bg-light">
    <div class="sing-up-in-modal container p-3 rounded bg-white shadow-lg" style="max-width: 500px; margin-top:25vh;">
        <form class="login" action="" method="POST">
            <div>
                <h1 class="mb-3">Log in</h1>
            </div>
            <div class="d-flex flex-column gap-2">
                <input type="email" class="form-control mb-3" placeholder="E-mail Adresse" name="adress" id="">
                <input type="password" class="form-control mb-3" placeholder="Password" name="password" id="">
            </div>
            <div class="d-flex gap-3 mb-2">
                <button type="submit" class="connect-btn btn btn-primary" name="login">Connect</button>
                <button class="btn btn-light border text-primary" name="signup"  >Sign up</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>