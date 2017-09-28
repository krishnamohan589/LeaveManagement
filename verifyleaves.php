<html>
<style>
body
{
    width:100%;
    height: 100%;
    background-image:url("applyleave.jpg"); 
    background-position:0px 50px;
	overflow-x:hidden;
	background-position:0px 50px;
    overflow-y:hidden;
    background-size: 100% 100%;
    background-repeat: no-repeat;
}
#go 
{
	position:relative;
	top:102;
	left:150;
	
}
#uid
{
	position:relative;
	top:98;
	left:-80;
}
#btn
{
    top:180;
	left:-340;
	position: relative;
    width: 11%;
    height: 40px;
    display: block;
    opacity:0.87;
    color:black;
    background-color: LightSteelBlue;
    border: none;
    -webkit-transition-duration: 0.4s; 
	border-radius:4px;
}
#btn:hover 
{
    background-color:Silver;
	color: white;
} 
table
{
	border-color:pink;
	border-width:2;
	border-style:solid;
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
?>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>

<script>
function run()
{
    window.location = 'leavd.php';
}
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
          <center><p>Please Enter Employee ID!</p></center>
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
          <center><p>Employee Did Not Apply Leave!</p></center>
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

<form method="post" action=" ">
   <div class="form-group">
      <label  id="go" class="col-sm-3 control-label">Employee ID</label>
          <div class="col-sm-2">
               <input type="text" placeholder="Enter Employee ID" id="uid" name="uid" class="form-control">
           </div>
	<input type="submit" id="btn" name="btn" value="View Leaves">
</form> 
</body>

<?php
mysql_connect("localhost","mohan_leav","Aa@12345")or die("unconnected");
mysql_select_db("emp")or die("no db");
if(isset($_POST['btn']))
     {
			$id=$_POST['uid'];
		    $_SESSION['sv7'] =  $id;
		    $query=mysql_query("select * from leaves where id='$id'");
			if($id=="")
			  {
				     echo "<script>$('#myModal1').modal('show')</script>";
			  }
			if($id!="")
			  {
				      if (mysql_num_rows($query) != 0)
					    {
							echo '<script type="text/javascript">    run();      </script>';
							//header("Location: leavd.php");
						}
					  else
						{
							 echo "<script>$('#myModal2').modal('show')</script>";
						}
			  }
	 }
  ?>
  
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
 
</html> 
