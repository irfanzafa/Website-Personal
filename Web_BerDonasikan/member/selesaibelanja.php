<p><div class="container5">
<div class="grid">
<div class="dh12">
<div class="card">
<div class="kepalacard">Proses Checkout</div>
<div class="isicard" style="text-align:center;">
<form method="post" action="<?php echo "?p=selesaibelanjaaksi"; ?>" enctype="multipart/form-data">
<input name="idag" type="hidden" value="<?php echo "$rag[idanggota]"; ?>">
<input name="email" type="text" value="<?php echo "$rag[email]"; ?>">
<input name="nama" type="text" value="<?php echo "$rag[nama]"; ?>">
<input name="nohp" type="text" value="<?php echo "$rag[nohp]"; ?>">
<textarea name="alamat"><?php echo "$rag[alamat]"; ?></textarea>
<textarea name="alamatkirim" placeholder="Alamat Pengiriman"></textarea>
<?php
$sqlj = mysqli_query($kon, "select * from jasakirim order by nama asc");
echo "<select name='idjasa'>";
echo "<option value='0'>Pilih Jasa Pengiriman</option>";
while($rj = mysqli_fetch_array($sqlj)){
    echo "<option value='$rj[idjasa]'>$rj[nama]</option>";
}
echo "</select>";
?>
<input type="submit" name="Submit" value="PROSES CHECKOUT">
</form>
</div>
</div>
</div>
</div>
</div>