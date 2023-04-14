<?php
	if(isset($_COOKIE["login"])){
       $conn = mysqli_connect("localhost","root","","university");								
		$email=mysqli_real_escape_string($conn,$_COOKIE["login"]);
		if(isset($_REQUEST["np"]) && isset($_REQUEST["rp"])){
			
			$np=mysqli_real_escape_string($conn,$_REQUEST["np"]);
			$rp=mysqli_real_escape_string($conn,$_REQUEST["rp"]);
			if($np==$rp){
			   if(mysqli_query($conn,"update ecb set password='$np' where email='$email'")>0){
					echo "success";
			   }		   
			}
		}
	}
?>