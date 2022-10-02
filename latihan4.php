<?php
    // Date
    // Untuk menampilkan tanggal dengan format tertentu
        // echo date("l, d-M-Y");


    // Time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 januari 1970
        // echo time();

    // Mengecek 100 7 hari kedepan
        // echo date("d-M-Y", time()+60*60*24*7);


    // mktime
    // untuk membuat sendiri detik
    // mktime (0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
        // echo date("l",mktime(0,0,0,5,2,1997));

    //strtotime
    echo date("l",strtotime("2 May 1997"));
?>