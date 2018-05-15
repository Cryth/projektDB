<div class="col-md-6 offset-md-3">
    <div class="card card-outline-secondary">
        <div class="card-header">
            <h3 class="mb-0"><span class="badge badge-success">Úprava oblasti</span></h3>
        </div>
        <div class="card-body">
            <form class="form" method="post" action="<?php echo base_url().'oblasti/updateoblast';?>" accept-charset="UTF-8">
                <div class="form-group">
                    <input type="hidden" name="idecko" id="idecko" value="<?php echo $oblast['idOblast'];?>">
                </div>
                <div class="form-group">
                    <label for="nazov">Názov</label>
                    <input type="text" class="form-control" name="nazov" id="nazov" value="<?php echo $oblast['Nazov'];?>" required>
                </div>
                <div class="form-group">
                    <label for="popis">Popis</label>
                    <textarea class="form-control" name="popis" id="popis" required><?php echo $oblast['Popis'];?></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg float-right">Ulož</button>
                </div>
            </form>
        </div>
    </div>
</div>