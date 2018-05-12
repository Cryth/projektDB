<div class="col-md-6 offset-md-3">
    <div class="card card-outline-secondary">
        <div class="card-header">
            <h3 class="mb-0">Registrácia lektora</h3>
        </div>
        <div class="card-body">
            <form class="form" role="form" method="post" action="registerlektor" accept-charset="UTF-8">
                <div class="form-group">
                    <label for="meno">Meno</label>
                    <input type="text" class="form-control" name="meno" id="meno" placeholder="Krstné meno" required>
                </div>
                <div class="form-group">
                    <label for="priezvisko">Priezvisko</label>
                    <input type="text" class="form-control" name="priezvisko" id="priezvisko" placeholder="Priezvisko" required>
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
                    <label for="oblast">Vyberte oblasť</label>
                <select class="custom-select" name="oblast" id="oblast" required>
                    <?php foreach ($oblasti as $oblast):?>
                    <option value="<?php echo $oblast['idOblast']?>"><?php echo $oblast['Nazov'];?></option>
                    <?php endforeach;?>
                </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg float-right">Zaregistruj</button>
                </div>
            </form>
        </div>
    </div>
</div>