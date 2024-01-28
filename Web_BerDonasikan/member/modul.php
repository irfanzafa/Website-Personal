<button type="button" class="btn btn-dis">Donasi</button> &raquo;
<a href="<?php echo "?p=moduladd"; ?>"><button type="button" class="btn btn-add">Open Donasi</button></a>
<br>
<?php
    $sqlm = mysqli_query($kon, "select * from modul order by tgluploadfile desc");
    while($rm = mysqli_fetch_array($sqlm)){
        $sqlkm = mysqli_query($kon, "select * from kategorimodul where idkatm='$rm[idkatm]'");
        $rkm = mysqli_fetch_array($sqlkm);

        echo "<div class='modul'>";
        echo "<div class='row'>";
        echo "<div class='kepalacard'><small>Kategori Bantuan :</small> $rkm[namakatm]</div>";
        echo "<div class='modul-card'>";
        echo "<br>";
        echo "<iframe src='../filemodul1/$rm[filemodul]'></iframe>
          <hr>
          <h3 class='edukasi-menu-title'>-- $rm[judul] --</h3>
          <hr>
		  <p class='edukasi-menu-detail'> $rm[keterangan] </p>
          <hr>
          <small><i>Dibuat pada $rm[tgluploadfile] WIB
          <br>oleh $rm[dibuatoleh]</i></small>";

        echo "</div>";
        echo "<div class='kakicard>'";
        echo "<br><a href='?p=moduledit&id=$rm[idmodul]'><button type='button' class='btn btn-add'></button></a>";
        echo "<a href='?p=moduldel&id=$rm[idmodul]'><button type='button' class='btn btn-add'>Hapus Kegiatan Donasi</button></a>";
        echo "</div>";
        echo "</div><br>";
        echo "</div>";
    }
?>