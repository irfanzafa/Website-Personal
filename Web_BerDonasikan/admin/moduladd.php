<a href="?p=modul"><button type="button" class="btn btn-add">Donasi</button></a>
<button type="button" class="btn btn-dis">Open Donasi</button>
<br>
<div class="card">
<div class="kepalacard">Open Donasi</div>
<div class="isicard" style="text-align:center;">
<form name="" action="" method="post" enctype="multipart/form-data">
  <?php 
    $sqlkm = mysqli_query($kon, "select * from kategorimodul order by namakatm asc");
    echo "<select name='idkatm'>";
    echo "<option value=''>Jenis Donasi</option>";
    while($rkm = mysqli_fetch_array($sqlkm)){
      echo "<option value='$rkm[idkatm]'>$rkm[namakatm]</option>";
    }
    echo "</select>";
  ?>
  <input name="judul" type="text" id="judul" placeholder="Judul">
  <input name="keterangan" type="text" id="keterangan" placeholder="Keterangan">
  <input name="dibuatoleh" type="text" id="dibuatoleh" placeholder="Nama Pembuat">
  <input name="filemodul" type="file" id="filemodul">
  <input name="simpan" type="submit" id="simpan" value="Submit">
</form>

<?php
  if($_POST["simpan"]){
    if(!empty($_POST["idkatm"]) and !empty($_POST["judul"]) and !empty($_POST["keterangan"])
     and !empty($_POST["dibuatoleh"])){
      $nmmodul = $_FILES["filemodul"]["name"];
      $lokmodul = $_FILES["filemodul"]["tmp_name"];
      if(!empty($lokmodul)){
        move_uploaded_file($lokmodul, "../filemodul1/$nmmodul");
      }
      

      $sqlm = mysqli_query($kon, "insert into modul (idkatm, idadmin, judul, keterangan, dibuatoleh, filemodul, tgluploadfile)
       values ('$_POST[idkatm]', '$ra[idadmin]', '$_POST[judul]', '$_POST[keterangan]', '$_POST[dibuatoleh]', '$nmmodul', NOW())");

        if($sqlm){
          echo "Donasi Berhasil Diupload";
        }else{
          echo "Donasi Gagal Diupload";
        }
        echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=modul'>";
      }else{
      echo "Data harus diisi dengan lengkap !!!";
      }
  }
?>