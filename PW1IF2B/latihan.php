<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <h4><?php echo "Menghitung Umur";?></h4>
    <?php
    // Menghitung Umur
    $umur = 2025 - 2005;
    echo "Umur = $umur";
    ?>

    <h4><?php echo "Menkonversi Mata Uang USD ke IDR";?></h4>
    <?php
    // Menkonversi Mata Uang USD ke IDR
    echo "<br>";
    $usd = 10;
    $idr = 16850 * $usd;
    echo "USD = $$usd dan IDR = Rp. $idr";
    ?>

    <h4><?php echo "Menkonversi Suhu Celcius ke Fahrenheit";?></h4>
    <?php
    // Menkonversi Suhu Celcius ke Fahrenheit
    echo "<br>";
    $celcius = 20;
    $fahrenheit = ($celcius * 1.8) + 32;
    echo "Celcius = $celcius °C dan Fahrenheit = $fahrenheit °F";
    ?>

    <h4><?php echo "Menghitung Luas Lingkaran";?></h4>
    <?php
    // Menghitung Luas Lingkaran
    echo "<br>";
    $jarijari = 5;
    $pi = 3.14;
    $luaslingkaran = $jarijari * $jarijari * $pi;
    echo "Jari-Jari Lingkaran adalah 5 Luas Lingkaran = $luaslingkaran"
    ?>

</body>
</html>