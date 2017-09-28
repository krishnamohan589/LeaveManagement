<html>
<head>
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
 input
  {
		padding:4;
		align:center;
		font-size:16px;
  }
 table
  {
		border-style:solid;
		position:relative;
		top:50;
		border-width:1px;
		border-color:black;
  }
 ul.dropdown-menu
  {
		//background-color: black;
  }
 a 
  {
		text-decoration: none;
  }
 a:hover 
  {
		text-decoration:none;
  }
</style>
</head>

<?php
session_start();
$x=$_SESSION['sessionVar'];
?>

<body>

<script>
function run()
{
    window.location = 'emplogin.php';
}
</script>

<script>
$(document).bind("contextmenu",function(e) 
 {
	e.preventDefault();
 });
 </script>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<nav class="navbar navbar-inverse">
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
mysql_connect("localhost","mohan_leav","Aa@12345")or die("unconnected");
mysql_select_db("emp")or die("no db");
$result = mysql_query("SELECT * FROM leaves");
while($test = mysql_fetch_array($result))
  {
						$kk=$test['id'];
						$flagv= mysql_query("SELECT flag FROM leaves where id='$kk'");
						echo "<tr>";
						echo"<td>".$test['id']."</td>";
						echo"<td>".$test['name']."</td>";
						echo"<td>".$test['department']."</td>";
						echo"<td>".$test['designation']."</td>"; 
						echo"<td>".$test['leav']."</td>"; 
						echo"<td>".$test['date1']."</td>"; 
						echo"<td>".$test['date2']."</td>";
						$are1=$test['status'];
  $are="Pending";
  //echo $are.$are1;
  if($are1==$are)
  {
	  echo "<td><a href=\"edit3.php?id=".$test['id']." &date1=".$test['date1']."\">Approve</a><br><a href=\"edit4.php?id=".$test['id']." &date1=".$test['date1']."\">Disapprove</a></td>";
  }
  else
{
	echo"<td>".$test['status']."</td>";
}	
						//echo '<td><cb><input type="radio" name="status[' . $test['status'] . ']" value="not approved">Not Approved<br>
						//<input type="radio" name="status[' . $test['status'] . ']" value="approved">Approved</cb></td>';
						//echo "<td>" . '<input type="submit" name="submit" value="Accept">' . "</td>";
						//$vrb=$test['date1'];
						//$_SESSION['sessionVar10']=$vrb;
						// echo "<td><a href=\"edit3.php?id=".$test['id'].'" '.$test['date1']. "\">Approve</a></td>";
						/*if($flagv==0)
						    {
								echo "<td><a href=\"edit3.php?id=".$test['id']." &date1=".$test['date1']."\">Approve</a><br><a href=\"edit4.php?id=".$test['id']." &date1=".$test['date1']."\">Disapprove</a></td>";
							}
						  else
							{
								echo"<td>".$test['status']."</td>";
							}	*/
						echo "</tr>";
   }
echo "</table>";
?>
</table>
</div>
<form method="post" action="">
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