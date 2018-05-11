<div class="container">
    <h1>Zoznam zúčastnených v kurze</h1>
<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">Meno</th>
        <th scope="col">Priezvisko</th>
        <th scope="col">Email</th>
        <th scope="col">Tel. kontakt</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($osobyvkurze as $osobka):?>
    <tr>
        <td><?php echo $osobka['Meno'];?></td>
        <td><?php echo $osobka['Priezvisko'];?></td>
        <td><?php echo $osobka['Email'];?></td>
        <td><?php echo $osobka['TelKontakt'];?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>