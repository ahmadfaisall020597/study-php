<?php
    // Array Associative
    // definisinya sama seperti array numerik, kecuali
    // keynya adalah string yang kita buat sendiri
        $mahasiswa = [
            [
                "nama" => "Ahmad",
                "nrp" => "081234",
                "email" => "ahmad@gmail.com",
                "jurusan" => "Teknik Informatika",
                "gambar" => "index.png"
            ],
            [
                "nama" => "Faisal",
                "nrp" => "0811511",
                "email" => "faisal@gmail.com",
                "jurusan" => "Teknik Industri",
                "gambar" => "index1.png"
            ],
            [
                "nama" => "Rara",
                "nrp" => "48313131",
                "email" => "rara@gmail.com",
                "jurusan" => "Management",
                "gambar" => "index1.png"
            ],
            [
                "nama" => "Hadi",
                "nrp" => "0811815",
                "email" => "hadi@gmail.com",
                "jurusan" => "Sastra Bahasa",
                "gambar" => "index.png"
            ],
            [
                "nama" => "Adji",
                "nrp" => "0818113",
                "email" => "adji@gmail.com",
                "jurusan" => "Teknik Informatika",
                "gambar" => "index.png"
            ],

        ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>

        <?php foreach( $mahasiswa as $mhs ) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>
                &nrp=<?= $mhs["nrp"]; ?>
                &email=<?= $mhs["email"]; ?>
                &jurusan=<?= $mhs["jurusan"]; ?>
                &gambar=<?= $mhs["gambar"] ?>"><?= $mhs["nama"]; ?>
                </a>
            </li>
        <?php endforeach; ?>

    </ul>
</body>
</html>