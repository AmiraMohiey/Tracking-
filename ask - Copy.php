

<?php

error_reporting(E_ALL ^ E_DEPRECATED &~E_NOTICE);

echo '<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 4</title>
</head>

<body>
<meta charset="UTF-8">
<form  action = "ask.php" method="POST" >
	
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from : <input type="text" name="from" size="20"></p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To :&nbsp;&nbsp; <input type="text" name="to" size="20"></p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Find" name="find"></p>
</form>

</body>

</html>';

/* @var $from type */

if (isset($_POST['find'])) 
{ 
  $from = filter_input(INPUT_POST, 'from');
$to = filter_input(INPUT_POST, 'to');


    if($from ==""){echo' please entre starting point'; }

            if($to ==""){ echo' please entre destination';}
               if($from !="" & $to!=""){
  $sql="SELECT * FROM `bus` WHERE stop2 = '$from'";
  $query =  mysql_query($sql);
  $num = mysql_num_rows($query);
               if($num=== 1){
                   echo 'ok';
                   
               }   else {echo 'query error';}   

                         
                   }
  
    
    

}

?>
