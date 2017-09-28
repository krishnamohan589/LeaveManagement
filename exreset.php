<html>
<style type="text/css">
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
<style>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<div class="container">
  <div class="modal fade" id="myModal1" role="dialog">
   <div class="modal-dialog modal-sm"">
     <div class="modal-content">
       <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><p>Your message was sent successfully.</p></center>
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
          <center><p>Your message was not sent!</p></center>
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
</body>
</html>

<?php
mysql_connect("localhost","mohan_leav","Aa@12345")or die("unconnected");
mysql_select_db("emp")or die("no db");
session_start();
		$eid=$_SESSION['sessionVar22'];
		$result = mysql_query("select number from executives WHERE id='$eid'");
		$code=rand(100001,999999);
		$query=mysql_query("update expassword set system_code='$code' where id='$eid'");
		$row=mysql_fetch_array($result);
		$r=$row[0]; 
		$len=strlen($r);
		$ch = curl_init();
		$user="krishna97377@gmail.com:Aa@12345";
		$receipientno=$r;
		$senderID="TEST SMS"; 
		$data1="Use code";
		$data3="to reset your password.";
		$msgtxt="$data1 $code $data3";
		curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		$ar=curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
		$buffer = curl_exec($ch);
		  if($ar)
			{ 
				header("Location: exresetform.php");
				//echo "<script>$('#myModal1').modal('show')</script>";
			}
		  else
			{ 
				
				echo "<script>$('#myModal2').modal('show')</script>";
			} 
		curl_close($ch);
?>