<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1><?php echo $titre; ?></h1>
        <?php
        foreach ($lesActivites as $act)
        {
        ?>
        
        
        <a href="index.php/CtrlAccueil/AfficherLesFormations/<?php echo $act->numero; ?>"><?php echo $act->libelle; ?> </a>
         
        <br>
        
        <?php
        }
        ?>
        </form>
    </a>
</html>