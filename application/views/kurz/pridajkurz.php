<div class="col-md-6 offset-md-3">
    <div class="card card-outline-secondary">
        <div class="card-header">
            <h3 class="mb-0"><span class="badge badge-primary">Pridanie kurzu</span></h3>
        </div>
        <div class="card-body">
            <form class="form" method="post" action="<?php echo base_url().'kurz/pridajkurz';?>" accept-charset="UTF-8">

                <div class="form-group">
                    <label for="nazov">Názov</label>
                    <input type="text" class="form-control" name="nazov" id="nazov" placeholder="Názov kurzu" required>
                </div>
                <div class="form-group">
                    <label for="popis">Popis</label>
                    <textarea class="form-control" name="popis" id="popis" placeholder="Popíšte kurz" required></textarea>
                </div>
                <div class="form-group">
                    <label for="datumod">Dátum začiatku</label>
                    <input type="date" class="form-control" name="datumod" id="datumod" placeholder="Zadajte začiatok" required>
                </div>
                <div class="form-group">
                    <label for="datumdo">Dátum konca</label>
                    <input type="date" class="form-control" name="datumdo" id="datumdo" placeholder="Zadajte koniec" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg float-right">Pridaj</button>
                </div>
            </form>
        </div>
    </div>
</div>