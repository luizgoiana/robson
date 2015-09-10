<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin - Login</title>
<link href="styles/layout.css" rel="stylesheet" type="text/css" />
<link href="styles/login.css" rel="stylesheet" type="text/css" />
<!-- Theme Start -->
<link href="themes/blue/styles.css" rel="stylesheet" type="text/css" />
<!-- Theme End -->
<script src="scripts/jquery.js" type="text/javascript"></script> 
<script src="scripts/jquery.validate.js" type="text/javascript"></script> 
<script type="text/javascript"> 
$(document).ready(function() {
$(".error").hide();
	$("#loginForm").validate({
		errorLabelContainer: $("#loginForm div.error")
	});
});
</script> 


</head>
<body>
	<div id="logincontainer">
    	<div id="loginbox">
        	<div id="loginheader">
            	<img src="themes/blue/img/cp_logo_login.png" alt="Control Panel Login" />
            </div>
            <div id="innerlogin">
            	<form action="action.php" method="post"  id="loginForm" name="loginForm">
				<input type="hidden" id="acao" name= "acao" value="login" />
                	<p>Entre com o seu usuário:</p>
                		<input type="text" id="clogin" name ="clogin" class="logininput required" title="Login: Campo obrigatório"  />
                    <p>Entre com a sua senha:</p>
					
                	<input type="password" id="cpassword" name ="cpassword" class="logininput required" title="Senha: Campo obrigatório"  />
                   
                   	<input type="submit" class="loginbtn" value="Submit" /><br />
					<div class="error"></div> 

                </form>
            </div>
        </div>
        <img src="img/login_fade.png" alt="Fade" />
    </div>
</body>
</html>