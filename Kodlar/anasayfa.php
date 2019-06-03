






<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
 <title>Veritabanı Tablosu</title>
 <style>
  table {
border-collapse: collapse;
width: 100%;
}
 
td, th {
border: 1px solid #ddd;
padding: 7px;
}
 
tr:nth-child(even){background-color: #f2f2f2;}
 
tr:hover {
background-color: #5F9EA0;
color:#fff;
}
 
th {
padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #5F9EA0;
color: white;
}
 </style>
</head>
<body>
 <table>
 <tr>
  <th>ID</th> 
  <th>İLÇE</th> 
  <th>NÜFUS</th>
  <th>KAPASİTE</th>
  <th>DERECE</th>
  <th>KATSAYI</th>
  <th>ENDEKS</th>
 </tr>
 <?php 
$conn = new mysqli("localhost", "root", "", "ilknak");
$conn->set_charset("utf8");

  if ($conn->connect_error) {
   die("Bağlanılamadı");
  } 
  
  $sql = "SELECT ilceler.id,ilceler.ad,ilceler.nufus,ilceler.kapasite,risk.derece,risk.katsayi,endeks.endeks FROM ilceler,risk,endeks WHERE ilceler.id=risk.id AND ilceler.id=endeks.id ORDER BY ilceler.ad";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["ad"] . "</td><td>". $row["nufus"] . "</td><td>". $row["kapasite"] . "</td><td>". $row["derece"] . "</td><td>". $row["katsayi"] . "</td><td>"
. $row["endeks"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }

$conn->close();

?>
</table>
</body>
</html>