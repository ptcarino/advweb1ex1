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
    <p class="codecontainer">
    <table style = "width:50%" border = 1>
        <tr>
            <td><b>First Name</b></td>
            <td><b>Last Name</b></td>
            <td><b>Middle Name</b></td>
            <td><b>Gender</b></td>
            <td><b>Job Title</b></td>
        </tr>

        <?php include 'db/select_emp.php'; ?>

    </table>
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