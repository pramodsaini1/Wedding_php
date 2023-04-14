<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
<style>
.fa-facebook {
  background-color: #3b5998;
  margin-right: 10px;
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
}
.fa-google-plus {
  background-color: #3b5998;
  margin-right: 10px;
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
}
.fa-twitter {
  background-color: #55acee;
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
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
  background-image: url('images/37.jpg');

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
  background-image: url('images/37.jpg');

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
 
   
       <div class="col-sm-12" style="background-image:url(images/19.jpg)"><br><br><br>
 <div class="container-fluid">
    <div class="row">
	  <div class="col-sm-2">
	     
        </div>
		<div class="col-sm-7">	
			<div class="card card-default" >
            <div class="card-header" id="mn"><center><img src="images/11.png" style="width:50px;height:50px"> Jeevansathi.com Create Account </center></div>			
                   <div class="card-body">
 			   <form method="post" action="registeration.php" enctype="multipart/form-data" >
 	  	    <div class="form-group">
		      <label for="edit-name">First Name  <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text"  name="fname"  class="form-control">
		    </div>
			<div class="form-group">
		      <label for="edit-name">Last Name  <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text"  name="lname"  class="form-control">
		    </div>
			<div class="form-group">
		      <label for="edit-name">Email <span class="form-required" title="This field is required.">*</span></label>
		      <input type="email"  name="email" class="form-control">
		    </div>
		    <div class="form-group">
		      <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
		      <input type="password"  name="pass" class="form-control">
		    </div>
		    
		    DOB:<input type = "date" name="dob" class="form-control"><br><br>
              <div class="form-group form-group1">
                <label class="col-sm-3 control-lable" for="sex">Gender : </label>
                <div class="col-sm-9">
                    <div class="radios">
				        <label for="radio-01" class="label_radio">
				            <input type="radio" name = "gender" value = "male"> Male
				        </label>
				        <label for="radio-02" class="label_radio">
				            <input type="radio" name = "gender" value = "female"> Female
				        </label>
	                </div>
                </div>
                <div class="clearfix"> </div>
             </div>
			  
			  <div class="form-group">
			     <label for="edit-name">Caste <span class="form-required" id="edit-pass" size="60" maxlength="128" class="form-text required" class="form-control" title="This field is required.">*</span></label>
				 <td class="day_value"><select name = "caste" class = "form-control" ></td>
				 <option value = "OBC">OBC</option>
                 <option value = "SC">SC</option>
                 <option value = "ST">ST</option>
				 <option value = "SBC">SBC</option>
				 <option value = "other">OTHER</option>
	             </select><br><br>
			  </div>
			  <div class="form-group">
			     <label for="edit-name">Religion <span class="form-required"class="form-control" title="This field is required.">*</span></label>
				 <td class="day_value"><select name= "religion" class = "form-control"> </td>
				 <option value = "Hindu">Hindu</option>
                 <option value = "Muslim">Muslim</option>
                 <option value = "Sikh">Sikh</option>
				 <option value = "Jain">Jain</option>
				 <option value = "Parsi">Parsi</option>
	             </select><br><br>
			  </div>
			  <div class="form-group">
			     <label for="edit-name">State <span class="form-required" class="form-control"title="This field is required.">*</span></label>
				 <td class="day_value"><select name= "state" class = "form-control"> </td>
				 <option value = "Rajasthan">Rajasthan</option>
                 <option value = "Bihar">Bihar</option>
                 <option value = "Uttrakand">Uttrakand</option>
				 <option value = "Delhi">Delhi</option>
				 <option value = "OTHER">OTHER</option>
	             </select><br><br>
			  </div>
			  <div class="form-group">
			     <label for="edit-name">Country <span class="form-required" class="form-control" title="This field is required.">*</span></label>
				  <td class="day_value"><select name= "country" class = "form-control"> </td>
				 <option value = "india">India</option>
                 <option value = "aus">Australia</option>
                 <option value = "mexico">Mexico</option>
				 <option value = "america">America</option>
				 <option value = "other">OTHER</option>
	             </select><br><br>
			  </div>
			  	<div class="form-group">
                   <input type="file" name="photo" class="form-control"><br> 

                </div> 				
			  <div class="form-actions">
			    <input type="submit" id="edit-submit" name="op" value="Submit" class="btn btn-warning">
			  </div>
			  </form>
 	      </div>
	     </div>
	   </div>
	   <div class="col-sm-3">
	   
	   </div>
	 </div>
	 
   </div>		
 </div>	
<div class="container-fluid">
 <div class="row"  style="background-color:#DEDFE3;" id="header">
        

  <div class="parallax">  

	<div class="col-sm-12" ><br><br><br><center><h2 style="color:#93F217">Trusted by Millions</h2></br></br></br></center>   
<div class="row">
			  <div class="col-sm-3" style="color:white">
		     <h3>Company</h3>
		     <table class="table table-hover table-borderless">
			     <tr style="color:white"><td  style="border:none" style="color:white">About Us </td></tr>
				  <tr style="color:white"><td style="border:none">Shaadi Blog</td></tr>
				   <tr style="color:white"><td style="border:none">Careers</td></tr>
				    <tr style="color:white"><td style="border:none">Award</td></tr>
					 <tr style="color:white"><td style="border:none">Contact Us</td></tr>
					  
			 </table>
		
		  </div>
		  <div class="col-sm-3" style="color:white">
		     <h3>More</h3>
		     <table class="table table-hover table-borderless">
			     <!--<a href="#" class="w3-bar-item w3-button" style="width:25% !important">VIP Shaadi</a><br><br>
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">Select Shaadi</a><br><br>
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">Sangam</a><br><br>
	<a href="#" class="w3-bar-item w3-button" style="width:25% !important">Shaadi Centers</a><br><br>
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">Success Story</a><br><br>-->
	        <tr style="color:white"><td  style="border:none" style="color:white">VIP Shaadi </td></tr>
				  <tr style="color:white"><td style="border:none">Select Shaadi</td></tr>
				   <tr style="color:white"><td style="border:none">Sangam</td></tr>
				    <tr style="color:white"><td style="border:none">Shaadi Centers</td></tr>
					 <tr style="color:white"><td style="border:none">Success Stories</td></tr>
					  
					  
			 </table>
		
		</div>
		<div class="col-sm-3" style="color:white">
		   <h3>Privacy & You</h3>
		     <table class="table table-hover table-borderless">
			     <!--<tr class="w3-bar-item w3-button" style="width:25% !important">Terms of Use</a><br><br>
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">Privacy Policy</a><br><br>
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">Be Safe Online</a><br><br>
	<a href="#" class="w3-bar-item w3-button" style="width:25% !important">Shaadi Centers</a><br><br>
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">Report Misuse</a><br><br>-->
					     <tr style="color:white"><td  style="border:none" style="color:white">Terms of Use </td></tr>
				  <tr style="color:white"><td style="border:none">Be Safe Online</td></tr>
				   <tr style="color:white"><td style="border:none">Shaadi Centers</td></tr>
				    <tr style="color:white"><td style="border:none">Report Misuse</td></tr>
					 <tr style="color:white"><td style="border:none">Events</td></tr>
					   
			 </table>
		
		
		</div>
				<div class="col-sm-3" style="color:white">
		    <h3>Contact</h3>
			<h4> Pugal Road<br> Karni Industrial Area<br> Bikaner<br> Rajasthan<br> 334004<br>
		
		</div>
		</div>
		<div class="row">
	    <div class="col-sm-12">
	        <center> <h3 style="color:white">Follow Us :  <a href="https://www.facebook.com/profile.php?id=100060203576938"  class="social-network social-circle" target="_blank"><i class="fa fa-facebook"></i></a> &nbsp;<a href="https://twitter.com/PramodK82377407" target="_blank"><i class="fa fa-twitter"></i></a> &nbsp; <a href="https://www.linkedin.com/in/pramod-kumar-saini-98813b1b4/" target="_blank"><i class="fa fa-linkedin"></i></a>&nbsp; <a href="https://www.instagram.com/pramodkumarsaini12/" target="_blank"><i class="fa fa-instagram"></i></a></h3></center>
	    </div>
	</div>
				<br>
    		<div class="clearfix"> </div>
    		<div class="copy">
		       <center><p><b><h1 style="color:white">Jeevansathi.com © 2021</h1>  .<h3 style="color:white">All Rights Reserved  <br> Design by <a href="http://Jeevansathi.com/" target="_blank">Jeevansathi.com</a></b></h3> </p></center>
	        </div>
      </div>
	  
	  
	   </div>
        
    </div> 


</div> 




  