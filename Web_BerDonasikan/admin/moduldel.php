<?php
    $sqlm=mysqli_query($kon, "delete from modul where idmodul='$_GET[id]'");
    if ($sqlm){
        echo "Modul Berhasil Dihapus";
    }else{
        echo "Modul Gagal Dihapus";
    }
    echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=modul'>";

?>