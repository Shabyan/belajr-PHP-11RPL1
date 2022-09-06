<form action="rumus-gagargenjang.php" method="POST">
    <h1> Rumus Alas dan Tinggi gagargenjang</h1>
    Alas: <input name="alas" type="text" id="nilaiA" size="20" value=""/>
    Tinggi: <input name="tinggi" type="text" id="nilaiB" size="20" value=""/>
    <input type="submit" value="Hitung" />
</form>

<?php
$nilaiA = $_POST['alas'];
$nilaiB = $_POST['tinggi'];
function add($nilaiA, $nilaiB) {
$luas = $nilaiA * $nilaiB;
return $luas;
}
echo "<strong><U> Dengan Alas : $nilaiA, </u><br><br>";
echo "<strong><U> Dan Tinggi : $nilaiB, maka:</strong></u><br><br>";
echo "Luas Jajar Genjang : <br>";
$luas = add($nilaiA, $nilaiB);
Printf("luas : %d * %d = %d<br>",$nilaiA,$nilaiB, $luas);
?>