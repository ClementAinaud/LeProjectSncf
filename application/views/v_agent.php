<html>

    <body>
        <h1>Les Agents</h1>
            <?php 
               foreach($lesAgents as $agt){  
            ?>
        <p><?php echo $agt->nom ; ?> <?php echo $agt->prenom ; ?></p>
            <?php 
             }
            ?>

    </body>
</html>     