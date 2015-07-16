<?php
//For <select> HTML tag

function employeeList()
{
	include 'connect.php';

	$conn = Connect();
	$list = $conn->query("SELECT * FROM EMPLOYEE JOIN JOB_TITLE ON job_id = JOB_TITLE_job_id JOIN DEPARTMENT ON dept_id = DEPARTMENT_dept_id");
	while($row = $list->fetch_assoc())
		echo "<option value='" . $row['emp_id'] . "'>" . $row['emp_lastname'] . ", " . $row['emp_firstname'] . " - " . $row['job_title'] . ", " . $row['dept_name'] . "</option>";

	$conn->close();
}

function jobList()
{
	include 'connect.php';
	
	$conn = Connect();
	$list = $conn->query("SELECT * FROM JOB_TITLE JOIN DEPARTMENT ON dept_id = DEPARTMENT_dept_id");
	while($row = $list->fetch_assoc())
		echo "<option value='" . $row['job_id'] . "'>" . $row['job_title'] . " - " . $row['dept_name'] . "</option>";
	
	$conn->close();
}
?>