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
		top: 90; 
	}
  #myModal2
	{
		position:relative;
		left: -250;
		top: 90;  
	} 
  #myModal3
	{
		position:relative;
		left: -250;
		top: -1200;
	} 
 .inputButton 
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
  .inputButton:hover 
    {
        background-color: #008CBA;
		color: white;
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
   body
   {
		overflow-x:hidden;
        overflow-y:hidden;
   }	
</style>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<body>
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
                  <h1>Request Executive</h1><br>
				 <input type="text" placeholder="Enter Executive ID" id="eid" name="eid" class="input pass"/>
                    <input type="text" placeholder="Enter Message" id="msg" name="msg" class="input pass"/>
					<input type="submit" id="rem" name="rem" value="Request" class="inputButton"/>
				</form>
			</div>
		   </div>
		</div>
		<img src="sms.png">
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
include("./src/NexmoMessage.php");
mysql_connect("localhost","mohan_leav","Aa@12345")or die("unconnected");
mysql_select_db("emp")or die("no db");
if(isset($_POST['rem']))
  {
		$eid=$_POST['eid'];  
		$num=$_POST['num']; 	
		$msg=$_POST['msg']; 
		$result = mysql_query("select number from executives WHERE id='$eid'");
		$row=mysql_fetch_array($result);
		$r=$row[0]; 
		$ch = curl_init();
		$user="krishna97377@gmail.com:Aa@12345";
		$receipientno=$r;
		$senderID="TEST SMS"; 
		$msgtxt=$_POST['msg']; 
		curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
		$buffer = curl_exec($ch);
		  if(empty ($buffer))
			{ 
				echo " buffer is empty "; 
			}
		  else
			{ 
				echo $buffer; 
			} 
		curl_close($ch);
  }
?>