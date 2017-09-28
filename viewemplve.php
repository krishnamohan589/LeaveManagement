<html>
<style>
#myModal1
{
   -open .navbar-fixed-top
   position:relative;
   left: 20;
   top: 200; 
}
table
{
   border-style:solid;
   position:relative;
   top:50;
   border-width:1px;
   border-color:black;
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

<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

<div class="container">
 <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <center><h4 class="modal-title">Warning</h4></center>
        </div>
        <div class="modal-body">
          <center><p>No leaves applied!</p></center>
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

<div class="container">
      <table class="table table-bordered table table-hover">
                <thead>
                    <tr>
                        <th>Employee ID</th>
						<th>Name Of The Employee</th>
						<th>Department</th>
						<th>Designation</th>
						<th>Leave</th>
						<th>From</th>
						<th>To</th>
						<th>Status</th>
                    </tr>
                </thead>
       <tbody>
	<tr>
	
<?php
mysql_connect("localhost","root","root")or die("unconnected");
mysql_select_db("emp")or die("no db");
$x = $_SESSION['sessionVar'];
$result = mysql_query("SELECT * FROM leaves WHERE id='$x'");
      if(mysql_num_rows($result) != 0)
	   {
                   while($test = mysql_fetch_array($result))
					{
						echo"<td>".$test['id']."</td>";
						echo"<td>".$test['name']."</td>";
						echo"<td>".$test['department']."</td>";
						echo"<td>".$test['designation']."</td>"; 
						echo"<td>".$test['leav']."</td>"; 
						echo"<td>".$test['date1']."</td>"; 
						echo"<td>".$test['date2']."</td>"; 
						echo"<td>".$test['status']."</td>"; 
						echo "</tr>";
					}
		}
	  else
	    {
			echo "<script>$('#myModal1').modal('show')</script>";
		}	
?>

</table>
</div>
<form method="post" action="">
</form>

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
</html>