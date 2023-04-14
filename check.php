<?php
         if(isset($_REQUEST["email"]) && isset($_REQUEST["pass"])){
			 $conn = mysqli_connect("localhost","root","","university");
			 $email = $_REQUEST["email"] ;
			 $pass  = $_REQUEST["pass"] ;
			 $rs = mysqli_query($conn,"select * from template where email='$email'");
			 if($r=mysqli_fetch_array($rs)){
				 if($r["password"]==$pass){
					 setcookie("login",$email,time()+3600);
					 echo "Cookie Created" ;
				 }
				 else{
					  echo "Mismatch Password" ;
				 }
			 }
			 else{
				  echo "Invalid email-id" ;
			 }
		 }
		
?>