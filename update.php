<?php
           if(!isset($_COOKIE["login"])){
			   header("location:login.php");
		   }
		   else{
					
						  $email = $_COOKIE["login"] ;
						  $conn = mysqli_connect("localhost","root","","university") ;
						  $rs=mysqli_query($conn,"select * from template where email='$email'");
						  if($r=mysqli_fetch_array($rs)){
					if(isset($_REQUEST["id"])&& isset($_REQUEST["record"]) ){
								  $id = $_REQUEST["id"] ;
								   $record =$_REQUEST["record"] ;
									if(mysqli_query($conn,"update template  set $id='$record' where email = '$email'")>0){
									   echo "success";
								   }
								   else{ 
										 echo "Try again";
								   }
						   }
					  }
		   }
					 
		 
		
?>