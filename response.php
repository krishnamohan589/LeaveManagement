<html>
<style>
body
{
	background-position:0px 50px;
	overflow-x:hidden;
    overflow-y:hidden;
	width:100%;
    height: 100%;
    background-image: url("respp.jpg");
	background-size: 100% 100%;
    background-repeat: no-repeat;
}
input
{
	padding:4;
	align:center;
	font-size:16px;
	-webkit-border-radius: 3px;
}
#eh
{
	position:relative;
	left:99;
	top:125;
}
#hc
{
	position:relative;
	left:226.6;
	top:120;
}
#uid
{
	position:relative;
	left:250.5;
	top:100;
}
#btn
{
	top:240;
	left:-60;
	position: relative;
    width: 11%;
    height: 40px;
    display: block;
	opacity:0.87;
	color:black;
	background-color:LightGreen;
	border: none;
	-webkit-transition-duration: 0.4s; 
	border-radius:4px;
}
#btn:hover 
{
    background-color: Green;
	color: white;
} 
#apv
{
	position:relative;
	left:-130;
	top:197;
}
#dpv
{
	position:relative;
	left:-54;
	top:199;
}
#fd
{
	position:relative;
	left:98;
	top:145;
}
#fc
{
	position:relative;
	left:226.5;
	top:126;
}
#fdi
{
	position:relative;
	left:236;
	top:121;
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
#myModal3
{
   -open .navbar-fixed-top
   position:relative;
   left: 20;
   top: 200; 
}
input[type="radio"] 
{
   margin-right: 4px;
}
#cld
{
	position:relative;
	top:121;
	left:235;
}
#pv
{
	position:relative;
	left:-127;
	top:196;
}
#pb
{
	position:relative;
	left:-52;
	top:198;
} 
</style>

<?php
session_start();
$x = $_SESSION['sessionVar'];
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  
<body>
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

<div class="container">
 <div class="modal fade" id="myModal1" role="dialog">
   <div class="modal-dialog modal-sm"">
     <div class="modal-content">
       <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><p>Updated Successfully.</p></center>
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
          <center><p>Not Updated Successfully.</p></center>
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
          <center><p>Please fill all details.</p></center>
        </div>
      </div>
    </div>
  </div>
</div>
  
<form method="post" action="">
<div id="eh">Employee ID</div><div id="hc"></div><input type="text" id="uid" name="uid">
<div id="fd">Date Of Leave</div>   
  <div class="form-group col-sm-2">                 
	<div class="input-group">
        <div id="cld" class="input-group-addon">
         <i  class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="fdi" name="fdi" placeholder="DD/MM/YYYY" type="text"/>
       </div>
      </div>
     </div>
  </div>
<input type="radio" id="apv" name="decsn" onclick="emplogin.php" value="Approved">
<label id="pv">Approve</label>
<input type="radio" id="dpv" name="decsn" value="Disapproved">
<label id="pb">Disapprove</label>
<input type="submit" id="btn" name="btn"  value="Submit Response">
</form>
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
$(document).bind("contextmenu",function(e)
 {
	e.preventDefault();
 });
 </script>
 
</html>

<?php
mysql_connect("localhost","mohan_leav","Aa@12345")or die("unconnected");
mysql_select_db("emp")or die("no db");
if(isset($_POST['btn']))
{
	$id=$_POST['uid'];
	$fdi=$_POST['fdi'];
	$dec=$_POST['decsn'];
	  if(empty($id && $fdi && $dec) || empty($id && $dec) || empty($fdi && $dec) || empty($id && $fdi))
	    {
			echo "<script>$('#myModal3').modal('show')</script>";
		}
	  else
		{
			//$q=mysql_query("insert into decisn(id,date,decision) values('$id','$fdi','$dec')");
			 $query = "update leaves set status = '$dec' where id ='$id' && date1='$fdi'";
			 $query2 = mysql_query("update leaves set flag= '1' where id ='$id' && date1='$fdi'");
			    if(mysql_query($query))
				  {
					  echo "<script>$('#myModal1').modal('show')</script>";
				  }
				 else
				  {
					  echo "<script>$('#myModal2').modal('show')</script>";
				  }
				  //https://stackoverflow.com/questions/25824094/redirect-to-a-page-according-to-selected-option-from-radio-button-through-oncli
	    }
}
?>