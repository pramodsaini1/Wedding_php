<?php
       if(isset($_REQUEST["name"])&&isset($_REQUEST["email"])&&isset($_REQUEST["mobile"])&&isset($_REQUEST["subject"])&&isset($_REQUEST["message"])){
		   
		   $name = $_REQUEST["name"] ;
		   	$email = $_REQUEST["email"] ;
		   $mobile = $_REQUEST["mobile"] ;
		   $subject = $_REQUEST["subject"] ;
		   $message = $_REQUEST["message"] ;
		   $sn = 0 ;
			$conn  = mysqli_connect("localhost","root","","university") ;
			$rs  = mysqli_query($conn,"select MAX(sn) from contact") ;
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
			if(mysqli_query($conn,"insert into contact values($sn,'$code','$name','$email', $mobile,'$subject','$message')")>0){
				echo "success" ;
			}
		    else{
				echo "again" ;
 			}
			
	  }
		   

   
?>