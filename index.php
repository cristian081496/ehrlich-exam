<?php require_once('./config.php'); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exam</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- owl carousel css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- owl carousel theme.css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo assets('scss','index.css'); ?>">

</head>
<body>
    <?php require_once(components('mobile-drawer.php')); ?>

    <main>
        <?php require_once(components('nav.php')); ?>
        <?php require_once(components('benefits.php')); ?>
        <?php require_once(components('hero.php')); ?>
        <?php require_once(components('site-wide-deals.php')); ?>
        <?php require_once(components('vip-exclusive.php')); ?>
        <?php require_once(components('now-trending.php')); ?>
        <?php require_once(components('new-arrival.php')); ?>
        <?php require_once(components('recently-bought.php')); ?>
        <?php require_once(components('your-next-inspo.php')); ?>
        <?php require_once(components('newsletter.php')); ?>
        <?php require_once(components('footer.php')); ?>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="./assets/js/index.js"></script>
</body>
</html>