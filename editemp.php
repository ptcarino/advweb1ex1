<?php
    include 'include/connect.php';

    $conn = Connect();

    if(isset($_GET['emp']))
        $emp_id = $_GET['emp'];
    else
        $emp_id = null;

    $list = $conn->query("SELECT * FROM EMPLOYEE JOIN JOB_TITLE ON job_id = JOB_TITLE_job_id JOIN DEPARTMENT ON dept_id = DEPARTMENT_dept_id WHERE emp_id = $emp_id");
    while($row = $list->fetch_assoc()) {
?>

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
    <p>
    <form action="db/editemp_iframe.php" method="POST" class="codecontainer">
        <select name="emp">
            <option value="">Select Employee</option>
            <?php include 'include/lists.php'; $list = employeeList(); ?>
        </select>&nbsp;
        <input type="submit" value="Go">
    </form>
    </p>
    <form action="db/edit.php" method="POST">
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
</div>
<div id="footer">
    <p>
        ©2015 Patrick Cariño | Asia Pacific College | BSCSIT - CNE
    </p>
</div>

<body>
</html>