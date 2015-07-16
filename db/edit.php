<?php

include '../include/connect.php';

$conn = Connect();

$emp_id = $_POST['emp_id'];
$emp_fname = $_POST['emp_fname'];
$emp_lname = $_POST['emp_lname'];
$emp_mname = $_POST['emp_mname'];
$emp_gender = $_POST['emp_gender'];
$job = $_POST['job'];

$edit = $conn->query("UPDATE EMPLOYEE SET emp_firstname = '$emp_fname', emp_lastname = '$emp_lname', emp_middlename = '$emp_mname', emp_gender = '$emp_gender', JOB_TITLE_job_id = '$job' WHERE emp_id = '$emp_id'");

if(!$edit->error)
{
	echo "Updated successfully";
}
else
{
	echo "Failed to update employee data";
}

$conn->close();

?>