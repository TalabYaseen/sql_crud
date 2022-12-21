<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employees</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<?php
require_once('config.php');
$del_num = (array_keys($_GET,NULL)[0]);
$sql = "SELECT `Name`, `Address`, `Salary` FROM employees_data WHERE id = $del_num";
$elemant = $conn->query($sql);
$html = "<table class='table table-dark' style='width:50%;margin:100px auto'>
<thead>
  <tr>
    <th scope='col'>Name</th>
    <th scope='col'>Address</th>
    <th scope='col'>Salery</th>
  </tr>
</thead>
<tbody>";
foreach($elemant as $ele){
$html .= "<tr><td><input type='text' value='$ele[Name]' name='new_name' ></td>";
$html .= "<td><input type='text' value='$ele[Address]' name='new_Address'></td>";
$html .= "<td><input type='text' value='$ele[Salary]' name='new_Salary'></td></tr>";}
$html .="</tbody></table>";
echo "<form method='POST'>";
echo $html;
echo "<button type='submit' style='margin-left:50%;'>save</button><hr></form>";
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $sql ="UPDATE employees_data SET `Name`='$_POST[new_name]',`Address`='$_POST[new_Address]',`Salary`='$_POST[new_Salary]' WHERE id = $del_num";
    $conn->query($sql);

    }


