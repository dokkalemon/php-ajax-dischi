<?php //import database
require_once __DIR__ . '/database.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    
</head>
<body>
<header class="full-width">
        <div class="header container px-20">
            <div class="logo">
                <img src="./img/logo.png" alt="">
            </div>
        </div>
    </header>

    <main class="container">
    <?php foreach ($database as $album) { ?>
        <div class="card-container">
            <div class="card">
                <img src="<?php echo $album['poster'] ?>" alt="">
                <h2> <?php echo $album['title'] ?></h2>
                <h4> <?php echo $album['author'] ?></h4>
                <h3> <?php echo $album['year'] ?> </h3>
                <h5><?php echo $album ['genre'] ?></h5>
            </div>
        </div>
    <?php } ?>
    </main>

</body>
</html>