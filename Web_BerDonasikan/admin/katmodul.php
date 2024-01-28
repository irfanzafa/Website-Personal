<button type="button" class="btn btn-dis">Kategori Bantuan</button> &raquo;
<a href="<?php echo "?p=katmoduladd"; ?>"><button type="button" class="btn btn-add">Tambah Kategori Bantuan</button></a>
<br>
<?php
$sqlkm = mysqli_query($kon, "select * from kategorimodul order by namakatm asc");
while($rkm = mysqli_fetch_array($sqlkm)){
	$sqlm = mysqli_query($kon, "select * from modul where idkatm='$rkm[idkatm]'");
	$rowm = mysqli_num_rows($sqlm);
	echo "<div class='kategorim'>";
	echo "<div class='row'>";
	echo "<div class='kategorim-card'>";
	echo "<br>";
	echo "<hr><big>$rkm[namakatm]</big> <div class='badge'>$rowm</div>
	 	<hr>$rkm[ketkatm]
		<hr><small><i>Dibuat pada $rkm[tglkatm] WIB
		<br>Oleh $ra[nama]</i></small>";
	echo "</div>";
	echo "<div class='kakicard>'";
	echo "<br><a href='?p=katmoduledit&id=$rkm[idkatm]'><button type='button' class='btn btn-add'>Ubah Kategori </button></a>";
	echo "<a href='?p=katmoduldel&id=$rkm[idkatm]'><button type='button' class='btn btn-add'>Hapus Kategori Bantuan</button></a>";
	echo "</div>";
	echo "</div><br>";
	echo "</div>";
}
?>