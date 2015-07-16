<?php

include '../include/connect.php';

$conn = Connect();

$emp_id = $_POST['emp'];

$query = $conn->query("DELETE FROM EMPLOYEE WHERE emp_id = $emp_id");

if(!$query->error)
{
	echo "Deleted successfully";
	header('refresh: 5; url=../deleteemp.php');
}
else
{
	echo "Failed to delete employee data";
	header('refresh: 5; url=../deleteemp.php');
}

$conn->close();

?>