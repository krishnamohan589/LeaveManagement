<html>
<head>
<title>Main</title></head>

<style>
body
{
	width:100%;
    height: 100%;
    background-image: url("mainn.jpg");
    background-position: center;
    background-size: 100% 100%;
    background-repeat: no-repeat;
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
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
    history.pushState(null, null, document.title);
	window.addEventListener('popstate', function ()
   	  {
			history.pushState(null, null, document.title);
      });
</script>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav navbar-right"">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="glyphicon glyphicon-log-in"></span> Login </a>
            <ul class="dropdown-menu">
				<li><a href="loginp.php">Employee Login</a></li>
				<li><a href="loginp1.php">Executive Login</a></li>
			</ul>
        </li>
    </ul>

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
 
 
 
 

 