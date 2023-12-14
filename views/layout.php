<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio Desarrollador Web Angel Quiroz">
    <title>Angel Quiroz | Web Developer</title>
    <link rel="icon" href="build/img/favicon.png" type="image/png">
    <link rel="shortcut icon" href="build/img/favicon.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body class="principal">
    <?php 
    include_once __DIR__ . '/header.php';
    ?>
    <main class="inf">
        <?php
           include_once __DIR__ . '/aside.php';
            ?>
        <div class="contenido">
            <?php echo $contenido; ?>
                
        </div>
    </main>
    <script src="build/js/app.js" crossorigin="anonymous"></script>
</body>
</html>

