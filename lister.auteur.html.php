<div class="conteneur">
        <h3>LISTE DES AUTEURS</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>PROFESSION</th>
            </tr>
            <?php foreach ($auteurs as $val):  ?>
                        <tr>
                            <th><?php echo($val["id"]); ?> </th>
                            <th> <?php echo($val["nom"]); ?></th>
                            <th><?php echo($val["prenom"]); ?></th>
                            <th><?php echo($val["profession"]); ?></th>
                        </tr>
            <?php endforeach ?>
        </table>
</div>