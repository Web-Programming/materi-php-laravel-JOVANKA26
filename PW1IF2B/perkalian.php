<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Perkalian</title>
</head>
<body>
    <h1><?php echo "Menampilkan List Perkalian 1 sd 10";?></h1>

    <?php
    // Menampilkan List Perkalian 1 sd 10
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            $hasil = $i * $j;
            echo "<br>";
            echo "$i x $j = $hasil";
        }
        echo "<br>";
    }
    ?>
</body>
</html>