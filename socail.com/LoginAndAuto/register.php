<?php 
require("../MysqliConnect/mysqli_con.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" href="../StyleForHomePage/style.css">
	<link rel="stylesheet" href="/LoginAndAuto/StyleForLoginAndRegister/style.css">

	<!--     Google Fonts - Anton    -->

	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">


</head>
<body>
	<section class="HomePage" id="HomePAGE">
	 	<div class="HomeDivFirst">
	 		<p class="HomeLogo">LOGO</p>
	 	 <nav>
	 		<ul class="HomeUl"> 
	 			<li class="HomeLi"><a class="HomeA" href="/home.php">Exit</a></li>
	 			<li class="HomeLi"><a class="HomeA" href="#">About us</a></li>
	 			<li class="HomeLi"><a class="HomeA" href="\LoginAndAuto\login.php">Login</a></li>	 			
	 		</ul>
	 	 </nav>
        </div>

        <h1 class="h1Login">Register</h1>
        <div class="centerLogin">
        <form action="register.php" method="POST">
     	<input style="text-align:center;
     	              font-size:36px;   
     	              font-family: 'Anton' , sans-serif;  
     	              border-radius:10px;           
     	              " class="inputLogin" type="login" name="login" placeholder="Login" value="<?php echo $_POST['login']; ?>"><br>
     	<input style="text-align:center;
     	              font-size:36px;   
     	              font-family: 'Anton' , sans-serif;    
     	              border-radius:10px;              
     	              " class="inputLogin" type="password" name="pass" placeholder="Password" value="<?php echo $_POST['pass']; ?>"><br>
     	<input style="text-align:center;
     	              font-size:36px;   
     	              font-family: 'Anton' , sans-serif;    
     	              border-radius:10px;              
     	              " class="inputLogin" type="password" name="passTwo" placeholder="Repeat password" value="<?php echo $_POST['passTwo']; ?>"><br>
     	<button class="buttonLogin" type="submit" name="sub"><p class="pLogin">Register</p></button>
        </form>
        <p class="PodTextLogin">	
        If you are registered, please <span class="registerLogin"><a class="aLogin" href="\LoginAndAuto\login.php">login</a></span>.
        </p>
        </div>

     </section>
</body>
</html>