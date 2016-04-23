<?php
//include_once("pdo_mysql.php");


        
        

        
    
        
echo '<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Vehicle Tracking Systtem</title>
	<link rel="stylesheet" href="style.css" type="text/css">
	</head>
    <body>
	  <div>
          <header>
		  <!--<img src="images/bus.jpg" alt="..." class="img-responsive" >-->
           </header>  		  
     	   <div class="container">
            <div class="contents logincont">
                <div class="regiter">
                    <div id="container">
                      <form name="registerform" onsubmit="submitfn()"  action="registration.php" method="post" >
			         
                       <h1>  تسجيل حساب جديد</h1>
                       <input type="text" class="inputs" id="firstname" name="firstname"  placeholder="رجاء ادخال الأسم الأول"/><br><br>
				       <input type="text" class="inputs" id="lastname"  name="lastname" placeholder="رجاء ادخال الأسم الأخير"/><br><br></div>
				       <input type="text" class="inputs" id="email"     name="email" placeholder="رجاء ادخال الأسم البريد الالكتروني" /><br><br></div>
                       <input type="password" class="inputs" id="pwd" name="pwd" placeholder="رجاء ادخال الأسم كلمة المرور" /><br><br></div>
                       <div class="line submit"><input type="submit" value="تسجيل" name="submit" /></div>
                      </form>
                    </div>
                </div>					
		     </div>
           </div> 
	      <footer>
		  <p>جميع الحقوق محفوظة للموقع   </p>
		  </footer>
		</div>
	</body>
</html>';

define('DB_NAME','vehiclesys');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');


$link=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
if(!$link){die('could not connect :'.mysqli_error($link));}

if(!mysqli_select_db($link,DB_NAME)){die('can\'t use '.DB_NAME.':'.mysql_error());}
if(isset($_POST['submit']))
{
      $v1=$_POST['firstname'];
      $v2=$_POST['lastname'];
	  $v3=$_POST['pwd'];
      $v4=$_POST['email'];
	if($v1==""||$v1==null||$v2==""||$v2==null||$v3==""||$v3==null || $v4==""||$v4==null ){echo"Fields value can't be empty";}
else{	
$sql="INSERT INTO 	passenger (firstname,password,lastname,email) VALUES ('$v1','$v3','$v2','$v4')  ";
if(!mysqli_query($link,$sql))
{
die('Error :'.mysqli_error($link));
}
 header("Location:index.php"); 

mysqli_close($link);
//header("refresh:0;url=regestration2.html");
}
}
?>