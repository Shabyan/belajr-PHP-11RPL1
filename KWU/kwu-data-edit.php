<?php
      if ( isset($_GET["kodebarang"]) ){
            $kodebarang = $_GET["kodebarang"];
            $check_kodebarang = "SELECT * FROM transaksi  WHERE kodebarang = '$kodebarang'; ";
            include('./kwu-config.php');
            $query = mysqli_query($mysqli, $check_kodebarang);
            $row = mysqli_fetch_array($query);
      }
?>
<h1>Edit Data</h1>
<form action="kwu-data-edit.php" method="POST">
      <label for="kodebarang">kodebarang :</label><br>
      <input value="<?php echo $row["kodebarang"]; ?>" type="number" name="kodebarang" placeholder="Ex. 1210024552" readonly/><br>

      <label for="tanggal">tanggal :</label><br>
      <input value="<?php echo $row["tanggal"]; ?>" type="date" name="tanggal" placeholder="Ex. 11-06-2020" /><br>

      <label for="pembeli">pembeli :</label><br>
      <input value="<?php echo $row["pembeli"]; ?>" type="text" name="pembeli" placeholder="Ex. Kazuha" /><br>

      <label for="namabarang">namabarang :</label><br>
      <input value="<?php echo $row["namabarang"]; ?>" type="text" name="namabarang" placeholder="Ex. nescafe" /><br>

      <label for="qty">qty :</label><br>
      <input value="<?php echo $row["qty"]; ?>" type="number" name="qty" placeholder="Ex. 3" /><br>

      <label for="hargabeli">hargabeli :</label><br>
      <input value="<?php echo $row["hargabeli"]; ?>" type="number" name="hargabeli" placeholder="Ex. 7500" /><br>

      <label for="hargajual">hargajual :</label><br>
      <input value="<?php echo $row["hargajual"]; ?>" type="number" name="hargajual" placeholder="Ex. 8000" /><br>

      <br>
      <input type="submit" name="edit" value="Edit Data" />
      <a href="kwu-data.php">Kembali</a>
</form>

<?php
      if ( isset($_POST["edit"]) ) {
            $kodebarang = $_POST["kodebarang"];
            $tanggal = $_POST["tanggal"];
            $pembeli = $_POST["pembeli"];
            $namabarang = $_POST["namabarang"];
            $qty = $_POST["qty"];
            $hargabeli = $_POST["hargabeli"];
            $hargajual = $_POST["hargajual"];

            // EDIT - Memperbaharui Data
            $query = "
                  UPDATE transaksi SET tanggal = '$tanggal', 
                  pembeli = '$pembeli',
                  namabarang = '$namabarang',
                  qty = '$qty',
                  hargabeli = '$hargabeli',
                  hargajual = '$hargajual'
                  WHERE kodebarang = '$kodebarang';
            ";
            
            include ('./kwu-config.php');
            $update = mysqli_query($mysqli, $query);

            if($update){
                  echo "
                        <script>
                        alert('Data berhasil diperbaharui');
                        window.location='kwu-data.php';
                        </script>
                  ";
            }else{
                  echo "
                        <script>
                        alert('Data gagal');
                        window.location='kwu-data-edit.php?kodebarang=$kodebarang';
                        </script>
                  ";
            }
      }
?>