<div class="container">
    <h2>Váš profil</h2>
    <form class="form-horizontal" action="updateprofil">
        <div class="form-group">
            <label class="control-label col-sm-4">Meno:</label>
            <div class="col-sm-4">
                <h3><?php echo $this->session->userdata('Meno'); ?></h3>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4">Priezvisko:</label>
            <div class="col-sm-4">
                <h3><?php echo $this->session->userdata('Priezvisko'); ?></h3>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="email">Email:</label>
            <div class="col-sm-4">
                <input type="email" class="form-control" id="email" placeholder="Zadaj email" required value="<?php echo $osoba['Email'];?>" name="email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="telkontakt">Tel. kontakt:</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" id="telkontakt" placeholder="Telefónne číslo" required value="<?php echo $osoba['TelKontakt'];?>" name="telkontakt">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-10">
                <button type="submit" class="btn btn-primary">Uložiť</button>
            </div>
        </div>
    </form>
</div>