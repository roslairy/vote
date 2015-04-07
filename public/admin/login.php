<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台登录页面</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/login.css">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<script language="javascript" src="js/checklogin.js"></script>
</head>
<body>
	<div id="container">
		<form action="./login_chk.php" name="form1" method="post" class="form-signin">
			<h2 class="form-signin-heading">管理员请登入</h2>
        	<input type="text" name="name" class="input-block-level" placeholder="你的ID">
        	<input type="password" name="pwd" class="input-block-level" placeholder="密码">
        	<input class="btn btn-large btn-primary" onclick="check();" type="submit" value="登入"></input>
		</form>	
	</div>
</body>
</html>