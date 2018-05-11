<div class="container">
    <h2>Váš profil</h2>
    <form class="form-horizontal" action="<?php echo base_url().'osoby/updateprofil'?>">
        <div class="form-group">
            <label class="control-label col-sm-2">Meno:</label>
            <div class="col-sm-10">
                <h3><?php echo $this->session->userdata('Meno'); ?></h3>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Priezvisko:</label>
            <div class="col-sm-10">
                <h3><?php echo $this->session->userdata('Priezvisko'); ?></h3>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Zadaj email" required value="<?php echo $osoba['Email'];?>" name="email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="telkontakt">Tel. kontakt:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="telkontakt" placeholder="Telefónne číslo" required value="<?php echo $osoba['TelKontakt'];?>" name="telkontakt">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Uložiť</button>
            </div>
        </div>
    </form>
</div>