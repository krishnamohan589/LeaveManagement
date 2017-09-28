<html>
<style>
body
 {
	 background-position:0px 50px;
	 overflow-x:hidden;
     overflow-y:hidden;
	 width:100%;
     height: 100%;
     background-image: url("rf.jpg");
	 background-size: 100% 100%;
     background-repeat: no-repeat;
 }
#apply
{
	top:55px;
	left:121.5;
	font-family: "Open Sans", Helvetica, sans-serif;
	position: relative;
    width: 100%;
    height: 40px;
    display: block;
    opacity:0.87;
    color:black;
    background-color:Silver;
    border: none;
    -webkit-transition-duration: 0.4s; 
	border-radius:4px;
}
#apply:hover 
{
	font-family: "Open Sans", Helvetica, sans-serif;
    background-color: LightSteelBlue;
	color: white;
}	
#pnl
{ 
    position:relative;
    left: -110;
    top: 75; 
    font-family: "Open Sans", Helvetica, sans-serif;
}
#c
{ 	
	background-color:WhiteSmoke;
}
#co
{
	position:relative;
	top:9px;
	left:-2;
	font-family: "Open Sans", Helvetica, sans-serif;
}
#do
{
	position:relative;
	top:50px;
	left:-2;
	font-family: "Open Sans", Helvetica, sans-serif;
}
#eo
{
	position:relative;
	top:9.5px;
	left:-2;
	font-family: "Open Sans", Helvetica, sans-serif;
}
#fo
{
	position:relative;
	top:9px;
	left:10;
	font-family: "Open Sans", Helvetica, sans-serif;
}
#go
{
	position:relative;
	top:10px;
	left:11;
	font-family: "Open Sans", Helvetica, sans-serif;
}
#dmt
{
	position:relative;
	top:5px;left:15;
	font-family: "Open Sans", Helvetica, sans-serif;
}
#dgn
{
	position:relative;
	top:5px;left:15;
	font-family: "Open Sans", Helvetica, sans-serif;
}
#lv
{
	position:relative;
	top:5px;left:-20;
	font-family: "Open Sans", Helvetica, sans-serif;
}
#datepicker1
{
	position:relative;
	top:5px;left:15;
	font-family: "Open Sans", Helvetica, sans-serif;
}
#datepicker2
{
	position:relative;
	top:45px;left:15;
	font-family: "Open Sans", Helvetica, sans-serif;
}
#myModal1
{
   -open .navbar-fixed-top
   position:relative;
   left: 50;
   top: 250;
   font-family: "Open Sans", Helvetica, sans-serif;
}
#myModal2
{
   -open .navbar-fixed-top
   position:relative;
   left: 50;
   top: 250;
   font-family: "Open Sans", Helvetica, sans-serif;
}
#myModal3
{
   -open .navbar-fixed-top
   position:relative;
   left: 50;
   top: 250;
   font-family: "Open Sans", Helvetica, sans-serif;
}
#myModal4
{
   -open .navbar-fixed-top
   position:relative;
   left: 50;
   top: 250;
   font-family: "Open Sans", Helvetica, sans-serif;
}
#cld
{
   position:relative;
   left: 15;
   top:5;
}
#cld2
{	
   position:relative;
   left: 15;
   top:45;
}
#pbd
{
   position:relative;
   height:380;
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
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<body>	
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
  
<div class="container">
 <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <center><h4 class="modal-title">Warning</h4></center>
        </div>
        <div class="modal-body">
          <center><p>Please fill all fields!</p></center>
        </div>
      </div>
    </div>
  </div>
</div>
 
<div class="container">
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-sm"">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><p>Dear Employee,you have reached your maximum leave limit.So,you cannot apply leave in this month!</p></center>
        </div>
        <div class="modal-footer">
          <center><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center>
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
          <center><p>Leave Applied Successfully.</p></center>
        </div>
      </div>
    </div>
  </div>
</div>
 

 <div class="container">
 <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <center><h4 class="modal-title">Warning</h4></center>
        </div>
        <div class="modal-body">
          <center><p>Error in applying leave!</p></center>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div id="pnl" class="col-md-5 col-md-offset-5">
    	<div id="c" class="panel panel-default">
			 <div id="ph" class="panel-heading">
			    	<center><h3 class="panel-title">Leave Application</h3></center>
			 </div>
		<div id="pbd" class="panel-body"><br>
	       <form method="post" action=" ">
              <fieldset>
				   <div class="form-group">
                      <label id="eo" class="col-sm-3 control-label">Leave</label>
                         <div id="lv" class="col-sm-9">
                           <select  name="lv1" class="form-control">
							  <option id="Sick Leave" value="Sick Leave">Sick Leave</option>
							  <option  value="Occasional Leave">Occasional Leave</option>
							  <option value="Compassionate Leave">Compassionate Leave</option>
							  <option  value="Maternity Leave">Maternity Leave</option>
							  <option value="Paternity Leave">Paternity Leave</option>
							  <option  value="Other">Other</option>
						   </select><br><br>
                   </div>
				   <div class="form-group ">
      <label id="co" class="control-label col-sm-2 requiredField" for="date">
       From
	  </label>
      <div class="col-sm-10">
       <div class="input-group">
        <div id="cld" class="input-group-addon">
         <i  class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="datepicker1" name="datepicker1" placeholder="DD/MM/YYYY" type="text"/>
       </div>
      </div>
     </div><br>
    </div>
<div class="form-group ">
   <label id="do" class="control-label col-sm-2 requiredField" for="date">
      To
   </label>
      <div class="col-sm-10">
       <div class="input-group">
        <div id="cld2" class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="datepicker2" name="datepicker2" placeholder="DD/MM/YYYY" type="text"/>
       </div>
      </div>
     </div>
				 
<div class="form-group">
    <div class="col-sm-5">
	   <br><br><input type="submit" id="apply" name="apply" value="Apply Leave">
			   </div></fieldset>
			 </form>
		    </div>
		  </div>
	    </div>
	</div>
</div>
</body>

<script>
	$(document).ready(function()
	  {
		var date_input=$('input[name="datepicker1"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'dd/mm/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>

<script>
	$(document).ready(function()
	{
		var date_input=$('input[name="datepicker2"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
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
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
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
if(isset($_POST['apply']))
  {
		$leav=$_POST['lv1'];
		$date1=$_POST['datepicker1'];
		$date2=$_POST['datepicker2'];
		$i=substr($date1,3,7);
		$row= mysql_fetch_array(mysql_query("select count(*) from leaves where countt='$i' && id='$x'"));
		$r=$row[0];
		  if(empty($leav && $date1 && $date2) || empty($leav && $date1) || empty($date1 && $date2) || empty($leav && $date2))
		    {
			    echo "<script>$('#myModal1').modal('show')</script>";
		    }
		  else if($r>=3)
	        {
				echo "<script>$('#myModal2').modal('show')</script>";
		    }  
		  else
	       {
			   	  $row= mysql_fetch_array(mysql_query("SELECT name,department,designation FROM employees WHERE id='$x'"));
			      $query="insert into leaves(id,name,department,designation,leav,date1,date2,countt) values('$x','$row[0]','$row[1]','$row[2]','$leav','$date1','$date2','$i')";
			         if(mysql_query($query))
					  {
							echo "<script>$('#myModal3').modal('show')</script>";
					  }
				     else
					  {
						    echo "<script>$('#myModal4').modal('show')</script>";
					  }    
		   }
  }
?>