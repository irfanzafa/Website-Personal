<?php
  $sqlm = mysqli_query($kon, "select * from modul where idmodul='$_GET[id]'");
  $rm = mysqli_fetch_array($sqlm);
?>
<a href="?p=modul"><button type="button" class="btn btn-add">Modul</button></a>
<button type="button" class="btn btn-dis">Tambah Modul</button>
<br>
<div class="card">
<div class="kepalacard">Tambah Modul</div>
<div class="isicard" style="text-align:center;">
<form name="" action="" method="post" enctype="multipart/form-data">

  <input name="judul" type="text" id="judul" value="<?php echo "$rm[judul]"; ?>" placeholder="Judul">
  <input name="keterangan" type="text" id="keterangan" value="<?php echo "$rm[keterangan]"; ?>" placeholder="Keterangan">
  <input name="dibuatoleh" type="text" id="dibuatoleh" value="<?php echo "$rm[dibuatoleh]"; ?>" placeholder="Nama Pembuat">
  <input name="filemodul" type="file" id="filemodul">
  <input name="simpan" type="submit" id="simpan" value="Submit">
</form>

<?php
  if($_POST["simpan"]){
    if(!empty($_POST["judul"]) and !empty($_POST["keterangan"])
     and !empty($_POST["dibuatoleh"])){
      $nmmodul = $_FILES["filemodul"]["name"];
      $lokmodul = $_FILES["filemodul"]["tmp_name"];
      if(!empty($lokmodul)){
        move_uploaded_file($lokmodul, "../filemodul1/$nmmodul");
        $modul = ", filemodul='$nmmodul'";
      }else{
        $modul = "";
      }
      

      $sqlm = mysqli_query($kon, "update modul set judul='$_POST[judul]', keterangan='$_POST[keterangan]',
      dibuatoleh='$_POST[dibuatoleh]' 
      $nmmodul where idmodul='$_POST[idmodul]' ");

        if($sqlm){
          echo "Modul Berhasil Tersimpan";
        }else{
          echo "Modul Gagal Disimpan";
        }
        echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=modul'>";
      }else{
      echo "Data harus diisi dengan lengkap !!!";
      }
  }
?>