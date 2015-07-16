<?php

include 'include/connect.php';

$conn = Connect();

$result = $conn->query("SELECT * FROM EMPLOYEE JOIN JOB_TITLE ON job_id = JOB_TITLE_job_id");

if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		echo "<tr><td>" . $row['emp_firstname'] . "</td><td>" . $row['emp_lastname'] . "</td><td>" . $row['emp_middlename'] . "</td><td>" . $row['emp_gender'] . "</td><td>" . $row['job_title'] . "</td></tr>";
	}
}

$conn->close();
?>