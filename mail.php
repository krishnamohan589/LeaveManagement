<?php
session_start();
$x = $_SESSION['sessionVar'];
?>

<html>
<style type="text/css">
  
::-webkit-input-placeholder 
   {
       text-align: center;
   }
 .container
   {
       height: 100%;
	   position:relative;
	   top:70;
	   left:300;
   }
  h1 
   {
        text-align: center;
        font-size: 80;
        color: black;
        font-weight: 200;
		font-family: "Open Sans", Helvetica, sans-serif;
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
 .input 
   {
        width: 75%;
        height: 50px;
        display: block;
        margin: 0 auto 15px;
        padding: 0 15px;
        border: none;
        font-family: "Open Sans", Helvetica, sans-serif;
   }
  #myModal1
   {
		position:relative;
		left: -250;
		top: 100; 
   }
  #myModal2
   {
		position:relative;
		left: -250;
		top: 100; 
   } 
  #myModal3
   {
		position:relative;
		left: -250;
		top: -1200;
   } 
  #rem
   {
        position: relative;
        width: 85%;
        height: 50px;
        display: block;
        margin: 30px auto 30px;
        color:black;
        background-color: white;
        border: none;
        -webkit-transition-duration: 0.4s; 
		border: 2px solid #008CBA;
		border-radius:4px;
   }
  #rem:hover 
   {
        background-color: #008CBA;
		color: white;
   } 
  body
   {
		overflow-x:hidden;
        overflow-y:hidden;
   }
 #logbox
   {
		position:relative;
        padding: 10px;
        margin: 50px auto;
        width: 340px;
        top:-1860;
		left:320;
        -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
   }
 img
    {
	    position:relative;
		left: 180;
		top: -2340;
	    border-radius: 4px;
		height:300px;									
		width: 300px;
    }   
</style>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

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
          <center><p>Your Mail was sent successfully.</p></center>
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
          <center><p>Your Mail was not sent !</p></center>
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
          <center><p>Please fill all details!</p></center>
        </div>
      </div>
    </div>
  </div>
</div>

	  
<div class="container">
	<div class="col-md-6">
        <div id="logbox">
              <form method="post" action="">
                  <h1>Remind Employee</h1><br>
				    <input type="text" placeholder="Enter Employee ID" id="eid" name="eid" class="input pass">
                    <input type="text" placeholder="Enter Message" id="msg" name="msg" class="input pass">
					<input type="submit" id="rem" name="rem" value="Remind">
			  </form>
		</div>
	</div>
</div>
 <img src="mailimg.png">
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
if(isset($_POST['rem']))
 {
	 $eid=$_POST['eid'];  
	 $msg=$_POST['msg']; 
		if(empty($eid && $msg))
		 {
			 echo "<script>$('#myModal3').modal('show')</script>";
		 }
		else
		 {
			$result = mysql_query("select email from employees WHERE id='$eid'");
			while ($row = mysql_fetch_assoc($result)) 
			  {
				   $a= $row['email'];
				   echo $a;
			  }
			$to = $a;
			$subject = "My subject";
			$txt = "Hello world!";
			$headers = "From: krishna97377@gmail.com" . "\r\n" ."CC: krishna97377@gmail.com";
			$b=mail($to,$subject,$msg,$headers);
		      if($b)
			   {
					echo "<script>$('#myModal1').modal('show')</script>";
			   }
			  else
		       {	
					echo "<script>$('#myModal2').modal('show')</script>";
		       }		 
         }
 }
?>
