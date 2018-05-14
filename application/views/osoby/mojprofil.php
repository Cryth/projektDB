<div class="col-md-6 offset-md-3">
    <div class="card card-outline-secondary">
        <div class="card-header">
            <h3 class="mb-0"><span class="badge badge-primary">Váš profil</span></h3>
        </div>
        <div class="card-body">
            <form class="form" method="post" action="updateprofil" accept-charset="UTF-8">

                <div class="form-group">
                    <label for="meno">Meno</label>
                    <input type="text" class="form-control" name="meno" id="meno" placeholder="Krstné meno" value="<?php echo $osoba['Meno'];?>" required>
                </div>
                <div class="form-group">
                    <label for="priezvisko">Priezvisko</label>
                    <input type="text" class="form-control" name="priezvisko" id="priezvisko" placeholder="Priezvisko" value="<?php echo $osoba['Priezvisko'];?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Váš email" value="<?php echo $osoba['Email'];?>" required>
                </div>
                <div class="form-group">
                    <label for="telkontakt">Tel. kontakt</label>
                    <input type="text" class="form-control" name="telkontakt" id="telkontakt" placeholder="Telefónne číslo" value="<?php echo $osoba['TelKontakt'];?>" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg float-right">Ulož</button>
                </div>
            </form>
        </div>
    </div>
</div>