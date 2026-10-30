<?php
session_start();
$name = $_SESSION['name'] ?? 'bezoeker';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Joris/css/stylesheet.css">

    <?php
    require_once 'ReusedPhp/head.php'
    ?>
</head>

<body>
        <header>
        <?php
        require_once 'ReusedPhp/header.php'
        ?>

    </header>
    <main class="bedanktPagina">

        <p><?= htmlspecialchars($name) ?>
            bedankt!
        </p>
        <p>je bent ingesvreven voor de masterclass</p>

    </main>

</body>




</html>