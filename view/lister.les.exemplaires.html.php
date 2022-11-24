<div class="conteneur">
        <h3>LISTE LES EXEMPLAIRES</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>DATE</th>
                <th>RAYON</th>
               

            </tr>
            <?php foreach ($exemplaire as $val):  ?>
                        <tr>
                            <th><?php echo($val["id"]); ?> </th>
                            <th> <?php echo($val["date"]); ?></th>
                            <th><?php echo($val["rayon"]); ?></th>
                            
                        </tr>
            <?php endforeach ?>
        </table>
        
</div>