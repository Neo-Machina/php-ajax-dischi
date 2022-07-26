<?php require __DIR__ . '/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-AJAX-DISCHI</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="flex_img">
            <img src="img/logo_spotify.png" alt="spotify_logo">
        </div>
    </header>

    <!-- MAIN -->
    <main>
        <section>
            <div class="container">
                <div class="row">
                    <?php foreach($discsArray as $disc) {?>

                        <div class="col">
                            <div class="album_card">
                                <img src="<?php echo $disc['poster']; ?>" alt="<?php echo $disc['author']; ?>">

                                <div class="album_details">
                                    <h3> <?php echo $disc['title']; ?> </h3>

                                    <div class="album_text">
                                        <div> <?php echo $disc['author']; ?> </div>

                                        <div> <?php echo $disc['year']; ?> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </main>
</body>
</html>