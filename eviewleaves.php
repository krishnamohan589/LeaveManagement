<html>
<style>
body
{
	overflow-x:hidden;
    overflow-y:hidden; 
    width:100%;
    height: 100%;
    background-image: url("status1.jpg");
    background-position: center;
    background-size: 100% 100%;
    background-repeat: no-repeat;
}
#dh
{
	position:relative;
	top:135;
	left:130;
	color:Green;
}
#d
{
	position:relative;
	top:111;
	left:260;
	color:blue;
}
#cld
{
	position:relative;
	top:111;
	left:260;

}
#btn
{
    top:205;
	left:-10;
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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  
<?php
session_start();
$x = $_SESSION['sessionVar'];
?>

<body>
  
<script>
  function run()
   {
       window.location = 'eviewleavesrdrct.php';
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
          <center><p>Please Select Date</p></center>
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
          <center><p>Invalid Credentials</p></center>
        </div>
      </div>
    </div>
  </div>
</div>
  
  
  
<nav class="navbar navbar-inverse">
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

<form method="post" action="">
 <div id="dh">Date Of Leave</div>   
  <div class="form-group col-sm-2">                 
	<div class="input-group">
        <div id="cld" class="input-group-addon">
         <i  class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="d" name="d" placeholder="DD/MM/YYYY" type="text"/>
       </div>
      </div>
     </div>
  </div>
<input type="submit" id="btn" name="btn" value="View Leaves" >
</form>

<script>
	$(document).ready(function()
	{
		var date_input=$('input[name="d"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker(
		 {
			format: 'dd/mm/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		 })
	})
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

</body>

<?php
mysql_connect("localhost","root","root")or die("unconnected");
mysql_select_db("emp")or die("no db");
if(isset($_POST['btn']))
  { 
	  $dt=$_POST['d'];
	  	$_SESSION['sessionVar1']=$dt;
		if($dt=="")
		  {
			   echo "<script>$('#myModal1').modal('show')</script>";
		  }
		else
		  {
			   $result = mysql_query("SELECT status FROM leaves where id='$x' && date1='$dt'");
				   if (mysql_num_rows($result) > 0)
					  {
						   echo '<script type="text/javascript">    run();      </script>';
						   //header("Location: eviewleavesrdrct.php");
					  }
				  else
					  {
						  echo "<script>$('#myModal2').modal('show')</script>";
					  }
		  }
  }
?>

</html> 
