<html>
<style>
table
{
	border-style:solid;
	position:relative;
	top:50;
	border-width:1px;
	border-color:black;
}
input
{
	padding:4;
	align:center;
	font-size:16px;
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
$dt = $_SESSION['sessionVar1'];
?>

<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
$result = mysql_query("SELECT * FROM leaves where id='$x' && date1='$dt'");
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
?>

</table>
</div>
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