<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <style>
        #head {
        border: 5px black solid;
         color:white;
         text-align: center;
         font: xx-large;
      font-style: normal;
      background: black;
    
     }
     body{
         background-image: url('demo1.jpg');
        background-color: black;
        color: black;
         opacity: 1;
         background-repeat: no-repeat;
         background-attachment: fixed;
background-size: cover;
     }
        </style>
<body> 
<h1 id="head"><i class='fas fa-bicycle' style='font-size:36px'> L&nbsp; &nbsp; O&nbsp; &nbsp;  O&nbsp; &nbsp;  W&nbsp; &nbsp;
     
     <p >LEFTOVERS &nbsp;&nbsp; ON&nbsp; &nbsp; &nbsp; &nbsp;WHEELS</p>
</i><br>
    </h1>
<?php
$sname=$_POST["sname"];
$cname=$_POST["cname"];
$cno=$_POST["cno"];

$dbc=mysqli_connect("localhost","root","","loow");
if(!$dbc){
    echo"db is not connected";
    die("coudn't connect".mysql_error());
    
}
else{
   // echo"familyjoliki";
}
$write=mysqli_query($dbc,"INSERT INTO dry VALUES ('$sname','$cname','$cno')");
if(isset($write))
{
echo"<h2>Updated in delivery report</h2>";
}
else{
    echo"Unsuccessful";
}
?>
</body>
</html>