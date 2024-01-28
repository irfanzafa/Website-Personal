<div class="grid">
    <?php
	 $sqlm = mysqli_query($kon, "select * from modul order by tgluploadfile desc");
     while($rm = mysqli_fetch_array($sqlm)){
         $sqlkm = mysqli_query($kon, "select * from kategorimodul where idkatm='$rm[idkatm]'");
         $rkm = mysqli_fetch_array($sqlkm);
    ?>
    <div class="modul">
        <div class="row">
            <div class='kepalacard'><small>Kategori Modul :</small> <?php echo "$rkm[namakatm]"; ?></div>
            <div class="modul-card">
            <br>
                <iframe src="../filemodul1/<?php echo "$rm[filemodul]"; ?>"></iframe>
                <hr>
                <h3 class='edukasi-menu-title'>-- <?php echo "$rm[judul]"; ?> --</h3>
                <hr>
                <p class='edukasi-menu-detail'> <?php echo "$rm[keterangan]"; ?> </p>
                <hr>
                <small><i>Dibuat pada <?php echo "$rm[tgluploadfile]"; ?> WIB
                <br>oleh <?php echo "$rm[dibuatoleh]"; ?></i></small>
            </div>
        </div>
    </div>
    
    <?php
    }
    ?>

</div>