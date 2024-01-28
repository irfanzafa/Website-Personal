<?php
	session_start();
	session_destroy();
	echo "<p><div align='center'>Anda Sudah Logout, Kami Tunggu Kunjungan Anda Kembali</div><p>";
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=home'>";
?>