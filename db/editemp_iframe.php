<?php
include '../include/connect.php';

$conn = Connect();
$emp_id = $_POST['emp'];

$view = $conn->query("SELECT * FROM EMPLOYEE JOIN JOB_TITLE ON job_id = JOB_TITLE_job_id JOIN DEPARTMENT ON dept_id = DEPARTMENT_dept_id WHERE emp_id = $emp_id");
while($row = $view->fetch_assoc()) {
?>
<form action="edit.php" method="POST">
	ID:<br>
	<input type="text" name="emp_id" value="<?php echo $row['emp_id']; ?>" required><br>
	First Name:<br>
	<input type="text" name="emp_fname" value="<?php echo $row['emp_firstname']; ?>" required><br>
	Last Name:<br>
	<input type="text" name="emp_lname" value="<?php echo $row['emp_lastname']; ?>" required><br>
	Middle Name:<br>
	<input type="text" name="emp_mname" value="<?php echo $row['emp_middlename']; ?>"><br>
	Gender:<br>
	<input type="text" name="emp_gender" value="<?php echo $row['emp_gender']; ?>" required><br>
	Job Title:<br>
	<select name="job">
		<option value="">Select New Job</option>
		<option value="100">System Administrator - I.T. Department</option>
		<option value="101">Web Developer - I.T. Department</option>
		<option value="102">Chief Executive Officer - Executive Department</option>
	</select><br><br>
	<input type="submit" value="Update">
</form>
<?php } $conn->close(); ?>