<?php
    // perulangan, array, dan percabangan

    // membuat rata rata nilai 

    // Array berisi nilai-nilai siswa
    $nilaiSiswa = [90 , 100 , 55 , 80 , 90];
    $nilaitotal = 0;
    $siswa = count($nilaiSiswa);

    for($i=0;$i<5;$i++){
        $nilaitotal += $nilaiSiswa [$i];
    }

    // rata rata .

    
    $rata_rata = $nilaitotal / $siswa;

    echo "<b>Nilai rata-rata dari siswa</b>";
    echo "<hr>";
    echo "Jumlah siswa : " . $siswa ;
    echo "<br>";
    echo "<br>";
    
    for($a=0;$a<$siswa;$a++){
        echo "Nilai siswa secara urut ". $a . " : " . $nilaiSiswa[$a] . "<br>";
    }
    echo "<br>";
    echo "Nilai rata-rata siswa adalah : " . $rata_rata;
?>