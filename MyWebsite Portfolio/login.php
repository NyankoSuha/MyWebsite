<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
	<header>
		 <h2 class = "logo">My Portfolio</h2>
		 <nav class = "navigation">
		     <a align="center" href = "index.html">Home</a>
			 <a href = "#">About</a>
			 <a href = "#">Contact</a>
			 <a href = "login.html" class="active">Login</a>
		 </nav>
	</header>
	
	<div class ="main">
		<input type="checkbox" id="chk" aria-hidden="true">
		
		<div class="signup">
			<form>
				<label for="chk" aria-hidden="true">Sign up</label>
				<input type ="text" name="txt" placeholder="User name" required="">
				<input type ="email" name="email" placeholder="Email" required="">
				<input type ="Password" name="pswd" placeholder="Password" required="">
				<button>Sign up</button>
			</form>
		</div>
		
		<div class="login">
			<form>
				<label for="chk" aria-hidden="true">Login</label>
				<input type ="email" name="email" placeholder="Email" required="">
				<input type ="Password" name="pswd" placeholder="Password" required="">
				<div class ="remember-forgot">
					<label><input type="checkbox">Remember Me</label>
				</div>
				<button>Login</button>
			</form>
		</div>
	</div>
		
	
</body>
</html>