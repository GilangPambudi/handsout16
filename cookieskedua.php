<?php
setcookie("namake4", "VSGAke4");
echo "ini pakai php cookies berhasil" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Cookies kedua</title>
</head>

<body>
    <h1>Ini cookies</h1>
    <?php
    echo "isi dari cookies 'nama' adalah " . $_COOKIE["namake4"];
    ?>

</body>

</html>