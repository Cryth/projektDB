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
<br><br>

<div class="col-md-6 offset-md-3">
    <div class="card card-outline-secondary">
        <div class="card-header">
            <h3 class="mb-0">Registrácia</h3>
        </div>
        <div class="card-body">
            <form class="form" role="form" method="post" action="register" accept-charset="UTF-8">
                <div class="form-group">
                    <label for="meno">Meno</label>
                    <input type="text" class="form-control" name="meno" id="meno" placeholder="Krstné meno" required>
                </div>
                <div class="form-group">
                    <label for="priezvisko">Priezvisko</label>
                    <input type="text" class="form-control" name="priezvisko" id="priezvisko" placeholder="Priezvisko" required>
                </div>
                <div class="form-group">
                    <label for="telkontakt">TelKontakt</label>
                    <input type="email" class="form-control" name="telkontakt" id="telkontakt" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="login">Login</label>
                    <input type="text" class="form-control" name="login" id="login" placeholder="Prihlasovacie meno" required>
                </div>
                <div class="form-group">
                    <label for="password">Heslo</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Heslo" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg float-right">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
