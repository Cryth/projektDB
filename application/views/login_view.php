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
<div class="col-md-6 offset-md-3">
<div class="card card-outline-secondary">
    <div class="card-header">
        <h3 class="mb-0">Login</h3>
    </div>
    <div class="card-body">
        <form class="form" role="form" autocomplete="off" action="<?php echo base_url().'login'?>" method="POST">
            <div class="form-group">
                <label for="uname1">Login</label>
                <input type="text" class="form-control" name="login" id="login" required>
                <div class="invalid-feedback">Please enter your username or email</div>
            </div>
            <div class="form-group">
                <label>Heslo</label>
                <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password">
                <div class="invalid-feedback">Please enter a password</div>
            </div>
            <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
            <div class="form-group">
                <label class="label">
                    <a href="<?php echo base_url().'register' ?>" class="btn btn-danger btn-lg" style="cursor: pointer;" role="button" >Registrácia</a>
                </label>
            </div>
        </form>
    </div>
    <!--/card-body-->
</div>
</div>
</body>
</html>
