<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>VA Login</title>
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
    </style>
</head>
<body  style="background-image:url(background.jpg); max-width: 100%; height: auto">
<div class="container text-center">
    <h3>Prihláste sa pre prístup do portálu</h3>
</div>
<br><br>
<div class="row text-center">
    <div class="col-sm"></div>
    <div style="background-color: rgba(0, 0, 0, 0.3)" class="col-sm jumbotron">
        <form action="<?php echo base_url().'login'?>" method="post">
            <h3>Login</h3>
            <input type="text" class="form-control" name="login" required>
            <br>
            <h3>Heslo</h3>
            <input type="password" class="form-control" name="password" required>
            <br>
            <input type="submit" class="btn btn-primary btn-lg" style="cursor: pointer;" value="Vstup" name="tlacidlo">
        </form>
        <h2><br>Nemáte účet? Zaregistrujte sa</h2>
        <a href="<?php echo base_url().'register' ?>" class="btn btn-danger btn-lg" style="cursor: pointer;" role="button" >Registrácia</a>
    </div>
    <div class="col-sm"></div>
</div>

</body>
</html>
