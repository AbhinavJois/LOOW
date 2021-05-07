<html>
<head>
<title>studentleaves</title>
</head>
<body>
<?php
$conn=mysqli_connect("localhost","root","","loow");
if ($conn->connect_error) {
    die("Connection failed");
}
$sql = "SELECT  date,name,phno,landmark,reason,expiry,type FROM form";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
 while($row = $result->fetch_assoc()) 
 {
        echo "<br> id: ".$row['date']."      from: ". $row['name']. " TO: ".$row['phno'] . "REASON: ". $row['landmark']  . "ATTENDENCE:".$row['reason']. "REASON: ". $row['expiry']. "REASON: ". $row['type']."<br>";
    }
        }
 else 
 {
    echo "0 results";
}

$conn->close();
?>
</body>
</html>