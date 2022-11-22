<div class="conteneur">
        <h3>LISTE DES OUVRAGES</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>CODE</th>
                <th>TITRE</th>
                <th>DATE</th>
                <th>AUTEUR</th>
            </tr>
            <?php foreach ($ouvrage as $val):  ?>
                        <tr>
                            <th><?php echo($val["id"]); ?> </th>
                            <th> <?php echo($val["code"]); ?></th>
                            <th><?php echo($val["titre"]); ?></th>
                            <th><?php echo($val["date"]); ?></th>
                            <th><?php echo($val["auteur"]); ?></th>
                        </tr>
            <?php endforeach ?>
        </table>
</div>