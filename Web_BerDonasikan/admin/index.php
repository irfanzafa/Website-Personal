<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="style.css"/>
<title>BerDonasikan.</title>
</head>
<body style="">
<?php
if(!empty($_SESSION["useradm"]) and !empty($_SESSION["passadm"])){
   $sqla = mysqli_query($kon, "select * from admin where username='$_SESSION[useradm]' and password='$_SESSION[passadm]'");
   $ra = mysqli_fetch_array($sqla);
?>

<!-- Navbar -->
<nav class="navbar">
            <a href="javascrip:void()" class="navbar-logo">Ber-<span>Donasikan.</span></a>
            <div class="navbar-a">
                <a href="<?php echo "?p=home"; ?>">Home</a>
                <a href="<?php echo "?p=katmodul"; ?>">Kategori Bantuan</a>
                <a href="<?php echo "?p=modul"; ?>">Open Donasi</a>
                <a href="<?php echo "?p=logout"; ?>">Logout</a>
            </div>
            <div class="navbar-extra">
                <a href="javascrip:void()" id="hamburger-menu"><i data-feather="menu"></i></a>
            </div>
        </nav>
        <!-- Navbar Done-->


<div class="grid">
        <?php
		if($_GET["p"] == "logout"){
		include "logout.php";
		}else if($_GET["p"] == "login"){
		include "login.php";
        }else if($_GET["p"] == "konten"){
        include "konten.php";
        }else if($_GET["p"] == "kontenadd"){
        include "kontenadd.php";
        }else if($_GET["p"] == "kontenedit"){
        include "kontenedit.php";
        }else if($_GET["p"] == "kontendel"){
        include "kontendel.php";
        }else if($_GET["p"] == "katmodul"){
        include "katmodul.php";
        }else if($_GET["p"] == "katmoduladd"){
        include "katmoduladd.php";
        }else if($_GET["p"] == "katmoduledit"){
        include "katmoduledit.php";
        }else if($_GET["p"] == "katmoduldel"){
        include "katmoduldel.php";
        }else if($_GET["p"] == "modul"){
        include "modul.php";
        }else if($_GET["p"] == "moduladd"){
        include "moduladd.php";
        }else if($_GET["p"] == "moduledit"){
        include "moduledit.php";
        }else if($_GET["p"] == "moduldel"){
        include "moduldel.php";
        }else if($_GET["p"] == "moduldetail"){
        include "moduldetail.php";
        }else{
		include "home.php";
		}
        ?>
</div>
        <!-- Footer -->
        <!--leggg-->
        <!-- Footer Done-->
        <!-- Icons -->
        <script>
            feather.replace()
        </script>  

        <!-- JavaScript -->
        <script src="js/script.js"></script>

<?php
	}else{
		include "login.php";
	}
?>
</body>
</html>