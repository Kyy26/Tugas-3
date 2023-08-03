<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>
<body>
    <h1>Berlatih Looping</h1>





<?php
echo "<h3>Soal No 1 Looping I Love PHP</h3>";

// Looping Pertama (Ascending)
echo "LOOPING PERTAMA<br>";
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " - Iki Ganteng<br>";
}

// Looping Kedua (Descending)
echo "LOOPING KEDUA<br>";
for ($i = 20; $i >= 2; $i -= 2) {
    echo $i . " - Iki Ganteng<br>";
}
?>

<?php
echo "<h3>Soal No 2 Looping Array Modulo </h3>";

$numbers = [18, 45, 29, 61, 47, 34];
echo "array numbers: ";
print_r($numbers);

// Lakukan Looping untuk mencari sisa bagi dengan angka 5 dan tampung ke dalam array $rest
$rest = [];
foreach ($numbers as $number) {
    $mod = $number % 5;
    $rest[] = $mod;
}

echo "<br>";
echo "Array sisa baginya adalah:  "; 
echo "<br>";
echo "Array(";
for ($i = 0; $i < count($rest); $i++) {
    echo $rest[$i];
    if ($i < count($rest) - 1) {
        echo ", ";
    }
}
echo ")";
?>

<?php
echo "<h3> Soal No 3 Looping Asociative Array </h3>";

$items = [
    ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 
    ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
    ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
    ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
];

// Loop through each item and convert it to an associative array
foreach ($items as $item) {
    $itemAssoc = [
        'id' => $item[0],
        'name' => $item[1],
        'price' => $item[2],
        'description' => $item[3],
        'source' => $item[4]
    ];

    // Output the associative array
    print_r($itemAssoc);
    echo "<br>";
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Pattern of Asterisks</title>
</head>
<body>
    <?php
    echo "<h3>Soal No 4 Asterix </h3>";

    // Outer loop for rows
    for ($i = 1; $i <= 5; $i++) {
        // Inner loop for asterisks in each row
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
    ?>

</body>
</html>

