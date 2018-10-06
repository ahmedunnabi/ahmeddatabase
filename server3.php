<?php 


DEFINE ('DB_USER', 'ahmed');
DEFINE ('DB_PASSWORD', '123');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'ahmed_13106');


	session_start();
	$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	// initialize variable
	$sID = "";
	$sName= "";
    $sContactNo = "";
	$pplAssigned = "";
	
	$update = false;

	if (isset($_POST['save'])) {

		$sID = $_POST['sID'];
		$sName= $_POST['sName'];
		$sContactNo = $_POST['sContactNo'];
        $pplAssigned = $_POST['pplAssigned'];




		mysqli_query($db, "INSERT INTO sales_13106 VALUES ('$sID', '$sName', '$sContactNo', '$pplAssigned')"); 
                
		$_SESSION['message'] = "SAVED!"; 
		header('location: sales13106.php');
	}

	if (isset($_POST['update'])) {
		$sID = $_POST['sID'];
		$sName = $_POST['sName'];
		$sContactNo = $_POST['sContactNo'];
        $pplAssigned = $_POST['pplAssigned'];
		
		mysqli_query($db, "UPDATE sales_13106 SET sID = '$sID', sName = '$sName', sContactNo = '$sContactNo', pplAssigned = '$pplAssigned' WHERE sID='$sID'");
		$_SESSION['message'] = "UPDATED"; 
		header('location: sales13106.php');
	}

if (isset($_GET['del'])) {
	$customerid = $_GET['del'];
	mysqli_query($db, "DELETE FROM sales_13106 WHERE sID='$sID'");
	$_SESSION['message'] = "DELETED!"; 
	header('location: sales13106.php');
}


	$results = mysqli_query($db, "SELECT * FROM sales_13106");


?>