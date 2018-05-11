<div class='container' style="text-align: center">
    <p class="text-uppercase" style="alignment: center; font-size: 45px"><strong><?php echo $kurz['Nazov'];?></strong></p>
    <p class="font-weight-normal" style="alignment: center; font-size: 20px"><?php echo $kurz['Popis'];?></p>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Dátum začiatku</th>
            <th>Dátum konca</th>
            <th>Lektor</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $kurz['DatumOd'];?></td>
            <td><?php echo $kurz['DatumDo'];?></td>
            <td><?php echo $kurz['idLektori'];?></td>
        </tr>
        </tbody>
    </table>
</div>