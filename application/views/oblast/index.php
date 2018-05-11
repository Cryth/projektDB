<div class='container'>
    <div class='row'>
<?php foreach ($oblasti as $oblast_item): ?>
        <div class='col-lg-4 col-md-6 mb-4'>
            <div class="card" style="width: 18rem; background-color: lightcyan">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $oblast_item['Nazov']?></h5>
                    <p class="card-text"><?php echo $oblast_item['Popis']?></p>
                    <a href="<?php echo base_url().'kurz/oblast_kurz/'.$oblast_item['idOblast'] ?>" class="card-link">Zobraz kurzy</a>
                </div>
            </div>
        </div>
<?php endforeach; ?>
    </div>
</div>