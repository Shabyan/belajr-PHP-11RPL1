<?php
    // Materi Percabangan (IF ELSE)
    $nilai = 56;
    echo "Nilai kamu adalah $nilai <br>";
    echo "Maka status kamu =";
    if ($nilai > 78) {
           echo "Lulus";
    } else {
        echo "Maaf Coba lagi";
    } 
    echo "<hr>";

    $nilai_web = 80;
    $nilai_pbo = 82;
    echo "Nilai Web Kamu = $nilai_web <br>";
    echo "Nilai PBO Kamu = $nilai_web <br>";
    echo "kelulusan kamu = ";
    if ($nilai_web >= 80 OR $nilai_pbo >= 80) {
        if ($nilai_web >= 80) {
        echo "Lulus Mapel Produfktif";
        }
    } else if ($nilai_web >= 80 OR $niali_pbo >= 80) {
        echo "Tidak Lulus Mapel Produktif";
    } else {
        echo "Tidak Lulus Mapel Produktif";
    }
    //   Materi Perulangan (while, do while, for)
      $i = 1;
      while ($i <= 10){
        echo "Hello World | ke - $i <br>";
        $i++; // Assigment +1 
      } 
      echo "<hr>";
      $j = 1;
      do {
        echo $j . "<br>";
        $j++;
      }while ($j <= 5);
      echo "<hr>";

      for ($k = 1; $k <= 10; $k++){
            echo $k . "<br>";
      }
      echo "<hr>";
      for ($x = 15; $x >= 1; $x--){
            for ($y = 1; $y <= $x; $y++){
                echo "👑";
            }
            echo "<br>";
      }
      echo "<hr>";
      for ($z = 1; $z <= 10; $z++) {
        if ($z %  2 == 0) {
            echo $z . "- 😜 <br>";
        } else {
            echo $z . "- 😎 <br>";
        }
      }
    ?>
    