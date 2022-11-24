<div class="conteneur">
        <h3>LISTE DES RAYONS</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>TYPE</th>
                <th>TAILLE</th>
                <th>TAILLE-DISPONIBLE</th>
            </tr>
            <?php foreach ($rayons as $val):  ?>
                        <tr>
                            <th><?php echo($val["id"]); ?> </th>
                            <th> <?php echo($val["type"]); ?></th>
                            <th><?php echo($val["taille"]); ?></th>
                            <th><?php echo($val["taille_disponible"]); ?></th>
                        </tr>
            <?php endforeach ?>
        </table>
</div>