<div class="col-md-6 offset-md-3">
    <div class="card card-outline-secondary">
        <div class="card-header">
            <h3 class="mb-0"><span class="badge badge-primary">Pridanie oblasti</span></h3>
        </div>
        <div class="card-body">
            <form class="form" method="post" action="<?php echo base_url().'oblasti/pridajoblast';?>" accept-charset="UTF-8">
                <div class="form-group">
                    <label for="nazov">Názov</label>
                    <input type="text" class="form-control" name="nazov" id="nazov" placeholder="Názov oblasti"  required>
                </div>
                <div class="form-group">
                    <label for="popis">Popis</label>
                    <textarea class="form-control" name="popis" id="popis" required placeholder="Pridajte popis oblasti.."></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg float-right">Pridaj</button>
                </div>
            </form>
        </div>
    </div>
</div>