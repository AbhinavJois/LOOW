<html>
    <head>
        <title>userform</title>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<style>
    body{
      background-image: url('demo1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
background-size: cover;
text-align: center;
font-size: x-large;
color:black;
}
#head{
   border: 5px black solid;
         color:white;
         background: black;
         text-align: center;
          
      font-style: normal;
}
#qq{
    color:black;
}
</style>

<body>
<h1 id="head"><i class='fas fa-bicycle' style='font-size:36px'> L&nbsp; &nbsp; O&nbsp; &nbsp;  O&nbsp; &nbsp;  W&nbsp; &nbsp;</i>
     
     <p >LEFTOVERS &nbsp;&nbsp; ON&nbsp; &nbsp; &nbsp; &nbsp;WHEELS</p>
 </h1>
 <a id="qq" href="./homepage.html"><i class='fas fa-home' style='font-size:30px'>Home</i></a>
<?php

 $conn=mysqli_connect("localhost","root","","loow");
 if ($conn->connect_error) {
     die("Connection failed");
 }
 $sql = "SELECT date,name,phno,landmark,reason,expiry,type FROM foormm";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) 
 {
  while($row = $result->fetch_assoc()) 
  {
      echo "<hr>";
         echo "<br>  date:".$row['date']." &nbsp;&nbsp;&nbsp;name:". $row['name']. " &nbsp;&nbsp;&nbsp;Phone number  ".$row['phno'] ." &nbsp;&nbsp;&nbsp;Landmark :".$row['landmark']." &nbsp;&nbsp;&nbsp;Reason:".$row['reason']." &nbsp;&nbsp;&nbsp;Expiry:".$row['expiry']."  &nbsp;&nbsp;&nbsp;    Type:".$row['type']."<br>";
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