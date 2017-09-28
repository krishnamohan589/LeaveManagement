<html>
<style>
#pb
{
	position:relative;
	top:80;
	left:50;
}
#b
{
	position:relative;
	top:20;
	left:-2;
}
.form-gap 
{
   padding-top: 70px;
}
</style>
<body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

<div class="form-gap"></div>
<div id="pb" class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div  class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                 <div class="panel-body">
					<form id="register-form" role="form" autocomplete="off" class="form" method="post">
					  <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input id="eid" name="eid" placeholder="Enter Executive ID" class="form-control"  type="number">
                        </div>
                      </div>
					  <div class="form-group">
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
 </body>
</html>

<?php
mysql_connect("localhost","mohan_leav","Aa@12345")or die("unconnected");
mysql_select_db("emp")or die("no db");
session_start();
if(isset($_POST['b']))
{
	$eid=$_POST['eid']; 
	$_SESSION['sessionVar22']=$eid;
	//$query=mysql_query("insert into expassword(id) values('$eid')");
	header("Location: exreset.php");
}
?>