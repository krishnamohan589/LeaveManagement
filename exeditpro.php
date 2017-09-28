<html>
<style>
.caret-up 
{
    width: 0; 
    height: 0; 
    border-left: 4px solid rgba(0, 0, 0, 0);
    border-right: 4px solid rgba(0, 0, 0, 0);
    border-bottom: 4px solid;
	display: inline-block;
    margin-left: 2px;
    vertical-align: middle;
}
body 
{
	-open .navbar-fixed-top
	background: #eee !important;
	overflow-x: hidden;
}
.wrapper 
{	
    margin-top: 80px;
    margin-bottom: 80px;
}
.form-signin 
{
	max-width: 400px; max-height:880;
	padding: 15px 35px 45px;
	margin: 0 auto;
	background-color: #fff;
	border: 1px solid rgba(0,0,0,0.1);  
.checkbox
{
	font-weight: normal;
}

.form-control 
{
	position: relative;
	font-size: 16px;
	height: auto;
	padding: 10px;
	  @include box-sizing(border-box);
	  &:focus
		{
		  z-index: 2;
		}
}
input[type="text"]
{
	margin-bottom: -1px;
	border-bottom-left-radius: 0;
	border-bottom-right-radius: 0;
}
input[type="password"] 
{
	margin-bottom: 20px;
	border-top-left-radius: 0;
	border-top-right-radius: 0;
}
}
#myModal1
{
	-open .navbar-fixed-top
	position:relative;
	left: 20;
	top: 200; 
}
#myModal2
{
   -open .navbar-fixed-top
   position:relative;
   left: 20;
   top: 200; 
}
#i
{
	position:relative;
    top:150;
	left:95; 
}
#navi
{
    position:relative;
    top:0;
	left:0; 
}
#lg
{
	position:relative;
    top:-30;
	left:40; 
}
#lk1
{
	position:relative;
	top:-590;
	left:-480;
	text-decoration:none;
}
#imgs
{	
	position:relative;
    top:-880;
	left:-480;
}
#eye1
{

   position:relative;
   top:-525;
   left:130;
}
#eye2
{

   position:relative;
   top:-440;
   left:130;
}
#divCheckPassword
{

   position:relative;
   top:-460;
   left:310;
   font-color:green;
}
</style>

<?php
session_start();
$x = $_SESSION['sessionVar'];
mysql_connect("localhost","root","root")or die("unconnected");
mysql_select_db("emp")or die("no db");
$result = mysql_query("select * from executives WHERE id='$x'");
	while($rowval = mysql_fetch_array($result))
	 {
		$uname1= $rowval['name'];
		$uid= $rowval['id'];
		$pwd= $rowval['password'];
		$dpt= $rowval['department'];
		$dsgn= $rowval['designation'];
		$e= $rowval['email'];
		$n= $rowval['number'];
     }
?>
<?php
    $sql = "SELECT eid FROM output_images1 WHERE eid='$x'"; 
    $result = mysql_query($sql);
?>
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<body>

<?php
	$sql3 = "SELECT flag FROM output_images1 WHERE eid='$x'";
	$result12 = mysql_query("$sql3");
	$row3 = mysql_fetch_array($result12);
	$flag=$row3['flag'];
	  if($flag==1)	 
		while($row = mysql_fetch_array($result)) 
			{
?>

<img id="i" width="245" height="236" src="imageView1.php?image_id=<?php echo $row["eid"]; ?>" /><br/>
<style>
body 
{
	-open .navbar-fixed-top
	background: #eee !important;
	overflow-x: hidden;
}
#imgs
{
	-open .navbar-fixed-top
	 position:absolute;
	top:0;
	left:99995; 
}
#navi
{
	-open .navbar-fixed-top
    position:relative;
	top:-235;
	left:0; 
}
#i
{
	-open .navbar-fixed-top
	position:relative;
	top:115;
	left:100; 
}
#lk1
{
	position:relative;
	top:-568;
	left:-490;
	text-decoration:none;
}
#lg
{
	position:relative;
    top:-255;
	left:40; 
}
.caret-up 
{
    width: 0; 
    height: 0; 
    border-left: 4px solid rgba(0, 0, 0, 0);
    border-right: 4px solid rgba(0, 0, 0, 0);
    border-bottom: 4px solid;
	display: inline-block;
    margin-left: 2px;
    vertical-align: middle;
}
</style>

<?php		
  }
?>

<div class="container">
  <div class="modal fade" id="myModal1" role="dialog">
   <div class="modal-dialog modal-sm"">
     <div class="modal-content">
       <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><p>Profile edited successfully.</p></center>
        </div>
        <div class="modal-footer">
          <center><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center>
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
          <center><p>Profile not edited!</p></center>
        </div>
      </div>
    </div>
  </div>
</div>

<nav id="navi" class="navbar navbar-inverse">
  <div class="container-fluid">
	<div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
       <li><a href="alleaves.php">View Leaves</a></li>
        <li><a href="verifyleaves.php">Verify Leave Limit</a></li>
        <li><a href="response.php">Provide Response</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Remind <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="sms.php">SMS</a></li>
              <li><a href="mail.php">Mail</a></li>
          </ul>
        </li>
     </ul>
     <ul class="nav navbar-nav navbar-right">
		 <li><a href="exprofile.php"><span class="glyphicon glyphicon-user" data-toggle="tooltip" data-placement="bottom" title="View Profile"><?php echo $x; ?></span></a> </li>
        <li class="dropdown">
		   <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile <span class="caret"></span></a>
             <ul class="dropdown-menu">
				<li><a href="exprofile.php">View Profile</a></li>
				<li><a href="exeditpro.php">Edit Profile</a></li>
				  <div class="dropdown-divider"></div>
					  <li><a href="logout.php">Logout</a></li>
             </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <div id="lg" class="wrapper">
    <form class="form-signin" method="post" action="">       
      <center><h2>Edit Profile</h2><center><br>
        <label>Name Of The Executive</label><br><input type="text" class="form-control" id="uname1" name="uname1"  required="" value='<?php echo  $uname1; ?>'<br><br>
        <label>Executive ID</label><br><input type="text" class="form-control" id="uid" name="uid"  readonly required=""  value='<?php echo  $x; ?>'<br><br>    
	    <label>New Password</label><input type="password" class="form-control" id="epwd" name="epwd"><br><br>  
		<label>Re-Type New Password</label><input type="password" class="form-control" id="epwd1" name="epwd1"><br>     	   
	    <label>Department</label><input type="text" class="form-control" id="dptv" name="dptv" required=""  value='<?php echo  $dpt; ?>'<br><br>    
		<label>Designation</label><br><input type="text" class="form-control" id="dsg" name="dsg" required=""  value='<?php echo  $dsgn; ?>'<br><br>  
        <label>E-mail ID</label><br><input type="text" class="form-control" id="eml" name="eml" required=""  value='<?php echo  $e; ?>'<br><br>  
	    <label>Contact Number</label><br><input type="text" class="form-control" id="nbr" name="nbr" required=""  value='<?php echo  $n; ?>'<br><br>  
        <br><button class="btn btn-lg btn-primary btn-block" type="submit" id="save" name="save">Save Changes</button>   
          <div id="eye1"><span toggle="#epwd" class="fa fa-fw fa-eye field-icon toggle-password"></span></div> </form>
	      <div id="eye2"><span toggle="#epwd1" class="fa fa-fw fa-eye field-icon toggle-password"></span></div> </form>
          <div id="divCheckPassword">
          </div>
        <p><a href="eximgUpload.php" id="lk1"> Update profile photo</a> </p> 
	    <img id="imgs" src="pic.jpg" width="244" height="236">
</body>

<script>
	    $(function()
		{
			$(".dropdown").hover(            
				function()
				{
					$('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
					$(this).toggleClass('open');
					$('b', this).toggleClass("caret caret-up");                
				},
				function()
				{
					$('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
					$(this).toggleClass('open');
					$('b', this).toggleClass("caret caret-up");                
				});
		});
</script>

<script>
	    $(function()
		{
			$(".dropdown").hover(            
				function() 
				{
					$('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
					$(this).toggleClass('open');
					$('b', this).toggleClass("caret caret-up");                
				},
				function()
				{
					$('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
					$(this).toggleClass('open');
					$('b', this).toggleClass("caret caret-up");                
				});
		});
</script>
	
<script>
	$(document).ready(function()
	{
		$('#show_hide').on('click', function()
		{
				var passwordField = $('#password');
				var passwordFieldType = passwordField.attr('type');
				if(passwordFieldType == 'password')
				  {
						passwordField.attr('type', 'text');
						$(this).text('Hide');
				  }
				else
				  {
						passwordField.attr('type', 'password');
						$(this).text('show');
				  }
		});
	});
</script>

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
   $('#epwd1').on('keyup', function ()
     {
			var password = $("#epwd").val();
			var confirmPassword = $("#epwd1").val();
				if (password != confirmPassword)
				  {		
						//$("#divCheckPassword").attr("src","h.jpg");
						$("#divCheckPassword").html("Passwords do not match.");
						//$("#divCheckPassword").show("<span class='glyphicon glyphicon-remove'></span>");
				  }
				else 
				  {
						//$("#divCheckPassword").show('<span class="glyphicon glyphicon-ok"></span>');
						//$("#divCheckPassword").attr("src","applyleave.jpg");
						$("#divCheckPassword").html("Passwords match.");
				   }
	 });
</script>

<?php
mysql_connect("localhost","root","root")or die("unconnected");
mysql_select_db("emp")or die("no db");
$result = mysql_query("select * from executives WHERE id='$x'");
	while($rowval = mysql_fetch_array($result))
	 {
		$uname1= $rowval['name'];
		$uid= $rowval['id'];
		$pwd= $rowval['password'];
		$dpt= $rowval['department'];
		$dsgn= $rowval['designation'];
		$e= $rowval['email'];
		$n= $rowval['number'];
     }
	 if(isset($_POST['save']))
		 {
				 $nm=$_POST['uname1']; 
				 $i=$_POST['uid'];
				 $pw=$_POST['epwd1']; 
				 $dp=$_POST['dptv'];
				 $dg=$_POST['dsg'];
				 $el=$_POST['eml']; 
				 $nmb=$_POST['nbr'];
				 $q=mysql_query("UPDATE executives SET name='$nm',password='$pw',department='$dp',designation='$dg',email='$el',number='$nmb' WHERE id='$x'");
					if($q)
					  {
							echo "<script>$('#myModal1').modal('show')</script>";
					  }
					else
					  {	
							echo "<script>$('#myModal2').modal('show')</script>";
					  }		 
	     }
?>

</html>
