<?php
include("koneksi.php");

//query untuk menampilkan data

$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Data Barang</title>
</head>
<body>
    <div class="container">
        <h1>Data Barang</h1>
        <nav>
<a href="home.php">Home</a>
<a href="about.php">Tentang</a>
<a href="kontak.php">Kontak</a>
</nav>
        <a href="tambah.php">Tambah Barang</a>
        <br></br>

        <div class="main">
            <table border="1" cellpadding="10" cellspacing="0">
<tr>
    <th>Gambar</th>
    <th>Nama Barang</th>
    <th>Katagori</th>
    <th>Harga Jual</th>
    <th>Harga Beli</th>
    <th>Stok</th>
    <th>Aksi</th>
</tr>
<?php if($result): ?>
<?php while($row = mysqli_fetch_array($result)): ?>
<tr>
<td><img src="gambar/<?= $row['Gambar'];?>" alt="<?=
$row['Nama'];?>"></td>
<td><?= $row['Nama'];?></td>
<td><?= $row['Kategori'];?></td>
<td><?= $row['Harga_Beli'];?></td>
<td><?= $row['Harga_Jual'];?></td>
<td><?= $row['Stok'];?></td>
<td> 
    <a class="tombol3" href="ubah.php?id=<?= $row['Id_Barang'];?>">Ubah</a>
    <a class="tombol3" href="hapus.php?id=<?= $row['Id_Barang'];?>">Hapus</a> </td>
</tr>
<?php endwhile; else: ?>
<tr>
<td colspan="7">Belum ada data</td>
</tr>
<?php endif; ?>
</table>
</div>
</div>
<footer>
            <p>&copy; 2021, Informatika, Universitas Pelita Bangsa</p>
        </footer>
    </div>
</body>
</html>
</body>
</html>
