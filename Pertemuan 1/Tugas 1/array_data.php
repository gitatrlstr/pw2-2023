<?php
$m_fruits = [
    [ "ID" => "1", "Nama" => "Alpukat", "Color" => "Hijau", "Stock" => 30, "Price" => 30000, "Description" => "Tumbuhan ini berasal dari Meksiko dan Amerika Tengah dan kini banyak dibudidayakan di Amerika Selatan dan Amerika Tengah sebagai tanaman pekarangan di daerah tropika lainnya di dunia."],
    [ "ID" => "2", "Nama" => "Mangga", "Color" => "Kuning & hijau", "Stock" => 20, "Price" => 10000, "Description" => "Buah mangga termasuk kelompok buah batu (drupa) yang berdaging, dengan ukuran dan bentuk yang sangat berubah-ubah bergantung pada macamnya."],
    [ "ID" => "3", "Nama" => "Jeruk", "Color" => "Orange", "Stock" => 30, "Price" => 55000, "Description" => " Buah dari spesies citrus dalam famili Rutaceae. Istilah jeruk umumnya mengacu pada Citrus x sinensis yang juga disebut jeruk manis dan Citrus aurantium yang disebut jeruk pahit."],
    [ "ID" => "4", "Nama" => "Lengkeng", "Color" => "Coklat", "Stock" => 20, "Price" => 60000, "Description" => " Salah satu tanaman yang termasuk kedalam suku lerak-lerakan atau Sapindaceae. tanaman buah-buahan ini berasal dari daratan Asia Tenggara."],
    [ "ID" => "5", "Nama" => "Sawo", "Color" => "Coklat", "Stock" => 30, "Price" => 25000, "Description" => "pohon buah yang berumur panjang. Pohon dan buahnya dikenal dengan beberapa nama seperti sawo (Ind., Jw.), sauh atau sauh manila, atau ciku (Mly.)."],
    [ "ID" => "6", "Nama" => "Manggis", "Color" => "Merah", "Stock" => 20, "Price" => 15000, "Description" => "sejenis pohon hijau abadi dari daerah tropika yang diyakini berasal dari Semenanjung Malaya dan menyebar ke Kepulauan Nusantara."],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Array Table Buah</title>
</head>
<body>
    <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Warna</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Deskripsi</th>
        </tr>
        </thead>

        <tbody>

        <?php
            foreach ($m_fruits as $fruit) {
            ?>
            <tr>

            <td><?= $fruit["ID"] ?></td>
            <td><?= $fruit["Nama"] ?></td>
            <td><?= $fruit["Color"] ?></td>
            <td><?= $fruit["Stock"] ?></td>
            <td><?= $fruit["Price"] ?></td>
            <td><?= $fruit["Description"] ?></td>

            </tr>

            <?php
            }
        ?>
        </tbody>
    </table>
    </div>
</body>
</html>