<?php
$sqlkm = mysqli_query($kon, "select * from kategorimodul where idkatm='$_GET[id]'");
$rkm = mysqli_fetch_array($sqlkm)
?>
<a href="<?php echo "?p=katmodul"; ?>"><button type="button" class="btn btn-add">KATEGORI MODUL</button></a>
<button type="button" class="btn btn-dis">Tambah Kategori Modul</button>
<br>
<div class="card">
<div class="kepalacard">Tambah Kategori Modul</div>
<div class="isicard" style="text-align:center";>
<form name="" method="post" action="" enctype="multipart/form-data">
    <input type="hidden" name="idkatm" value="<?php echo "$rkm[idkatm]"; ?>">
  <input name="namakatm" type="text" id="namakatm" placeholder="Nama Kategori Modul" value="<?php echo "$rkm[namakatm]"; ?>">
  <textarea name="ketkatm" id="ketkatm" placeholder="Keterangan Kategori Modul"><?php echo "$rkm[ketkatm]"; ?></textarea>
  <input name="simpan" type="submit" id="simpan" value="SIMPAN KATEGORI">
</form>

<?php
if($_POST["simpan"]){
	if(!empty($_POST["namakatm"]) and !empty($_POST["ketkatm"])){
		$sqlkm = mysqli_query($kon, "update kategorimodul set namakatm='$_POST[namakatm]',
         ketkatm='$_POST[ketkatm]' where idkatm='$_POST[idkatm]'");
		
		if ($sqlkm){
			echo "Kategori Modul Berhasil Disimpan";
		}else{
			echo "Gagal menyimpan";
		}
		echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=katmodul'>";
	}else{
		echo "Isi Data Dengan Lengkap";
	}
}
?>

</div>
</div>