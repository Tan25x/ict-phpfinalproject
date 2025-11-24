<?php include "connection.php"; ?>
<center>
<h2>Tabel Data</h2>
<table border="1" cellspacing="0">
<tr>
<th>No</th><th>NIS</th><th>Nama</th><th>Alamat</th><th>Rubah</th><th>Hapus</th>
</tr>
<?php
$no=1;
$tampil=mysqli_query($mysqli,"SELECT * FROM datainput");
while($hasil=mysqli_fetch_array($tampil)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $hasil['nis']; ?></td>
<td><?php echo $hasil['nama']; ?></td>
<td><?php echo $hasil['alamat']; ?></td>
<td><a href="update.php?nis=<?php echo $hasil['nis']; ?>">Update</a></td>
<td><a href="delete.php?nis=<?php echo $hasil['nis']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a></td>
</tr>
<?php } ?>
</table>
</center>