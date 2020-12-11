<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>APLIKASI CUTI</title>
  </head>
  <body>
    <h1><center>DAFTAR YANG CUTI</center></h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
<?php
include "koneksi.php";

?>
<table class="table table-secondary">
    <tr class="table-danger">
        <td class="text-dark font-weight-bold"> NIP </td>
        <td class="text-dark font-weight-bold"> NAMA </td>
        <td class="text-dark font-weight-bold"> JABATAN </td>
		<td class="text-dark font-weight-bold"> BAGIAN </td>
		<td class="text-dark font-weight-bold"> PENGAJUAN CUTI </td>
		<td class="text-dark font-weight-bold"> SISA CUTI </td>
    </tr>
    <?php 
        $query=mysqli_query($koneksi,"SELECT * FROM cuti");
        while ($cuti_karyawan=mysqli_fetch_array($query))
        {
        ?>
    <tr class="table-secondary">
		<td><?php echo $cuti_karyawan['nip'];?></td>
        <td><?php echo $cuti_karyawan['nama'];?></td>
		<td><?php echo $cuti_karyawan['jabatan'];?></td>
		<td><?php echo $cuti_karyawan['bagian'];?></td>
		<td><?php echo $cuti_karyawan['pengajuan_cuti'];?></td>
        <td><?php echo $cuti_karyawan['sisa_cuti'];?></td>
    </tr>

        <?php } ?>
		
</table>
	<tr>
	<td><a class="btn btn-primary" href="inputkaryawan.php" role="button">kembali</a><td>
	</tr>
</html>