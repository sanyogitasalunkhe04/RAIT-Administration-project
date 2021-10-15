<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Log in</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
	<style>
	#display_results {
	color: red;
	height :20px;
	overflow: auto;
	width: 300px;
}
	</style>
</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="logincheck.php" method="post">
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
            <input type="text" class="form-control" placeholder="User ID" autofocus name="username" id="username" style="color:black;">
			<div id="display_results"></div>
            <input type="password" class="form-control" placeholder="Password" name="password" id="password" style="color:black;">
            <button class="btn btn-lg btn-login btn-block" type="button" id="submitbutton">Sign in</button>
            
            

        </div>

      </form>

    </div>
	<script src="js/jquery.js"></script>
	<script type='text/javascript'>
		$(document).ready(function(){
			$("#submitbutton").click(function(event){
				event.preventDefault();
				search_ajax_way();
			});
		});
		function search_ajax_way(){
			$("#search_results").show();
			var user=$("#username").val();
			var pass=$("#password").val();
			$.post("logincheck.php", {username : user,password:pass}, function(data){
			$("#display_results").html(data);
			if(data=="1")
			{
				window.location.replace("http://localhost/project/index.php");
			}
			if(data==2)
			{
				window.location.replace("http://localhost/project/index2.php");
			}
			
			});
			
			};
	</script>

  </body>
</html>
