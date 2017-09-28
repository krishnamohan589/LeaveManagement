<html>
<style>
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
	max-width: 380px;
	padding: 15px 35px 45px;
	margin: 0 auto;
	background-color: #fff;
	border: 1px solid rgba(0,0,0,0.1);  
.checkbox
{
	font-weight: normal;
}
input
{ 
	text-align: right; 
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
::-webkit-input-placeholder 
{
    text-align: center;
}
#lk
{
    position:relative;
	top:-829;
	left:1080;
	text-decoration:none;
}
#lk1
{
	position:relative;
	top:-540;
	left:152;
	text-decoration:none;
}
#stgs
{
	position:relative;
	top:-827;
	left:1080;
}
a:link 
{
    text-decoration: none;
	color: black;
}
 .custom-file-upload 
{
   color:blue;
   padding: 6px 12px;
   cursor: pointer;
}
input[type="file"] 
{
    display: none;
}
#i
{
    position:relative;
    top:380;
	left:95; 
}
#imgs
{
    position:relative;
    top:-870;
	left:95; 
}
#lg
{
    position:relative;
    top:-30;
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
session_start();
$x = $_SESSION['sessionVar'];
mysql_connect("localhost","root","root")or die("unconnected");
mysql_select_db("emp")or die("no db");
$result1 = mysql_query("select * from employees WHERE id='$x'");
	while($rowval = mysql_fetch_array($result1))
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
    $sql = "SELECT eid FROM output_images WHERE eid='$x'"; 
    $result = mysql_query($sql);
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
<body>

<?php
	$sql3 = "SELECT flag FROM output_images WHERE eid='$x'";
	$result12 = mysql_query("$sql3");
	$row3 = mysql_fetch_array($result12);
	$flag=$row3['flag'];
	  if($flag==1)	 
		while($row = mysql_fetch_array($result)) 
			{
?>
		
<img id="i" width="244" height="236" src="imageView.php?image_id=<?php echo $row["eid"]; ?>" /><br/>

<style>
body 
{
	-open .navbar-fixed-top
	background: #eee !important;
	overflow-x: hidden;
}
#imgs
{
	position:relative;
    top:0;
	left:99995; 
}
#navi
{
	position:relative;
    top:-235;
	left:0; 
}
#i
{
	position:relative;
    top:110;
	left:100; 
}
#lk1
{
	position:relative;
	top:-740;
	left:152;
	text-decoration:none;
}
#lg
{
	position:relative;
    top:-255;
	left:40; 
}
#stgs
{
	position:relative;
	top:-1050;
	left:1080;
}
#lk
{
    position:relative;
	top:-1050;
	left:1080;
	text-decoration:none;
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
		    <li><a href="viewemplve.php">View Leaves</a></li>
			<li><a href="applyleave.php">Apply Leave</a></li>
			<li><a href="eviewleaves.php">Leave Status</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Request Executive<span class="caret"></span></a>
					   <ul class="dropdown-menu">
							<li><a href="empsms.php">SMS</a></li>
							<li><a href="empmail.php">Mail</a></li>
						</ul>
				</li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="profile.php"><span class="glyphicon glyphicon-user" data-toggle="tooltip" data-placement="bottom" title="View Profile"><?php echo $x; ?></span></a> </li>
				<li class="dropdown">
				    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="profile.php">View Profile</a></li>
							<li><a href="ep.php">Edit Profile</a></li>
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
        <center><h2>Profile</h2><center><br>
        <label>Name Of The Employee</label><br><input type="text" class="form-control" id="uname1" name="uname1"  readonly required="" value='<?php echo  $uname1; ?>'<br><br>
        <label>Employee ID</label><br><input type="text" class="form-control" id="uid" name="uid"  readonly required=""  value='<?php echo  $x; ?>'<br><br>    
	    <label>Password</label><input type="text" class="form-control" id="epwd" name="epwd" readonly required=""  value='<?php echo  $pwd; ?>'<br><br>     
	    <label>Department</label><input type="text" class="form-control" id="dptv" name="dptv" readonly required=""  value='<?php echo  $dpt; ?>'<br><br>    
		<label>Designation</label><br><input type="text" class="form-control" id="dsg" name="dsg" readonly required=""  value='<?php echo  $dsgn; ?>'<br><br>  
      <label>E-mail ID</label><br><input type="text" class="form-control" id="eml" name="eml" readonly required=""  value='<?php echo  $e; ?>'<br><br>  
	  <label>Contact Number</label><br><input type="text" class="form-control" id="nbr" name="nbr" readonly required=""  value='<?php echo  $n; ?>'<br><br><br>   
    </form>
</div>
    <p><span class="glyphicon glyphicon-cog" id="stgs"></span><a href="ep.php" id="lk"> Edit Profile</a> </p> 
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

</html>
