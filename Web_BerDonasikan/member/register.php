<div class="card">
<div class="kepalacard">Registrasi Anggota</div>
<div class="isicard" style="text-align: center;">
<form action="" name="form1" method="post" enctype="multipart/form-data">
    <input type="text" name="email" id="email" placeholder="Email Anggota">
    <input type="password" name="password" id="password" placeholder="Password Login">
    <input type="text" name="nama" id="nama" placeholder="Nama Lengkap"><p>
    <input type="radio" name="jk" id="jk" value="L">Laki-Laki
    <input type="radio" name="jk" id="jk" value="P">Perempuan <p>
    <input type="date" name="tgllahir" id="tgllahir" placeholder="Tanggal Lahir"><p>
    <textarea name="alamat" id="alamat" placeholder="Alamat Lengkap"></textarea>
    <input type="text" name="nohp" id="nohp" placeholder="No. Handphone">
    <input type="file" name="foto" id="foto"><p>
    <input type="submit" name="register" id="register" placeholder="DAFTAR SEBAGAI ANGGOTA">
</form>

<?php
if($_POST["register"]){
    if(!empty($_POST["email"]) and !empty($_POST["password"]) and !empty($_POST["nama"]) and !empty($_POST["jk"]) and !empty($_POST["tgllahir"]) and !empty($_POST["alamat"]) and !empty($_POST["nohp"])){
        $nmfoto = $_FILES["foto"]["name"];
        $lokfoto = $_FILES["foto"]["tmp_name"];
        if(!empty($lokfoto)){
            move_uploaded_file($lokofoto, "foto/$nmfoto");
            $foto = ", '$nmfoto'";
        }else{
            $foto = "";
        }

        $sqlag = mysqli_query($kon, "insert into anggota (email, password, nama, jk, tgllahir, alamat, nohp, foto, tgldaftar) values ('$_POST[email]', '$_POST[password]', '$_POST[nama]', '$_POST[jk]', '$_POST[tgllahir]', '$_POST[alamat]', '$_POST[nohp]' $foto, NOW())");

        if($sqlag){
            echo "Registrasi Berhasil";
        }else{
            echo "Registrasi Gagal";
        }
        echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=login'>";
    }else{
        echo "Data Harus Diisi Dengan Lengkap";
    }
}
?>
</div>
</div>