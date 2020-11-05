<?php
session_start();
if (isset($_SESSION["username"]))
{
	unset($_SESSION['username']);
?>
	<script language="javascript">
	document.location="../login.php";
	</script>
<?php 
	
}else{
?>
	<script language="javascript">
	alert("Login Dulu Sebelum Masuk Halaman Ini");
	document.location="../index.php";</script>
<?php 
}
?>