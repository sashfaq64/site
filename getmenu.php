

<?php
//**********CREATE CONNECTION**********

        $conn = mysqli_connect("mysql.cs.uky.edu", "saas226", "1273", "saas226");
        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "SELECT item, description, price FROM Menu WHERE category = '" . htmlspecialchars($_POST['id']) . "'";
	$result = $conn -> query($sql);


	$sqlUpdate = "UPDATE access SET numAcc = numAcc + 1 WHERE category = '" . htmlspecialchars($_POST['id']) . "'";

        $conn->query($sqlUpdate);


	$access = "SELECT category, numAcc FROM access WHERE category=" . "'" . htmlspecialchars($_POST['id']) . "'";

        $resultAccess = mysqli_query($conn, $access);

        $rowAcc = mysqli_fetch_assoc($resultAccess);



	
	$data = array();
	$data['category'] = htmlspecialchars($_POST['id']);
	$data['accesses'] = $rowAcc["numAcc"];
	
	$sub = array();
	while($row =mysqli_fetch_array($result))
	{
		$temp = array();
		$temp["item"] = $row["item"];
		$temp["description"] = $row["description"];
		$temp["price"] = $row["price"];
		array_push($sub,$temp);
	}

	$data['details'] = $sub;
	

	
	echo json_encode($data);

?>
	

