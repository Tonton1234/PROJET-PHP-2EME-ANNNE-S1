<div class="conteneur">
        <h3>LISTE DES DEAMNDES</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>EXEMPLAIRE</th>
                <th>ADHERENTS</th>
            </tr>
            <?php foreach ($demandes as $val):  ?>
                        <tr>
                            <th><?php echo($val["id"]); ?> </th>
                            <th> <?php echo($val["exemplaire_id"]); ?></th>
                            <th><?php echo($val["adherent_id"]); ?></th>
                            
                        </tr>
            <?php endforeach ?>
        </table>
</div>