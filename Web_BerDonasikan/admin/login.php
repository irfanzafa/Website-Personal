<!-- Navbar -->
<nav class="navbar">
            <a href="javascrip:void()" class="navbar-logo">Ber-<span>Donasikan.</span></a>
            <div class="navbar-a">
            </div>
            <div class="navbar-extra">
                <a href="javascrip:void()" id="hamburger-menu"><i data-feather="menu"></i></a>
            </div>
        </nav>
        <!-- Navbar Done-->
<div class="login "id="login">
<fieldset>
<img src="../img/latar.jpg" width="120px">
<form name="form1" method="post" action="" enctype="multipart/form-data">
	<h3>Administrator.</h3>
	<p>Silahkan Login</p>
  <input name="username" type="text" id="username" placeholder="Username">
  <input name="password" type="text" id="password" id="password" placeholder="Password">
  <input name="login" type="submit" id="login" value="Login">
</form>

<?php
if($_POST["login"]){
	$sqla = mysqli_query($kon, "select * from admin where username='$_POST[username]' and password='$_POST[password]'");
		$ra = mysqli_fetch_array($sqla);
		$row = mysqli_num_rows($sqla);
		if($row > 0){
			session_start();
			$_SESSION["useradm"] = $ra["username"];
			$_SESSION["passadm"] = $ra["password"];
			echo "<div align='center'>Login Berhasil</div>";
			}else{
				echo "<div align='center'>Login Gagal</div>";
			}
		echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=home'>";
	}
?>
</fieldset>
</div>
