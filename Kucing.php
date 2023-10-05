<?php
function checkCats($catsTuti, $catsNining)
{
    // Salin array Tuti dan hapus usia kucing dari array yang disalin
    $tutiCopy = $catsTuti;
    array_splice($tutiCopy, 0, 1); // Hapus usia kucing pertama
    array_splice($tutiCopy, -2); // Hapus dua kucing terakhir

    // array yang berisi data Tuti yang sudah dikoreksi dan data Nining
    $combinedArray = array_merge($tutiCopy, $catsNining);

    // Loop melalui array gabungan dan menampilkan apakah kucing dewasa atau kecil
    foreach ($combinedArray as $key => $age) {
        if ($key === 0 && $age >= 5) {
            echo "Kucing Nomor " . ($key + 1) . " adalah Kucing Dewasa (Berusia $age tahun)" . PHP_EOL;
        } elseif ($key === 1 && $age < 5) {
            echo "Kucing Nomor " . ($key + 1) . " masih anak-anak (Berusia $age tahun)" . PHP_EOL;
        } else {
            echo "Kucing Nomor " . ($key + 1) . " adalah Kucing Dewasa (Berusia $age tahun)" . PHP_EOL;
        }
    }
}

// Data uji 1
$dataTuti1 = [3, 5, 2, 12, 7];
$dataNining1 = [4, 1, 15, 8, 3];
echo "Data Uji 1:" . PHP_EOL;
checkCats($dataTuti1, $dataNining1);

// Data uji 2
$dataTuti2 = [9, 16, 6, 8, 3];
$dataNining2 = [10, 5, 6, 1, 4];
echo "Data Uji 2:" . PHP_EOL;
checkCats($dataTuti2, $dataNining2);
