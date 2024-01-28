<div class="container5">
<div class="grid">
<div class="dh12">

<?php
// Membuat Nomor Order
$tgl = date("d");
$bln = date("m");
$thn = date("Y");
$jam = date("H");
$mnt = date("i");
$dtk = date("s");

// Menyimpan data order
mysqli_query($kon, "insert into orders (noorder, idanggota, alamatkirim, tglorder, statusorder) values ('$thn$bln$tgl$jam$mnt$dtk', '$_POST[idag]', '$_POST[alamatkirim]', NOW(), 'Baru')");

//
?>
</div>
</div>
</div>