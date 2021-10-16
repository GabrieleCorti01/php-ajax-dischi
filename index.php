<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
    require __DIR__ . "/db/database.php";
    $imageUrl = $dischi['copertina'];
    ?>

    <div id="container-elements">
        <?php foreach($dischiArray as $dischi) {?>
            
            <div class="container-disco">
                <img src="<?php echo $dischi['copertina'];?>">
                <h2><?php echo $dischi['titolo']?></h2>
                <p><?php echo $dischi['artista']?></p>
            </div>
            
        <?php } ?>
    </div>

</body>
</html>