<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add employee</title>
</head>
<body>
    <form  action="" method="POST">
        <label>Name</label>
        <input type="text" name="e_name">
        <label>Address</label>
        <input type="text" name="e_address">
        <label>Salary</label>
        <input type="text" name="e_salary">
        <button type="submit">submit</button>
    </form>
</body>
</html>
<?php
require_once('config.php');
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $sql = "INSERT INTO employees_data (Name,Address,Salary) VALUES ('$_POST[e_name]','$_POST[e_address]','$_POST[e_salary]')";
$conn->query($sql);
echo "employee add successfully";
}