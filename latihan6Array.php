<?php
    // array
    // variabel yang dapat memiliki banyak nilai
    // elemen pada array boleh memiliki tipe data yang berbeda
    // pasangan antara key dan value
    // key-nya adalah index, yang di mulai dari 0

    // Membuat Array
    // cara lama
        $hari = array("Senin","Selasa","Rabu");

    // cara baru
        $bulan = ["Januari","Februari","Maret"];
        $arr1 = [123,"tulisan", false];


    // Menampilkan Array
    // var_dump / print_r()
        // var_dump($hari);
        // echo "<br>";
        // print_r($bulan);
        // echo "<br>";

    // Menampilkna 1 elemen pada array
        // echo $arr1[1];
        // echo "<br>";
        // echo $bulan[1];


    // menambahkan elemen baru pada array
        // var_dump($hari);
        $hari[] = "Kamis";
        $hari[] = "Jum'at";
        $hari[] = "Sabtu";
        $hari[] = "Minggu";
        echo "<br>";
        var_dump($hari);
?>