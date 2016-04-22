
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<?php

error_reporting(E_ALL ^ E_DEPRECATED &~E_NOTICE);
require ('config.php');
ini_set('default_charset','utf-8');
mysql_set_charset('utf8');
header('Content-type: text/html; charset=utf-8');

$sql = "SELECT DISTINCT busstop FROM `stops` ORDER BY busstop ";
        $query = mysql_query($sql);
$sql2 = "SELECT busstop FROM `stops` ORDER BY busstop ";
        $query2 = mysql_query($sql);
echo '<html lang="ar">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >

<title>New Page 4</title>
</head>

<body ackground="grey.jpg">
<form  action = "index.php" method="POST" >
<div class="row">
    <div class="row">
        <div class="container-fluid">
            <div class="container-fluid">
            <img src="images/bus.jpg" alt="..." class="img-responsive" >
             
            </div>
        </div>
    </div>
</div>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">arkb eh?</a></li>
    
      <li><a href="#">our services</a></li> 
        <li><a href="#">about us</a></li> 
        <li><a href="#">Arabic</a></li> 
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
       </ul>
  </div>
</nav>

<div class="container">
<div class="pull-right">
  <div class="page-header" class="text-right">
 
    <h1> دليل المواصلات</h1>      
  </div>
   </div>
</div>
</body>




	<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp
        &nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbspfrom : 
	<select size="1" name="D1"';
echo "<option>--</option> ";
echo "<option> </option> ";
 while($row = mysql_fetch_array($query))
{ 
    $x= $row['busstop'];
    echo "<option>$x</option> " ;}        
echo '</select></p> <div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
	<p>To &nbsp;:&nbsp;
   
	<select size="1" name="D2"';
echo "<option>--</option> ";
echo "<option> </option> ";
        while($row2 = mysql_fetch_array($query2))
{ 
$x2= $row2['busstop'];
    echo "<option>$x2</option> ";} 
    echo' </select></p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </p>
</form>
 <button name="submit" class="btn btn-info" type="submit" id="submit">اركب ايه؟   </button>
</body>

</html>';

/* @var $from type */














if (isset($_POST['submit'])) 
{ 
  $from = filter_input(INPUT_POST, 'D1');
$to = filter_input(INPUT_POST, 'D2');


 

    
             
                   
     
  $sql3=" SELECT * FROM `stops` WHERE busstop = '$from' ";
     $query3 = mysql_query($sql3);
  
   if($query3==false){echo 'error false query';}
while( $row3= mysql_fetch_array($query3)){
$busno= $row3['busno'];

  $sql4=" SELECT * FROM `stops` WHERE busno = '$busno' AND busstop = '$to'";
     $query4 = mysql_query($sql4);
if($query4==false){echo 'error false query';}
while( $row4= mysql_fetch_array($query4)){$busno4= $row4['busno'];
if($from!==$to){
echo' ممكن تركب  ', $busno4 , ' عشان تروح من  ',$from , ' الى ',$to;} 


}}


                         
                   
  
    
    

}

?>
