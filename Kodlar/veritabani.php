<!DOCTYPE html>
<html>
<head>
	<title>Veritabanı Tablosu</title>
</head>
<body>
<table>
<tr>
<th>ad</th>
<th>nufus</th>
<th>id</th>
</tr>
<?php
$conn = mysqli_connect("localhost","root","","ilknak");
if ($conn-> connect_error);{
	die("Bağlanılamadı:");
}

$sql ="SELECT * FROM ilceler,risk WHERE ilceler.id=risk.id" ;
$result = $conn-> query($sql);

if ($result-> num_rows >0){
while ($row = $result->fetch_assoc()){
echo "<tr><td>". $row["ad"]."</td></td>". $row["nufus"]."</td><td>". $row["id"]."<td></tr>";
}
echo "</table>";		
}
else {
	echo "0 result";
}
$conn-> close();
?>
</table>
</body>
</html>