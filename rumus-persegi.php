<form action="rumus-persegi.php" method="POST">
    <h1> Rumus Luas dan Keliling persegi </h1>
    <p>Sisi :</p>
    <input type="number" name="Sisi" placeholder="Ex. 5" />
    <input type="submit" name="proses" placeholder="Hitung Luas & Keliling" />
</form>

<?php
    if ( isset($_POST["proses"])) {
        echo "<hr>";
        $sisi = $_POST["Sisi"];
        $luas = $sisi * $sisi;
        $luas = $sisi * $sisi;
        $keliling = 4 * $sisi;

        echo "sisi : $sisi <br>";
        echo "Luas Persegi : $luas <br>";
        echo "keliling Persegi : $keliling <br>";
    }
    