<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="<?php echo base_url().'Home';?>">Vzdelávacia Agentúra</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url().'oblasti' ?>">Oblasti kurzov</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url().'kurz/moje_kurzy'?>">Moje kurzy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url().'kurz' ?>">Všetky kurzy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url().'logout' ?>">Odhlásenie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" > <?php echo $this->session->userdata('idecko').' '.$this->session->userdata('Meno').' '.$this->session->userdata('Priezvisko');?></a>
            </li>
        </ul>
    </div>
</nav>
<hr><hr><hr>
