<?php
if(!isset($_COOKIE["login"])){
    header("location:login.php");
  }
else{
	$email= $_COOKIE["login"];
	$conn=mysqli_connect("localhost","root","","university");
	$rs=mysqli_query($conn,"select * from template where email='$email'" ) or die(mysqli_error($conn));
	if($r=mysqli_fetch_array($rs)){
?>
			  			  
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $r["fname"]; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://use.fontawesome.com/09901d9403.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel='stylesheet' href='https://unpkg.com/aos@2.3.0/dist/aos.css'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
       <link rel="stylesheet" href="css/night-mode.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>
   
   
  $(document).on("click","#logout",function(){
      $.post(
           "logout.php",{id:0},function(data){
			    $(".container-fluid").load("login.php");
		   }
      );	  
	  
  });
  $(document).on("click","#inbox",function(){
 			$("#user").load("inbox.php");
			   $("#main-block").css("background-image","");
			
  }); 
 $(document).on("click","#fav",function(){
 			$("#user").load("favorite_profile.php");
			   $("#main-block").css("background-image","");
			
 }); 
 
$(document).on("click",".btn.btn-primary",function(){
			   var code=$(this).attr("id");
			   $.post(
			      "user_profile.php",{code:code},function(data){
					  
					  $("#user").html(data);
				  });
});
$(document).on("click",".btn.btn-dark",function(){
			   var code=$(this).attr("id");
			   $.post(
			      "user_profile.php",{code:code},function(data){
					  $("#user").html(data);
				  });
 });
 $(document).on("click",".w3-button.w3-blue",function(){
	 var code = $(this).attr("rel");
	  $.post(
			      "user_profile.php",{code:code},function(data){
					  $("#user").html(data);
	 });
 });
$(document).on("click",".fa.fa-edit",function(){
 						   var rel=$(this).attr("rel");
						   var pattern=$(this).attr("pattern");
 						   if(pattern=="check"){
								$("#"+rel).prop('disabled', false);
						   }
						   else{
							   var flag=$("#store").attr("prec");
								if(flag=="0"){
										$("#store").attr("prec","1");
									   var dt=$("#d-"+rel).text();
									   $("#d-"+rel).html("<input type='"+pattern+"' id='"+rel+"' value='"+dt+"' class='form-control'>");
									   $("#i-"+rel).attr("class","fa fa-save");
								}
							}
});	
$(document).on("click",".fa.fa-save",function(){
		   var flag=$("#store").attr("prec");
		   
		   if(flag=="1"){
				  var rel=$("#store").attr("pid");
				  var dt=$("#store").attr("prel");
				 
				  $.post(
						   "update.php",{id:rel,record:dt},function(data){
							 
							   if(data=="success"){
									$("#d-"+rel).html(dt);
									$("#i-"+rel).attr("class","fa fa-edit");
									 $("#store").attr("prec","0");
									 $("#store").attr("pid","");
									 $("#store").attr("prel","");
							   }
						   });
						  
		   }
 });
 $(document).on("click","#change_pass",function(){
		  $("#user").load("change_password.php");
 });
 $(document).on("click",".w3-btn.w3-red",function(){
		  var cp=$("#cp").val();
		 $.post(
            "current_pass.php",{cp:cp},function(data){
				if(data=="success"){
				   $("#user").load("match.php");	
				}
			}
         );		 
});
$(document).on("click",".w3-button.w3-purple",function(){
		  var np=$("#np").val();
		  var rp=$("#rp").val();
		 
		  if(np==rp){
			  $.post(
			     "update_pass.php",{np:np,rp:rp},function(data){
					 if(data=="success"){
						  $("#palert").css("background-color","#359F58");
						  
						  $("#palert").html("<h4 style='color:white'>Password Changed</h4>");
						  $("#np").val("");
						  $("#rp").val("");
					 }
				 }
			  );
		  }
		  else{
			   $("#palert").css("background-color","red");
			  $("#palert").html("<h4 style='color:white'>New Password & Retype password not match</h4>");
			  $("#rp").focus();
		  }
 });
$(document).on("change","select",function(){
		  var rel=$(this).attr("rel");
			   var dt=$(this).val();
 			    $.post(
			       "update.php",{id:rel,record:dt},function(data){
					   if(data=="success"){
						    $(".form-control."+rel).prop('disabled', true);
							 $("#store").attr("prec","0");
									 $("#store").attr("pid","");
									 $("#store").attr("prel","");
					   }
				   }
				  );
 });
 $(document).on("keyup","input",function(){
	  var rel=$(this).attr("id");
				  var dt=$(this).val();
				  $.post(
						   "update.php",{id:rel,record:dt},function(data){
							 
							   if(data=="success"){
									$("#d-"+rel).html(dt);
									$("#i-"+rel).attr("class","fa fa-edit");
									 $("#store").attr("prec","0");
									 $("#store").attr("pid","");
									 $("#store").attr("prel","");
							   }
						   });
						  
				  
   });
$(document).on("click",".w3-button.w3-red",function(){
			   var gender=$("#search_gender").val();
			   	var caste=$("#search_caste").val();
			   var religion=$("#search_religion").val();
			   var num=$(this).attr("id");
			   $(this).fadeOut(10);
			   $("#main-block").css("background-image","");
			   $.post(
				"search.php",{gender:gender,caste:caste,religion:religion,num:num},function(data){
					$("#user").append(data);
				});
				
			   
 }); 
$(document).on("click",".w3-btn.w3-blue",function(){
			var num=$(this).attr("id");
			 $(this).fadeOut(10);
			$.post(
			   "inbox.php",{num:num},function(data){
				   $("#user").append(data);
				   
			   }
			);
 });
$(document).on("click",".btn.btn-info",function(){
			   var gender=$("#search_gender").val();
			   	var caste =$("#search_caste").val();
			   var religion=$("#search_religion").val();
			   var num=0;
			   $("#main-block").css("background-image","");
			   $.post(
				"search.php",{gender:gender,caste:caste,religion:religion,num:num},function(data){
					$("#user").html(data);
				});
				
 });
 $(document).on("click",".btn.btn-danger",function(){
		  var code=$(this).attr("id");
		  var msg=$("#msg").val();
		  $.post(
		     "msg.php",{id:code,msg:msg},function(data){
				 if(data.trim()=="success"){
					 $("#msg").val("");
					 $(".alert").html("<h3 style='color:blue'>Message Sent</h3>");
				 }
			 }
		  );
		  
 });
	  $(document).on("click",".fa.fa-heart",function(){
 						  var code = $(this).attr("rel");
						  $.post(
						      "favorite.php",{code:code},function(data){
 								if(data=="success"){
										  $("."+code).css("color","red"); 
									  }
									  else if(data=="delete"){
										  $("."+code).css("color","black"); 
									  }
 								 });  
  		
    });
	  


 
 setInterval(function(){
			   $("#matches").load("load_profile.php");
		   },10000);	
 		    		
</script>
 
  
  <style>
.fa {
  padding: 20px;
  font-size: 25px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-linkedin {
  background: #007bb5;
  color: white;
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
}
.fa-instagram {
  background: #125688;
  color: white;
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
}
.parallax {
  /* The image used */
  background-image: url('images/34.jpg');

  /* Full height */
 height:auto;
  width:100%;
  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.parallax2 {
  /* The image used */
  background-image: url('images/34.jpg');

  /* Full height */
 height:auto;
  width:100%;
  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}


</style>
</head>
  <body>
      <div class="night"></div>
  <span id="store" prel="" pid="" prec="0"></span>
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">Jeevansathi.com</a>

  <!-- Toggler/collapsibe Button -->
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp ;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
       
      <li class="nav-item">
        <a class="nav-link"  id="change_pass" style="cursor:pointer">Change-Password</a>
      </li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <li class="nav-item">
        <a class="nav-link"  id="fav" style="cursor:pointer">Favorite Profile </a>
      </li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 	   <li class="nav-item">
        <a class="nav-link" id="logout" style="cursor:pointer;">Logout</a>
      </li> &nbsp;&nbsp;&nbsp;&nbsp;
	  <li class="nav-item">
        <a class="nav-link"  id="inbox" style="cursor:pointer">Inbox</a>
      </li>
        
    </ul>
  </div>
</nav>
<div class="container-fluid">
    <div class="row" id="main-block" style="background-image:url(images/22.png);height:auto">
	   <div class="col-sm-12">
	
<div class="container">
	   <div class="row" style="margin-top:100px" >
			<div class="col-sm-8"  >
				<div class="row w3-card"  style="background-color:white" id="user">
				    <div class="col-sm-12"><br><br></div>
					<div class="col-sm-4" data-aos="fade-right">
					    <img src="profile/<?php echo $r["code"]?>.jpg" class="img-fluid">
					
					</div>
					<div class="col-sm-8" data-aos="fade-left" id="profile">
					     <table class="table table-hover table-borderless">
						     <tr><td>First Name : </td><td id="d-fname"><?php echo $r["fname"];?></td><td><i class="fa fa-edit" pattern="text" style="color:blue" rel="fname" id="i-fname"></i></td></tr>
							 <tr><td>Last Name: </td><td id="d-lname"><?php echo $r["lname"];?></td><td><i class="fa fa-edit" pattern="text" style="color:blue" rel="lname" id="i-lname"></i></td></tr>
							<tr><td>Gender : </td>
							 <td> 
											<select  rel="gender" disabled="disabled"  class="form-control gender"  id="gender">
									   <option value="<?php echo $r["gender"]?>"><?php echo $r["gender"]?></option>
									   <option value="Male">Male</option>
									   <option value="Female">Female</option>
									</select></td><td><i class="fa fa-edit" style="color:blue" pattern="check" rel="gender"></i>
							</td></tr>
							<tr><td>Date Of Birth : </td><td id="d-dob"><?php echo $r["dob"]?></td><td><i class="fa fa-edit"  pattern="date" style="color:blue" rel="dob" id="i-dob"></i></td></tr>
							<tr><td>Caste : </td>
							 <td> 
										<select rel="caste"  disabled="disabled"  class="form-control caste"  id="caste">
										        <option value="<?php echo $r["caste"]?>"><?php echo $r["caste"]?></option>
											   <option value="OBC">OBC</option>
											   <option value="GEN">GEN</option>
											   <option value="SC">SC</option>
											   <option value="ST">ST</option>
											   <option value="SBC">SBC</option>
											   <option value="Other">Other</option>
										  </select>
											
											
							</td><td><i class="fa fa-edit" style="color:blue" pattern="check" rel="caste"></i>
							</td></tr>
							<tr><td>Religion : </td>
							 <td> 
										<select rel="religion"  disabled="disabled"  class="form-control religion"  id="religion">
										        <option value="<?php echo $r["religion"]?>"><?php echo $r["religion"]?></option>
											   <option value="Hindu">Hindu</option>
											   <option value="Islam">Islam</option>
											   <option value="Christian">Christian</option>
											   <option value="Sikh">Sikh</option>
											   <option value="Budhist">Budhist</option>
											   <option value="Other">Other</option>
										  </select>
											
											
							</td><td><i class="fa fa-edit" style="color:blue" pattern="check" rel="religion"></i>
							</td></tr>
							
						 </table>
						</div>
					
			    </div>
				<div class="col-sm-12"><br><br></div>
			</div>
			<div class="col-sm-4">
			    <div class="card w3-card">
				   <div class="card-body">
				       <br><br>
				       <label>Looking For : </label>
					   <select id="search_gender" class="form-control">
						   <option value="Male">Male</option>
						   <option value="Female">Female</option>
					   </select><br>
					   <label>Caste : </label>
					    <select id="search_caste" class="form-control">
                                   <option value="OBC">OBC</option>
											   <option value="GEN">GEN</option>
											   <option value="SC">SC</option>
											   <option value="ST">ST</option>
											   <option value="SBC">SBC</option>
											   <option value="Other">Other</option>
                        </select><br>
					   <label>Religion : </label>
					    <select id="search_religion" class="form-control">
                                   <option value="Hindu">Hindu</option>
											   <option value="Islam">Islam</option>
											   <option value="Christian">Christian</option>
											   <option value="Sikh">Sikh</option>
											   <option value="Budhist">Budhist</option>
											   <option value="Other">Other</option>
                        </select><br>
						<button class="btn btn-info">Search</button>
					 </div>
				</div>
			</div>
		
		</div>
	</div>
	
	</div>
 </div>
 <!--  random profile -->
 <div class="row" id="matches">
   <div class="col-sm-12"><br><center><h2>Profile Matches</h2></center><br></div>
   <?php 
      $ur=mysqli_query($conn,"select * from template where email<>'$email'ORDER BY RAND() limit 0,4");
	  while($usr=mysqli_fetch_array($ur)){
		  $code = $usr["code"] ;
		?>
          <div class="col-sm-3">
		     <table class="table table-borderless w3-card">
			 
			 <?php 
 						    $color="black";
						    $fr=mysqli_query($conn,"select * from favorite where code='$code' AND email='$email'");
							if($rp=mysqli_fetch_array($fr)){
							   $color="red";
							}
						?>
			    <tr><td align="center"><img src="profile/<?php echo $usr["code"]?>.jpg" class="img-fluid"></td></tr>
				<tr><td align="center"><strong><?php echo $usr["fname"]?></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-heart" rel="<?php echo $usr["code"]?>" style="color:<?php echo $color?>;cursor:pointer"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id="<?php echo $usr["code"]?>" class="btn btn-primary">View-Profile</button></td></tr>
			 
			 </table>
		  
		  
		  </div>

        <?php		
	  }
	?>
     <div class="col-sm-12"><br><br></div>
 
 </div>
 
 <!-- end random profile -->
 
 </div>
 
  
<?php
	  }
	  else{
		  header("location:logout.php");
	  }
  }
 ?>
 <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>

  <script src='https://unpkg.com/aos@2.3.0/dist/aos.js'></script>
  
      <script id="rendered-js" >
AOS.init({
  duration: 1200 });
//# sourceURL=pen.js
    </script>

  

  <script src="https://static.codepen.io/assets/editor/iframe/iframeRefreshCSS-e03f509ba0a671350b4b363ff105b2eb009850f34a2b4deaadaa63ed5d970b37.js"></script>
</body>
</html>

