<?php
	if(isset($_COOKIE["login"])){
       $conn = mysqli_connect("localhost","root","","university");				
		$email=mysqli_real_escape_string($conn,$_COOKIE["login"]);
		if(isset($_REQUEST["cp"])){
			$cp=mysqli_real_escape_string($conn,$_REQUEST["cp"]);
			$rs=mysqli_query($conn,"select * from ecb where email='$email'");
			if($r=mysqli_fetch_array($rs)){
			   if($r["password"]==$cp){
                  echo "success";
               }				   
			}
			
		}
		
	}
?>