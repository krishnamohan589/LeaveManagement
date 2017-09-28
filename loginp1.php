<html>
<style>

body 
{
   overflow-y: scroll !important;
   background: grey !important;
} 
::-webkit-input-placeholder 
{
   text-align: center;
}
#myModal1
{
   position:relative;
   left: 20;
   top: 200; 
}
#myModal2
{
   position:relative;
   left: 20;
   top: 200; 
}
#myModal6
{
   position:relative;
   left: 20;
   top: 200; 
}
#modal-login
{
   position:relative;
   left: 40;
   top: 60; 
   overflow:hidden;
}
#eo
{
   position:relative;
   left: -10;
   top: -20; 
}
#eeo
{
   position:relative;
   left: -90;
   top: -20; 
}
#fo
{
   position:relative;
   left: -365;
   top: 10; 
}
#ffo
{
   position:relative;
   left: -311;
   top: -25; 
}
#mv
{
   position:relative;
   left: 170;
   top: -55; 
}
#nv
{
   position:relative;
   left: 170;
   top: -60; 
}
#form-emil
{
   position:relative;
   left: 0;
   top: -30; 
}
#form-nber
{
   position:relative;
   left: 0;
   top: -20; 
}
#reg
{
   position:relative;
   left:0;
   top: -5; 
}
#eye1
{
   position:relative;
   top:33;
   left:490;
}
#eye2
{
   position:relative;
   top:33;
   left:490;
}
#eye3
{
   position:relative;
   top:33;
   left:490;
}
#divCheckPassword
{

   position:relative;
   top:105;
   left:105;
   font-color:green;
}
</style>

<?php
session_start();
?>

<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/form-elements.css">
<link rel="stylesheet" href="assets/css/style.css">
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/scripts.js"></script>

<body bgcolor="white">

<script>
setTimeout
 (
	function()
	 {
		$('#modal-login').modal();
	 }, 2000);
</script>

<script>
  function run()
   {
        window.location = 'alleaves.php';
   }
</script>

<script>
$(document).bind("contextmenu",function(e)
  {
		e.preventDefault();
  });
</script>
 
<div class="container">
 <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
              <center><h4 class="modal-title">Warning</h4></center>
        </div>
        <div class="modal-body">
          <center><p>Incorrect Password.</p></center>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
 <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <center><h4 class="modal-title">Warning</h4></center>
        </div>
        <div class="modal-body">
          <center><p>Please Register.</p></center>
        </div>
      </div>
    </div>
  </div>
</div>
	<div class="container">
 <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <center><h4 class="modal-title">Warning</h4></center>
        </div>
        <div class="modal-body">
          <center><p>You have already registered.</p></center>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="modal fade" id="myModal4" role="dialog">
   <div class="modal-dialog modal-sm"">
     <div class="modal-content">
       <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><p>You have registered successfully.</p></center>
        </div>
        <div class="modal-footer">
          <center><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
 <div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <center><h4 class="modal-title">Warning</h4></center>
        </div>
        <div class="modal-body">
          <center><p>Please Register.</p></center>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
 <div class="modal fade" id="myModal6" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <center><h4 class="modal-title">Warning</h4></center>
        </div>
        <div class="modal-body">
          <center><p>Please fill all details.!</p></center>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" >
   <div class="modal-dialog">
       <div class="modal-content">
             <div class="modal-header">
        				<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;</button>
           <center><h4 class="modal-title" id="myModalLabel">
                   Leave Management System </h4></center>
            </div>
<div class="modal-body">
    <div class="row">
       <div id="tb"><ul class="nav nav-tabs">
				 <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
				 <li><a href="#Registration" data-toggle="tab">Register</a></li>
			</ul> <br>
	   </div>
	<div class="tab-content">
       <div class="tab-pane active" id="Login">
           <form role="form" action="" method="post" class="login-form">
	            <div class="form-group">
	               <input type="text" id="form-username" name="form-username" placeholder="Executive ID" class="form-username form-control">
	            </div>
	            <div class="form-group">
					<div id="eye1"><span toggle="#form-password" class="fa fa-fw fa-eye field-icon toggle-password"></span></div>
					<input type="password" id="form-password" name="form-password" placeholder="Password" class="form-password form-control">
				</div>
				<div class="form-group">
	                  <button type="submit" class="btn" id="lgn" name="lgn">Sign in</button>
	                  </div> 
				</form>
			<ul><li><center>Not yet registered? <a href="#Registration"  data-toggle="tab">Register here.</a></center></li></ul>
				<br><center><a href="exforgotpass.php">Forgot Password?</a></center>
		 </div>
        <div class="tab-pane" id="Registration">
             <form role="form" action="" method="post" class="login-form">
				<div class="form-group">
					<input type="text" id="form-username" name="form-username" placeholder="Enter Name of the Executive " class="form-username form-control">
	            </div>
				<div class="form-group">
	                <input type="text" id="form-id" name="form-id" placeholder="Enter Executive ID" class="form-username form-control">
	            </div>
				<div class="form-group">
					<div id="eye3"><span toggle="#d1" class="fa fa-fw fa-eye field-icon toggle-password"></span></div>
					<input type="password" id="d1" name="d1" placeholder="Type Password" class="form-password form-control">
				</div>
				<div class="form-group">
					<div id="eye2"><span toggle="#d15" class="fa fa-fw fa-eye field-icon toggle-password"></span></div>
					<input type="password" id="d15" name="d15" placeholder="Re-Type Password" class="form-password form-control">
				</div><br>
				<div class="form-group">
                   <label id="eo" class="col-sm-3 control-label">Select </label>
				   <label id="eeo" class="col-sm-3 control-label"> Department</label>
                      <div id="mv" class="col-sm-8">
                           <select  name="form-dtv" class="form-control">
							   <option  value="CIS(Cloued and infrastructure unit)">CIS(Cloued and infrastructure unit)</option>
							   <option  value="IVS (Testing related projects)">IVS(Testing related projects)</option>
							   <option value="DNA(Data Analysis Related Projects)">DNA(Data Analysis Related Projects)</option>
							   <option value="HR">Human Resources</option>
							   <option value="Training">Training</option>
							   <option  value="Finance">Finance</option>
							   <option value="Facilities">Facilities</option>
							   <option value="Engineering ">Engineering</option>
							   <option value="R&D">Research and Development</option>
						   </select><br>
                      </div>
					  <div class="form-group">
                         <label id="fo" class="col-sm-3 control-label">Select </label>
					     <label id="ffo" class="col-sm-3 control-label"> Designation</label>
                           <div id="nv" class="col-sm-8">
                              <select  name="form-dsgtn" class="form-control">
							    <option "Trainee Engineer"value="Trainee Engineer">Trainee Engineer</option>
								<option value="Software Engineer">Software Engineer</option>
								<option value="Programmer Analyst">Programmer Analyst</option>
								<option  value="Senior Software Engineer">Senior Software Engineer</option>
								<option value="System Analyst">System Analyst</option>
								<option value="Project Lead">Project Lead</option>
								<option value="Project Manager">Project Manager</option>
								<option value="Program Manager">Program Manager</option>
						      </select>
                      </div>
					  <div class="form-group">
						<input type="text" id="form-emil" name="form-emil" placeholder="Enter Email ID" class="form-username form-control" id="form-username">
					  </div>
					  <div class="form-group">
						<input type="text" id="form-nber" name="form-nber" placeholder="Enter Contact Number" class="form-password form-control" id="form-password">
					  </div>
					  <div id="reg" class="col-sm-12">
                        <button type="submit" class="btn" id="reg" name="reg">Register</button>
                      </div>
						<br><br><ul><li><center>Already registered? <a href="#Login"  data-toggle="tab">Sign in.</a></center></li></ul>
                   </div>
                 </form>
               </div>    
            </div>
          </div>
        </div>
		
<script>
	$(".toggle-password").click(function()
	 {
		$(this).toggleClass("fa-eye fa-eye-slash");
		var input = $($(this).attr("toggle"));
		  if (input.attr("type") == "password")
		    {
				input.attr("type", "text");
			} 
		  else 
		    {
				input.attr("type", "password");
			}
	});
</script>

<script>
	$('#d1').on('keyup', function () 
	 {
		var password = $("#d15").val();
		var confirmPassword = $("#d1").val();
			if (password != confirmPassword)
			 {		
					$("#divCheckPassword").html("Passwords do not match.");
					//$("#divCheckPassword").attr("src","h.jpg");
					//$("#divCheckPassword").show("<span class='glyphicon glyphicon-remove'></span>");
			 }
			else 
			 {
					$("#divCheckPassword").html("Passwords match.");
					//$("#divCheckPassword").show('<span class="glyphicon glyphicon-ok"></span>');
					//$("#divCheckPassword").attr("src","applyleave.jpg");
					
			 }
	});
</script>

    </body>
</html>

<?php
mysql_connect("localhost","mohan_leav","Aa@12345")or die("unconnected");
mysql_select_db("emp")or die("no db");
if(isset($_POST['lgn']))
	{
		$x = $_POST['form-username'];  
		$_SESSION['sessionVar'] = $x;
		$nm=$_POST['form-username'];
		$pwrd=$_POST['form-password'];
		if($nm== "" && $pwrd=  "")
		  {
			   echo "<script>$('#myModal6').modal('show')</script>";
		  }
		if($nm!= "" && $pwrd!=  "")
		  {
					$query = mysql_query("SELECT * from executives WHERE id='$nm'");
						if (mysql_num_rows($query) != 0)
						  {
							  $q = mysql_query("SELECT * from executives WHERE password='$pwrd'"); 
								 if (mysql_num_rows($q) != 0)
									{
										 echo '<script type="text/javascript">    run();      </script>';
										 //header("Location: applyleave.php");
							
									}
								 else
									{
										echo "<script>$('#myModal1').modal('show')</script>";
									}							 
						  } 
						else 
						  {
							     echo "<script>$('#myModal2').modal('show')</script>";
						  }
				 
	      }
    }
if(isset($_POST['reg']))
    {
				$ne=$_POST['form-username'];
				$uiid=$_POST['form-id']; 			 
				$pwd=$_POST['d1']; 
				$dpt=$_POST['form-dtv']; 
				$dgn=$_POST['form-dsgtn']; 
				$eal=$_POST['form-emil']; 
				$nr=$_POST['form-nber']; 
				$query = mysql_query("SELECT * from executives WHERE id='$uiid'");
							   if (mysql_num_rows($query) != 0)
								 {
									
									   echo "<script>$('#myModal3').modal('show')</script>";
								 }
							   else
								 {
									   $query="insert into executives(name,id,password,department,designation,email,number) values('$ne','$uiid','$pwd','$dpt','$dgn','$eal','$nr')";
										  $query9=mysql_query("insert into expassword(id,system_code,user_code) values('$uiid',0,0)");
										  if(mysql_query($query))
											{
												
														echo "<script>$('#myModal4').modal('show')</script>";
											}
										  else
											{
													
													  echo "<script>$('#myModal5').modal('show')</script>";
											}  
								 }
					 
	    }
?> 
