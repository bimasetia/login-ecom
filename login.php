<?php 
include "config/conn.php";
$email = $_POST ['email'];
$password = $_POST ['password'];
if (!ctype_alnum($username) OR !ctype_alnum($password)) {
	echo "<center>LOGIN GAGAL! <br>
	Email atau password anda tidak benar.<br>
	Atau akun anda sedang diblokir...<br>";
	echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
} else {
	$login = mysqli_query($konek, "SELECT * FROM tbl_user WHERE email='$email' AND password='$password'");
	$ketemu = mysqli_num_rows($login);
	$r = mysqli_fetch_array($login);
	if ($ketemu > 0 ) {
		session_start();

		$_SESSION['email'] = $r['email'];
		$_SESSION['passuser'] = $r['password'];
		$_SESSION['firstname'] = $r['firstname'];

		header('location:admin.php');
	} else {
		echo "<center>LOGIN GAGAL! <br>
		Username atau password anda tidak benar.<br>
		Atau akun anda sedang diblokir..<br>";
		echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
	}
}
 ?>