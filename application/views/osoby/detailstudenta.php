<div class="col-md-6 offset-md-3">
    <div class="card card-outline-secondary">
        <div class="card-header">
            <h3 class="mb-0"><span class="badge badge-primary">Profil študenta</span></h3>
        </div>
        <div class="card-body">
            <form class="form" action="" accept-charset="UTF-8">

                <div class="form-group">
                    <label for="meno">Meno</label>
                    <input type="text" class="form-control" name="meno" id="meno" placeholder="Krstné meno" value="<?php echo $osoba['Meno'];?>" readonly>
                </div>
                <div class="form-group">
                    <label for="priezvisko">Priezvisko</label>
                    <input type="text" class="form-control" name="priezvisko" id="priezvisko" placeholder="Priezvisko" value="<?php echo $osoba['Priezvisko'];?>" readonly>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Váš email" value="<?php echo $osoba['Email'];?>" readonly>
                </div>
                <div class="form-group">
                    <label for="telkontakt">Tel. kontakt</label>
                    <input type="text" class="form-control" name="telkontakt" id="telkontakt" placeholder="Telefónne číslo" value="<?php echo $osoba['TelKontakt'];?>" readonly>
                </div>
            </form>
            <hr>
            <h3 class="mb-0"><span class="badge badge-primary">Kurzy študenta</span></h3>
            <table class="table table-bordered table-hover">
                <thead class="table-primary">
                <tr> 
                    <th>Názov</th>
                    <th>Popis</th>
                    <th>Začiatok</th>
                    <th>Koniec</th>
                    <th>Akcia</th>
                </tr>
                </thead>
                <tbody id="userData">
                <?php if(!empty($kurzystudenta)): foreach($kurzystudenta as $kurz): ?>
                    <tr>
                        <td><?php echo $kurz['Nazov']; ?></td>
                        <td data-toggle="tooltip" title="<?php echo $kurz['Popis']; ?>" ><?php echo substr($kurz['Popis'],0,30); ?></td>
                        <td><?php echo $kurz['DatumOd']; ?></td>
                        <td><?php echo $kurz['DatumDo']; ?></td>
                        <td>
                            <a href="<?php echo base_url().'kurz/zobraz_kurz/'.$kurz['idKurz'];?>" >Detail</a>
                            <a href="<?php echo base_url().'kurz/show_kurz/'.$kurz['idKurz'];?>" >Uprav</a>
                        </td>
                    </tr>
                <?php endforeach; else: ?>
                    <tr><td colspan="4">Kurz nenájdený..</td></tr>
                <?php endif; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>