<form action="post.php" method="POST">
    <input type="text" name="namalengkap" placeholder="Ex. indra EI" /><br>
    <input type="text" name="kelas" placeholder="Ex. 11 RPL 1" /><br>
    <input type="text" name="Nis" placeholder="Ex. 089321" /><br>
    <input type="submit" name="simpan" value="Simpan Data" /><br>
</form>
<?php
    if( isset($_POST["simpan"]) ){
        echo "<hr>";

        $namalengkap =$_POST["namalengkap"];
        $kelas =$_POST["kelas"];
        $Nis =$_POST["Nis"];


        echo "nama lengkap : " .$namalengkap . "<br>";
        echo "kelas : " . $kelas . "<br>";
        echo "Nis : " . $Nis . "<br>"; 
    }