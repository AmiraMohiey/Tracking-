<?php
//session_start();

echo '<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Vehicle Tracking Systtem</title>
	<link rel="stylesheet" href="style.css" type="text/css">
	</head>
    <body>
	  <div>
          <header>
           </header>  		  
     	   <div class="container">
		   
            <div class="contents logincont">
                <div class="regiter" class="text-right">
                    <div id="container">
			                   		
                      <form name="registerform" onsubmit="submitfn()"  action="signin.php" method="post" >
			                  
                       <h1>  تسجيل  الدخول</h1>
                                 
				       <input type="text" class="inputs" id="email"     name="email" placeholder="رجاء ادخال الأسم البريد الالكتروني" /><br><br></div>
                       <input type="password" class="inputs" id="pwd" name="pwd" placeholder="رجاء ادخال الأسم كلمة المرور" /><br><br></div>
                       <div class="line submit"><input type="submit" value="تسجيل" name="submit" /></div>
                      </form>
                    </div>
                </div>					
		     </div>
           </div> 
	      
		</div>
	</body>
</html>';

define('DB_NAME','vehiclesys');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');
    
    
$link=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
$db = new mysqli(DB_HOST,DB_USER,DB_PASSWORD);
if(!$link){die('could not connect :'.mysqli_error($link));}
     
if(!mysqli_select_db($link,DB_NAME)){die('can\'t use '.DB_NAME.':'.mysqli_error($link));}
    
if(isset($_POST['submit']))
{
	
      
     
	  $v3=$_POST['pwd'];
      $v4=$_POST['email'];
	if($v3==""||$v3==null || $v4==""||$v4==null ){echo"Fields value can't be empty";}
    else{
		 
  $sql="select ID from passenger where  email='$v4' AND password='$v3' ";
  $result  = mysqli_query($link,$sql);   
		
  
  if(!mysqli_query($link,$sql))
{
die('Error :'.mysqli_error($link));
}
  	

  
//$dbc =  mysqli_query($link,$sql);
//$query = mysqli_query( $link,"select ID from passenger where firstname='$v1' AND lastname='$v2' AND password='$v3' ");
//$num = mysqli_num_rows($query);
/* $query = $dbh->prepare("select ID from passenger where  email='$v4' AND password='$v3' ");
$query->execute();
$result = $query->fetchAll(); */
$res = mysqli_query($link, "select ID from passenger where  email='$v4' AND password='$v3'"    );            	
if (mysqli_num_rows($res)) {
   // printf("Select returned %d rows.\n", mysqli_num_rows($res));
    // echo'success';
   
    mysqli_free_result($res);
    header("Location:index.php"); 
	
}


           /*  if($db->query("select ID from passenger where  email='$v4' AND password='$v3' "))//if($row = mysqli_fetch_array($result))//if ( !$result = $db->query($sql))
			{    echo'success';
 			   /*  $row=mysqli_fetch_array($query,MYSQL_NUM);
				$_SESSION['email']=$v4;
				$_SESSION['pwd']=$row['pwd']; 
                ob_start();				
               header("Location:profile.php");  
				exit(); 
			}    */
               
          else  
              {  
		        echo "<footer>
		  <p>خطأ في كلمة المرور أو البريد الالكتروني</p>
		  </footer>";
              }     
                       
// else echo($db->error);
//ob_end_flush();
$db->close();
}
}

echo'<footer>
		  <p>جميع الحقوق محفوظة للموقع   </p>
		  </footer>';
?>