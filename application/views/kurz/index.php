<div class='container'>
    <div class='row'>
        <?php foreach ($kurzy as $kurz_item): ?>
            <div class='col-lg-4 col-md-6 mb-4'>
                <div class="card" style="width: 18rem; background-color: lightcyan ">
                    <div class="card-body" >
                        <h5 class="card-title"><?php echo $kurz_item['Nazov']?></h5>
                        <p class="card-text">Pre podrobnosti vstúp do kurzu..</p>
                        <a href="<?php echo base_url().'kurz/zobraz_kurz/'.$kurz_item['idKurz'] ?>" class="card-link">Zobraz kurz</a>
                        <br>
                        <a href="<?php echo base_url().'osoby/osobyvkurze/'.$kurz_item['idKurz'] ?>" class="card-link">Zobraz zúčastnených</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>