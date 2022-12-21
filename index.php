<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employees</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>
<?php
$html = "<table class='table table-dark' style='width:50%;margin:100px auto'>
<thead>
  <tr>
    <th scope='col'>Id</th>
    <th scope='col'>Name</th>
    <th scope='col'>Address</th>
    <th scope='col'>Salery</th>
    <th scope='col'>created_at</th>
    <th scope='col'>updated_at</th>
    <th scope='col'>Action</th>
  </tr>
</thead>
<tbody>";

echo "<div><h1>Employees Details</h1> <button type='button'><a href='./add.php'>Add New Employee</a></button></div>";
$sql = "SELECT * FROM employees_data";
$data= $conn->query($sql);
foreach($data as $elemant) {

  $html .= "<tr><th scope='row'>$elemant[id]</th>";
  $html .= "<td>$elemant[Name]</td>";
  $html .= "<td>$elemant[Address]</td>";
  $html .= "<td>$elemant[Salary]</td>";
  $html .= "<td>$elemant[created_at]</td>";
  $html .= "<td>$elemant[updated_at]</td>";
  $html .= "<td><form method='POST'><button type='submit' name = '$elemant[id]'>delete</button><hr></form><form method='GET' action='./edite.php'><button type='submit' name = '$elemant[id]'>edite</button><hr></form></td></tr>";
}
$html .="</tbody></table>";
echo $html;
if ($_SERVER["REQUEST_METHOD"] === "POST"){
$del_num = (array_keys($_POST,NULL)[0]);
$sql ="DELETE FROM employees_data WHERE id = $del_num";
$conn->query($sql);
}
