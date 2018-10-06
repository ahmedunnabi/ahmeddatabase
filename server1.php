<?php 


DEFINE ('DB_USER', 'ahmed');
DEFINE ('DB_PASSWORD', '123');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'ahmed_13106');


	session_start();
	$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	// initialize variable
	$pCode = "";
	$pBrand = "";
        $pType = "";
	$pShade = "";
	$pSize = "";
	$pPrice = "";
	
	$update = false;

	if (isset($_POST['save'])) {

		$pCode = $_POST['pCode'];
		$pBrand = $_POST['pBrand'];
		$pType = $_POST['pType'];
        $pShade = $_POST['pShade'];
		$pSize = $_POST['pSize'];
		$pPrice = $_POST['pPrice'];




		mysqli_query($db, "INSERT INTO product_13106 VALUES ('$pCode', '$pBrand', '$pType', '$pShade','$pSize','$pPrice')"); 
                
		$_SESSION['message'] = "SAVED!"; 
		header('location: product13106.php');
	}

	if (isset($_POST['update'])) {
		$pCode = $_POST['pCode'];
		$pBrand = $_POST['pBrand'];
		$pType = $_POST['pType'];
        $pShade = $_POST['pShade'];
		$pSize= $_POST['pSize'];
		$pPrice = $_POST['pPrice'];
		mysqli_query($db, "UPDATE product SET pCode = '$pCode', pBrand = '$pBrand', pType = '$pType', pShade = '$pShade',pSize = '$pSize',pPrice = '$pPrice', WHERE pCode='$pCode'");
		$_SESSION['message'] = "UPDATED"; 
		header('location: product13106.php');
	}

if (isset($_GET['del'])) {
	$customerid = $_GET['del'];
	mysqli_query($db, "DELETE FROM product WHERE pCode='$pCode'");
	$_SESSION['message'] = "DELETED!"; 
	header('location: product13106.php');
}


	$results = mysqli_query($db, "SELECT * FROM product_13106");


?>