<?php
session_start();
?>

<html>
<style>
::-webkit-input-placeholder 
{
    text-align: center;
}
#pw1
{
	font-size-141;
	height:35;
}
#pw2
{
	height:35;
}
#pb
{
	position:relative;
	top:30;
	left:10;
}
#b
{
	position:relative;
	top:-5;
	left:-2;
}
.form-gap 
{
   padding-top: 70px;
}
#myModal1
{
  -open -fixed
  position:relative;
   left: 20;
   top: 200; 
}
#myModal2
{
   -open -fixed
   position:relative;
   left: 20;
   top: 200; 
}
#eye1
{

   position:relative;
   top:25;
   left:125;
}
#eye2
{

   position:relative;
   top:25;
   left:125;
}
#divCheckPassword
{

   position:relative;
   top:-60;
   left:305;
   font-color:green;
}
</style>
<body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<div class="container">
 <div class="modal fade" id="myModal1" role="dialog">
   <div class="modal-dialog modal-sm"">
     <div class="modal-content">
       <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><p>Password reset successfull.</p></center>
        </div>
        <div class="modal-footer">
          <center><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center>
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
          <center><p>Invalid reset code.</p></center>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="form-gap"></div>
<div id="pb" class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div  class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Reset Password</h2>
					<div class="panel-body">
					<form id="register-form" role="form" autocomplete="off" class="form" method="post">
					<div class="form-group">
					  <input id="user_code" name="user_code" placeholder="Enter Reset Code" class="form-control"  type="number"></div>
                       	<div class="form-group">
						   <div id="eye1"><span toggle="#pw1" class="fa fa-fw fa-eye field-icon toggle-password"></span></div> 
                      
                          <input id="pw1" name="pw1" placeholder="Type New Password" class="form-control"  type="password">
                        </div>
						<div class="form-group">
						  <div id="eye2"><span toggle="#pw2" class="fa fa-fw fa-eye field-icon toggle-password"></span></div>
                          <input id="pw2" name="pw2" placeholder="Re-Type New Password" class="form-control"  type="password">
						</div>
                        </div>
						<div class="form-group">
							<div id="divCheckPassword"></div>
							<input id="b" name="b" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                      </div>
					</form>
					</div>
                </div>
              </div>
            </div>
          </div>
	  </div>
</div>

<script>
        function run()
  		 {
            var seconds = 5;
			  setInterval(function ()
			   {
                   seconds--;
					 if (seconds == 0) 
					   {
						    window.location = "loginp1.php";
                       }
               }, 500);
         }
</script>

<script>
	$(document).ready(function(){
	$('#show_hide').on('click', function(){
	var passwordField = $('#password');
	var passwordFieldType = passwordField.attr('type');
	 if(passwordFieldType == 'password')
       {
		    passwordField.attr('type', 'text');
		    $(this).text('Hide');
       }
	 else
	   {
			passwordField.attr('type', 'password');
			$(this).text('show');
	   }
    });
});
</script>

<script>
  $(".toggle-password").click(function()
	{
		$(this).toggleClass("fa-eye fa-eye-slash");
		var input = $($(this).attr("toggle"));
		 if (input.attr("type") == "password") 
			{
				input.attr("type", "text");
			} 
		 else 
			{
				input.attr("type", "password");
			}
	});
</script>

<script>
$('#pw2').on('keyup', function () 
  {
      var password = $("#pw1").val();
      var confirmPassword = $("#pw2").val();
		if (password != confirmPassword)
		 {		
			//$("#divCheckPassword").attr("src","h.jpg");
			$("#divCheckPassword").html("Passwords do not match.");
			//$("#divCheckPassword").show("<span class='glyphicon glyphicon-remove'></span>");
		 }
	    else 
	     {
			//$("#divCheckPassword").show('<span class="glyphicon glyphicon-ok"></span>');
			//$("#divCheckPassword").attr("src","applyleave.jpg");
			$("#divCheckPassword").html("Passwords match.");
		 }
  });
</script>

</body>
</html>

<?php
mysql_connect("localhost","mohan_leav","Aa@12345")or die("unconnected");
mysql_select_db("emp")or die("no db");
if(isset($_POST['b']))
{
		 $eid=$_SESSION['sessionVar22'];
		 $user_code=$_POST['user_code']; 
		 $pw1=$_POST['pw1']; 
		 $pw2=$_POST['pw2'];
		 $result = mysql_query("select system_code from expassword WHERE id='$eid'");
		 $row=mysql_fetch_array($result);
		 $system_code=$row[0]; 
		 $query1=mysql_query("update expassword set user_code='$user_code' where id='$eid'");
		  if($user_code==$system_code)
		  {
			  $query=mysql_query("update executives set password='$pw2' where id='$eid'");
			   if($query)
			   {
				   echo "<script>$('#myModal1').modal('show')</script>";
				   echo '<script type="text/javascript"> run(); </script>';
			   }		 
		  }
		  else
		  {
			  
			  echo "<script>$('#myModal2').modal('show')</script>";
			  
		  }
}
?>		