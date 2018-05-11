<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>VA Registrácia</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <style>
        h1,h2,h3{
            color: black;
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: black;
        }

        body {
            background-image: url(background.jpg);
        }
    </style>
</head>
<body style="background-image:url(background.jpg); max-width: 100%; height: auto">
<div class="container text-center">
    <h3>Registrácia</h3>
</div>
<div class="row text-center">
    <div class="col-sm"></div>
    <div style="background-color: rgba(0, 0, 0, 0.3)" class="col-sm jumbotron">
        <form method="post" action="register" accept-charset="UTF-8">
            <h3>Meno</h3>
            <input type="text" class="form-control" name="meno" pattern="(*[a-z])(?=.*[A-Z])" required>
            <br>
            <h3>Priezvisko</h3>
            <input type="text" class="form-control" name="priezvisko" maxlength="45" pattern="(*[a-z])(?=.*[A-Z])" required>
            <br>
            <h3>Email</h3>
            <input type="email" class="form-control" name="email" maxlength="45" required>
            <br>
            <h3>Login</h3>
            <input type="text" class="form-control" name="login" maxlength="45" required>
            <br>
            <h3>Heslo</h3>
            <input type="password" class="form-control" name="password" maxlength="45" required>
            <br>
            <h3>Tel. Kontakt</h3>
            <input type="text" class="form-control" name="telkontakt" maxlength="45" >
            <br>
            <input type="submit" class="btn btn-primary btn-lg" style="cursor: pointer;" value="Zaregistrovať" name="tlacidlo">
        </form>
    </div>
    <div class="col-sm"></div>
</div>
</body>
</html>
