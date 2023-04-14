<?php
if(empty($_POST["fname"]) ||empty($_POST["lname"]) || empty($_POST["email"]) ||	empty($_POST["pass"]) ||empty($_POST["gender"]) ||	empty($_POST["caste"]) ||empty($_POST["religion"]) || empty($_POST["state"]) ||empty($_POST["country"]) ||empty($_POST["dob"])){
	 header("location:index.php?empty=1");
}
else{
			$fname = $_POST["fname"] ;
			$lname = $_POST["lname"] ;
			$email = $_POST["email"] ;
			$pass  = $_POST["pass"] ;
			$gender = $_POST["gender"] ;
			$caste   = $_POST["caste"] ;
			$religion  = $_POST["religion"] ;
			$state = $_POST["state"] ;
			$country = $_POST["country"] ;
			$dob     = $_POST["dob"] ;
			$sn = 0 ;
			$conn  = mysqli_connect("localhost","root","","university") ;
			$rs  = mysqli_query($conn,"select MAX(sn) from template") ;
			if($r = mysqli_fetch_array($rs)){
				$sn = $r[0] ;
			}
			$sn++ ;
			
			$code = " " ;
			$a = array() ;
			for($i = 'A';$i<='Z';$i++){
				  array_push($a,$i) ;
				    if($i=='Z') 
					   break ;
			}
			for($i = 'a';$i<='z';$i++){
				  array_push($a,$i) ;
				    if($i=='z') 
					   break ;
			}
			for($i = 0;$i<=9;$i++){
				  array_push($a,$i) ;
			}
			$b = array_rand($a,6) ;
			for($i=0;$i<sizeof($b);$i++){
				$code = $code.$a[$b[$i]] ;
			}
			$code = $code."_".$sn ;
		    $target ="profile/" . $code.".jpg" ;
			if(move_uploaded_file($_FILES['photo']['tmp_name'],$target)){
				  if(mysqli_query($conn,"insert into template values($sn,'$code','$fname','$lname','$email','$pass','$gender','$caste','$religion','$state','$country','$dob')")>0){
 					 header("location:index.php?record_inserted=1");
				 }
				else{
					  header("location:index.php?again=1");
				}
			}
			else{
				echo "sorry there  was a problem uploading your file." ;
			  header("location:index.php?err=1") ;
				
			}
		    
			
		}
		
		
?>