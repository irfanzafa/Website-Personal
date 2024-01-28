<a href="<?php echo "?p=katmodul"; ?>"><button type="button" class="btn btn-add">KATEGORI MODUL</button></a>
<button type="button" class="btn btn-dis">Tambah Kategori Modul</button>
<br>
<div class="card">
<div class="kepalacard">Tambah Kategori Modul</div>
<div class="isicard" style="text-align:center";>
<form name="" method="post" action="" enctype="multipart/form-data">
  <input name="namakatm" type="text" id="namakatm" placeholder="Nama Kategori Modul">
  <textarea name="ketkatm" id="ketkatm" placeholder="Keterangan Kategori Modul"></textarea>
  <input name="simpan" type="submit" id="simpan" value="SIMPAN KATEGORI">
</form>

<?php
if($_POST["simpan"]){
	if(!empty($_POST["namakatm"]) and !empty($_POST["ketkatm"])){
		$sqlkm = mysqli_query($kon, "insert into kategorimodul (idadmin, namakatm, ketkatm, tglkatm) values ('$ra[idadmin]',
		 '$_POST[namakatm]', '$_POST[ketkatm]', NOW())");
		
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