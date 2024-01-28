<?php
    $sqlkm=mysqli_query($kon, "delete from kategorimodul where idkatm='$_GET[id]'");
    if ($sqlkm){
        echo "Video Berhasil Dihapus";
    }else{
        echo "Video Gagal Dihapus";
    }
    echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=katmodul'>";

?>