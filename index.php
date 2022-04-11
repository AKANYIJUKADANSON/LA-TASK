


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latask auth</title>
    
    <!-- <link rel="stylesheet" href="sliding login sign up.css"> -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
		
	<!-- <h2>LA^TASK</h2> -->
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<!-- Form validation and action will be in the config.php -->
			<form action="config/config.php" method="POST"> 
				<!-- LOGO -->
				<div class="logo">
					<img id="logo-img" src="icons/logo.png" alt="LA^TASK">
				</div>
				<h2>Create Account</h2>
				<!-- Social media icons -->
				<div class="social-container">

					<a href="#" class="social"> <img src="icons/f.png" alt=""> </a>
					<a href="#" class="social"> <img src="icons/i.png" alt=""> </a>
					<a href="#" class="social"> <img src="icons/t.png" alt=""> </a>
					<a href="#" class="social"> <img src="icons/w.png" alt=""> </a>



					<!-- <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a> -->
				</div>

				<!-- Registration -->
				<span>or use your details for registration</span>
				<!-- TODO: include required option************************** -->
				<input class="input" type="text" name="fname" placeholder="Name"/>
				<input class="input" type="text" name="company" placeholder="Company" />
				<input class="input" type="tel" name="telNo" placeholder="Nobile Number"/>
				<input class="input" type="email" name="email" placeholder="Email" />
				<input class="input" type="password" name="password" placeholder="Password" />

				<input class="button" type="submit" name="register" value="Sign Up">
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="config/config.php" method="POST">
				<!-- LOGO -->
				<div class="logo">
					<img id="logo-img" src="icons/logo.png" alt="LA^TASK">
				</div>
				<h2>Login</h2>
				<div class="social-container">

					<a href="#" class="social"> <img src="icons/f.png" alt=""> </a>
					<a href="#" class="social"> <img src="icons/i.png" alt=""> </a>
					<a href="#" class="social"> <img src="icons/t.png" alt=""> </a>
					<a href="#" class="social"> <img src="icons/w.png" alt=""> </a>

					<!-- <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a> -->
				</div>

				<!-- Login -->
				<span>or use your account</span>
				

				<!-- Select will determine the type of table to store data -->
				<select class="input" name="role" required>
							<option>Login As:</option>
                            <option value="admin">Admin</option>
                            <option value="staff">Staff</option>
                            <option value="client">Client</option>
                </select>

				<input class="input" type="email" name="email" placeholder="Email ID" required/>
				<input class="input" type="password" name="password" placeholder="Password" required />
				<a href="#">Forgot your password?</a>
				<input class="button" type="submit" name="login" value="Sign In">
			</form>
		</div>

		<!-- Overlay -->
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>To keep connected, please login with your personal info</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Hello, Friend!</h1>
					<p>Create an account to be part of <br> <b class="latsk">LA^TASK</b> </p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div> 
	</div>

	<footer>
		<p class="footer">
			<!-- All rights reserved &copy <a target="_blank" href="#">DanTechx</a>. -->
			Designed by| <a target="_blank" href="https://dantechx.com"> DanTechx</a>.
			
		</p>
	</footer>


		<script src="main.js"></script>
</body>
</html>