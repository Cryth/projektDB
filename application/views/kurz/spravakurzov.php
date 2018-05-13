<div class="container">
    <div class="col-md-10 offset-md-2">
    <div class="row">
        <h1>Správa kurzov</h1>
    </div>
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <a style="color: #f9f9f9" href="<?php echo base_url('Home')?>" class="btn btn-primary">Pridaj Kurz</a>
                </div>
                <div class="panel-body">

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
                            <?php if(!empty($kurzysprava)): foreach($kurzysprava as $kurz): ?>
                                <tr>
                                    <td><?php echo $kurz['Nazov']; ?></td>
                                    <td><?php echo substr($kurz['Popis'],0,30); ?></td>
                                    <td><?php echo $kurz['DatumOd']; ?></td>
                                    <td><?php echo $kurz['DatumDo']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url().'kurz/zobraz_kurz/'.$kurz['idKurz'];?>" >Detail</a>
                                        <a href="<?php echo base_url().'kurz/show_kurz/'.$kurz['idKurz'];?>" >Uprav</a>
                                        <a href="<?php echo base_url().'kurz/zmaz_kurz/'.$kurz['idKurz'];?>" onclick="return confirm('Naozaj zmazať kurz?')">Zmaž</a>
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
    </div>
</div>