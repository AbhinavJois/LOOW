<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery report</title>
</head>
<body>
    <?php
     $conn=mysqli_connect("localhost","root","","loow");
     if ($conn->connect_error) {
         die("Connection failed");
     }
     $sql = "SELECT * from dry";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) 
     {
      while($row = $result->fetch_assoc()) 
      {
          echo "<hr>";
echo "<br>Supplier Name:&nbsp".$row['sname']." &nbsp;&nbsp;&nbsp;Coustomer name:&nbsp". $row['cname']. " &nbsp;&nbsp;&nbsp; Coustomer Phone Number:&nbsp ".$row['cno']."<br>";
             echo"<hr>";
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