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
    <form action="db/add.php" method="POST" class="codecontainer">
        First Name:<br>
        <input type="text" name="emp_fname" required><br>
        Last Name:<br>
        <input type="text" name="emp_lname" required><br>
        Middle Name:<br>
        <input type="text" name="emp_mname"><br>
        Gender:<br>
        <input type="text" name="emp_gender" required><br>
        Job Title:<br>
        <select name="job" required>
            <option value="">Select Job</option>
            <?php include 'include/lists.php'; $jobs = jobList(); ?>
        </select>
        <br><br>
        <input type="submit" value="Submit">
    </form>
    </p>
</div>
<div id="footer">
    <p>
        ©2015 Patrick Cariño | Asia Pacific College | BSCSIT - CNE
    </p>
</div>

<br><br>

<body>
</html>