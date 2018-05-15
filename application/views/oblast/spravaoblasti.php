<div class="container">
    <div class="col-md-10 offset-md-2">
        <div class="row">
            <h1>Správa oblastí</h1>
        </div>
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <a style="color: #f9f9f9" href="<?php echo base_url().'oblasti/pridanie';?>" class="btn btn-primary">Pridaj oblasť</a>
                </div>
                <div class="panel-body">

                    <table class="table table-bordered table-hover">
                        <thead class="table-primary">
                        <tr> 
                            <th>Názov</th>
                            <th>Popis</th>
                            <th>Akcia</th>
                        </tr>
                        </thead>
                        <tbody id="userData">
                        <?php if(!empty($oblasti)): foreach($oblasti as $oblast): ?>
                            <tr>
                                <td><?php echo $oblast['Nazov']; ?></td>
                                <td data-toggle="tooltip" title="<?php echo $oblast['Popis']; ?>" ><?php echo substr($oblast['Popis'],0,60); ?></td>
                                <td>
                                    <a href="<?php echo base_url().'oblasti/show_oblast/'.$oblast['idOblast'];?>" >Uprav</a>
                                    <a href="<?php echo base_url().'oblasti/zmaz_oblast/'.$oblast['idOblast'];?>" onclick="return confirm('Naozaj zmazať oblasť?')">Zmaž</a>
                                </td>
                            </tr>
                        <?php endforeach; else: ?>
                            <tr><td colspan="4">Oblasť nenájdená..</td></tr>
                        <?php endif; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>