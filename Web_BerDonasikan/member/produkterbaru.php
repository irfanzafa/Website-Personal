<div class="container5">
    <div class="grid">
        <div class="dh12">
<?php
$batas = 4;
$halaman = $_GET["pg"];
if(empty($halaman)){
    $posisi = 0;
    $halaman = 1;
}else{
    $posisi = ($halaman - 1) * $batas;
}

if(!empty($_GET["idk"])){
    $q = " where idkat='$_GET[idk]'";
    $l = "";
}else if($_POST["cari"]){
    $q = " where nama like '%$_POST[cari]%'";
    $l = "";
}else{
    $q = "";
    $l = " limit $posisi, $batas";
}

$sqlk = mysqli_query($kon, "select * from kategori $q");
$rk = mysqli_fetch_array($sqlk);
if(!empty($_GET["idk"])){
    $kat = "Kategori : <b>$rk[namakat]</b>";
}else{
    $kat = "Kategori Bantuan";
}
echo "<h2>$kat</h2>";

$sqlm = mysqli_query($kon, "select * from modul order by tgluploadfile desc");
    while($rm = mysqli_fetch_array($sqlm)){
        $sqlkm = mysqli_query($kon, "select * from kategorimodul where idkatm='$rm[idkatm]'");
        $rkm = mysqli_fetch_array($sqlkm);

        echo "<div class='modul'>";
        echo "<div class='row'>";
        echo "<div class='kepalacard'><small>Kategori Bantuan :</small> $rkm[namakatm]</div>";
        echo "<div class='modul-card'>";
        echo "<br>";
        echo "<iframe style='width: 320px;'src='../filemodul1/$rm[filemodul]'></iframe>
          <hr>
          <h3 class='edukasi-menu-title'>-- $rm[judul] --</h3>
          <hr>
		  <p class='edukasi-menu-detail'> $rm[keterangan] </p>
          <hr>
          <small><i>Dibuat pada $rm[tgluploadfile] WIB
          <br>oleh $rm[dibuatoleh]</i></small><br>";
          echo "<a href='https://docs.google.com/forms/d/e/1FAIpQLScbtFde0BN4KxEPdI-3InPitqYV3rcsX_T1JT5GX6SufV7usA/viewform?usp=sf_link'><button type='button' class='btn btn-add'>Tambah Donasi</button></a>";
        echo "</div>";
        echo "</div>";
        echo "</div><br>";
        echo "</div>";
    }

echo "<div class='dh12' align='right'>";
echo "Halaman ";
$sqlhal = mysqli_query($kon, "select * from modul");
$jmldata = mysqli_num_rows($sqlhal);
$jmlhal = ceil($jmldata/$batas);

for($i=1;$i<=$jmlhal;$i++){
  if ($i == $halaman){
	echo "<span class='kotak'><b>$i</b></span> ";
  }
}

if($halaman > 1){
	$previous=$halaman-1;
	echo "<span class='kotak'><a href=?p=produk&pg=$previous>&laquo; Prev</a></span> ";
}else{ 
	echo "<span class='kotak'>&laquo; Prev</span> ";
}

if($halaman < $jmlhal){
	$next=$halaman+1;
	echo "<span class='kotak'><a href=?p=produk&pg=$next>Next &raquo;</a></span>";
}else{ 
	echo "<span class='kotak'>Next &raquo;</span>";
}

echo " Total Produk <span class='kotak'><b>$jmldata</b></span> ";
echo "<p></div>";
?>
        </div>
    </div>
</div>