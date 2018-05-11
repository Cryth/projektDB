<div class='container' style="text-align: center">
    <p class="text-uppercase" style="alignment: center; font-size: 45px"><strong><?php echo $kurz['Nazov'];?></strong></p>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Dátum začiatku</th>
            <th>Dátum konca</th>
            <th>Lektor</th>
            <th>Kontakt</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $kurz['DatumOd'];?></td>
            <td><?php echo $kurz['DatumDo'];?></td>
            <td><?php echo $lektor['Meno'].' '.$lektor['Priezvisko'];?></td>
            <td><?php echo $lektor['Email'];?></td>
        </tr>
        </tbody>
    </table>
    <p class="font-weight-normal" style="alignment: center; font-size: 20px"><?php echo $kurz['Popis'];?></p>

</div>