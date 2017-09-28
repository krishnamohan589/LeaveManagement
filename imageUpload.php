<?php
session_start();
$x = $_SESSION['sessionVar'];
if(count($_FILES) > 0) 
{
   if(is_uploaded_file($_FILES['userImage']['tmp_name']))
	 {
		mysql_connect("localhost","mohan_leav","Aa@12345")or die("unconnected");
		mysql_select_db("emp")or die("no db");
		$imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
		$imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
		$sql2="INSERT INTO output_images(eid,flag) VALUES('$x',1)";
		$ert = mysql_query($sql2);
		$sql="UPDATE output_images SET imageData='$imgData' WHERE eid='$x'";
		//$sql="INSERT INTO output_images1(imageData,eid) VALUES('$imgData','$x')";
		$current_id = mysql_query($sql);
		  if(isset($current_id)) 
		   {
			    header("Location: ep.php");
		   }
     }
	 
}
?>

<HTML>
<style>
#userImage
{
	position:relative;
	top:219;
	left:575;
}
#btn
{
	position:relative;
	top:260;
	left:630;
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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<BODY>
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
<form name="frmImage" enctype="multipart/form-data" action="" method="post" class="frmImageUpload">
<input id="userImage" name="userImage" type="file" class="inputFile" />
<input type="submit" id="btn" id="name" value="Submit" class="btnSubmit" />
</form>
</div>
</BODY>

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
$(document).bind("contextmenu",function(e)
 {
	e.preventDefault();
 });
 </script>
 
</HTML>