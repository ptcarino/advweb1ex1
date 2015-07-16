<html>
<head>
    <title>
        Web Technologies 1 - Lab Ex1
    </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div id="header">
    <p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="index.php">Home</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="listemp.php">List Employees</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="addemp.php">Add Employee</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="editemp.php">Edit Employee</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="deleteemp.php">Delete Employee</a>
    </p>
</div>
<div id="content">
    <p class="codecontainer">
        <b>Database Connection (in a separate file)</b><br>
    <table border=1 style="width:50%" class="codes">
        <tr>
            <td>
<pre>
&lt;?php
function Connect()
{
	$host = "localhost";
	$dbname = "ADVWEB_WEBAPP";
	$uname = "root";
	$passwd = "";
	
	$conn = new mysqli($host, $uname, $passwd, $dbname);
	if($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}
	
	return $conn;
}
?&gt;
</pre>
            </td>
        </tr>
    </table>
    </p>
    <p class="codecontainer">
        <b>Adding Records</b><br>
    <table border=1 style="width:50%" class="codes">
        <tr>
            <td>
<pre>
&lt;?php
include '../include/connect.php';

$conn = Connect();

$emp_fname = $_POST['emp_fname'];
$emp_lname = $_POST['emp_lname'];
$emp_mname = $_POST['emp_mname'];
$emp_gender = $_POST['emp_gender'];
$job = $_POST['job'];

$insert = $conn->prepare("
		INSERT INTO 
			EMPLOYEE (
				emp_firstname, 
				emp_lastname, 
				emp_middlename, 
				emp_gender, 
				JOB_TITLE_job_id) 
			VALUES (
				'$emp_fname', 
				'$emp_lname', 
				'$emp_mname', 
				'$emp_gender', 
				'$job')
				");
$insert->execute();

if(!$insert->error)
{
	echo "Inserted successfully";
	echo "Returning to previous page in 5 seconds"
	header('refresh: 5; url=../addemp.php');
}
else
{
	echo "Failed to add employee data";
	echo "Returning to previous page in 5 seconds"
	header('refresh: 5; url=../addemp.php');
}

$conn->close();
?&gt;
</pre>
            </td>
        </tr>
    </table>
    </p>
    <p class="codecontainer">
        <b>Editing/Updating Records</b>
    <table border=1 style="width:50%" class="codes">
        <tr>
            <td>
<pre>
&lt;?php
include '../include/connect.php';

$conn = Connect();

$emp_id = $_POST['emp_id'];
$emp_fname = $_POST['emp_fname'];
$emp_lname = $_POST['emp_lname'];
$emp_mname = $_POST['emp_mname'];
$emp_gender = $_POST['emp_gender'];
$job = $_POST['job'];

$edit = $conn->query("
		UPDATE 
			EMPLOYEE 
		SET 
			emp_firstname = '$emp_fname', 
			emp_lastname = '$emp_lname', 
			emp_middlename = '$emp_mname', 
			emp_gender = '$emp_gender', 
			JOB_TITLE_job_id = '$job' 
		WHERE 
			emp_id = '$emp_id'
		");

if(!$edit->error)
{
	echo "Updated successfully";
}
else
{
	echo "Failed to update employee data";
}

$conn->close();
?&gt;
</pre>
            </td>
        </tr>
    </table>
    </p>
    <p class="codecontainer">
        <b>Deleting Records</b>
    <table border=1 style="width:50%" class="codes">
        <tr>
            <td>
<pre>
&lt;?php
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
?&gt;
</pre>
            </td>
        </tr>
    </table>
    </p>
    <p class="codecontainer">
        <b>Viewing Records</b>
    <table border=1 style="width:50%" class="codes">
        <tr>
            <td>
<pre>
&lt;?php
include 'include/connect.php';

$conn = Connect();

$result = $conn->query("
			SELECT * 
			FROM EMPLOYEE 
			JOIN JOB_TITLE 
			ON job_id = JOB_TITLE_job_id
			");

if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		echo 
			"&lt;tr&gt;&lt;td&gt;" . $row['emp_firstname'] . 
			"&lt;/td&gt;&lt;td&gt;" . $row['emp_lastname'] . 
			"&lt;/td&gt;&lt;td&gt;" . $row['emp_middlename'] . 
			"&lt;/td&gt;&lt;td&gt;" . $row['emp_gender'] . 
			"&lt;/td&gt;&lt;td&gt;" . $row['job_title'] . 
			"&lt;/td&gt;&lt;/tr&gt;";
	}
}

$conn->close();
?&gt;
</pre>
            </td>
        </tr>
    </table>
    </p>
</div>
<div id="footer">
    <p>
        ©2015 Patrick Cariño | Asia Pacific College | BSCSIT - CNE
    </p>
</div>

<br><br>

</body>
</html>