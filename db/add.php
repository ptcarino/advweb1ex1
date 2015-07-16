<?php

include '../include/connect.php';

$conn = Connect();

$emp_fname = $_POST['emp_fname'];
$emp_lname = $_POST['emp_lname'];
$emp_mname = $_POST['emp_mname'];
$emp_gender = $_POST['emp_gender'];
$job = $_POST['job'];

$insert = $conn->prepare("INSERT INTO EMPLOYEE (emp_firstname, emp_lastname, emp_middlename, emp_gender, JOB_TITLE_job_id) VALUES ('$emp_fname', '$emp_lname', '$emp_mname', '$emp_gender', '$job')");
$insert->execute();

if(!$insert->error)
{
	echo "Inserted successfully";
	echo "Returning to previous page in 5 seconds";
	header('refresh: 5; url=../addemp.php');
}
else
{
	echo "Failed to add employee data";
	echo "Returning to previous page in 5 seconds";
	header('refresh: 5; url=../addemp.php');
}

$conn->close();

?>