<?php 


DEFINE ('DB_USER', 'ahmed');
DEFINE ('DB_PASSWORD', '123');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'ahmed_13106');


	session_start();
	$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	// initialize variable
	$cNAME = "";
	$cID = "";
	$cContactNo = "";
    $cAddress = "";
	$cCNIC = "";
	$cPayment = "";
	
	$update = false;

	if (isset($_POST['save'])) {

		$cNAME = $_POST['cNAME'];
		$cID = $_POST['cID'];
        $cContactNo = $_POST['cContactNo'];
		$cAddress = $_POST['cAddress'];
		$cCNIC = $_POST['cCNIC'];
		$cPayment = $_POST['cPayment'];




		mysqli_query($db, "INSERT INTO customer_13106 VALUES ('$cID', '$cNAME', '$cContactNo', '$cAddress', '$cCNIC', '$cPayment')"); 
                
		$_SESSION['message'] = "SAVED!"; 
		header('location: index1.php');
	}

	if (isset($_POST['update'])) {
		$cNAME = $_POST['cNAME'];
		$cID = $_POST['cID'];
        $cContactNo = $_POST['cContactNo'];
		$cAddress = $_POST['cAddress'];
		$cCNIC = $_POST['cCNIC'];
        $cPayment = $_POST['cPayment'];

		mysqli_query($db, "UPDATE customer_13106 SET cID = '$cID', cNAME = '$cNAME', cContactNo = '$cContactNo', cAddress = '$cAddress', cCNIC = '$cCNIC', cPayment = '$cPayment' WHERE cID='$cID'");
		$_SESSION['message'] = "UPDATED"; 
		header('location: index1.php');
	}

if (isset($_GET['del'])) {
	$customerid = $_GET['del'];
	mysqli_query($db, "DELETE FROM customer_13106 WHERE cID='$cID'");
	$_SESSION['message'] = "DELETED!"; 
	header('location: index1.php');
}


	$results = mysqli_query($db, "SELECT * FROM customer_13106");


?>