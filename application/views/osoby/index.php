<div class="container">
    <div class="col-md-10 offset-md-2">
        <div class="row">
            <h1>Zoznam študentov</h1>
        </div>
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <?php if (!$this->session->userdata('lektor') && !empty($kurz) && !$makurz){?>
                        <a style="color: #f9f9f9" href="<?php echo base_url().'kurz/prihlasenie/'.$kurz['idKurz'];?>" class="btn btn-primary">Prihlásiť sa na kurz</a>
                    <?php };?>
                    <?php if (!$this->session->userdata('lektor') && !empty($kurz) && $makurz){?>
                        <a style="color: #f9f9f9" href="<?php echo base_url().'kurz/odhlasenie/'.$kurz['idKurz'];?>" class="btn btn-primary">Odhlásiť sa z kurzu</a>
                    <?php };?>
                </div>
                <div class="panel-body">

                    <table class="table table-bordered table-hover">
                        <thead class="table-primary">
                        <tr> 
                            <th>Meno</th>
                            <th>Priezvisko</th>
                            <th>Email</th>
                            <th>Tel. Kontakt</th>
                            <?php if ($this->session->userdata('lektor')){?>
                            <th>Akcia</th>
                            <?php };?>
                        </tr>
                        </thead>
                        <tbody id="userData">
                        <?php if(!empty($osobyvkurze)): foreach($osobyvkurze as $osobka): ?>
                            <tr>
                                <td><?php echo $osobka['Meno']; ?></td>
                                <td><?php echo $osobka['Priezvisko']; ?></td>
                                <td><?php echo $osobka['Email']; ?></td>
                                <td><?php echo $osobka['TelKontakt']; ?></td>
                                <?php if ($this->session->userdata('lektor')){?>
                                <td>
                                    <a href="<?php echo base_url().'osoby/detailstudenta/'.$osobka['idOsoby'];?>" >Detail</a>
                                </td>
                                <?php }; ?>
                            </tr>
                        <?php endforeach; else: ?>
                            <tr><td colspan="4">Študent nenájdený..</td></tr>
                        <?php endif; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>