<?php
    require_once __DIR__ . "/data/albums.php";
    require_once __DIR__ . "/components/card.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    <header>
    <div class="top-bar">
      <img src="https://www.ore25.it/wp-content/uploads/2020/01/file-spotify-logo-png-4.png" alt="">
  </div>
    </header>
    <main class="bg-color">
        <div class="container">
            <div class="row row-cols-5">
                <?php 
                    foreach ($albums as $album) {
                        
                        printCard($album);
                    }
                ?>
            </div>
        </div>
    </main>
</body>
</html>