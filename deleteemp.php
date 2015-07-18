<html>
<head>
	<meta charset="UTF-8">
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
    <form action="db/delete.php" method="POST" class="codecontainer">
        <select name="emp">
            <option value="">Select Employee</option>
            <?php include 'include/lists.php'; $list = employeeList(); ?>
        </select><br><br>
        <input type="submit" value="Delete">
    </form>
    </p>
</div>
<div id="footer">
    <p>
        ©2015 Patrick Cariño | Asia Pacific College | BSCSIT - CNE
    </p>
</div>

<body>
</html>