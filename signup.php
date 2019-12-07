<html>
	<head>
	</head>
	
	<body>
		<h1>Sign Up With All Your Personal Data Here!</h1>
		

<?php

	function label($label){
	echo "<label>$label</label>";
	}

	function input($type, $holder, $name, $req, $val){
  echo "<input type=$type placeholder=$holder value='' name=$name $req=$val />";
  }
	

  label("Username");
	input("text", "Username", "usrnam", "minlength","2");
	label("Email Address");
	input("email","you@email.com", "email", "null","null" );
	label("First Name");
	input("text","First Name", "firstname", "null","null");
	label("First Name");
	input("text","First Name", "firstname", "null","null");
	label("Password")
	input("password","Password","psw", "null", "null");
	label("Confirm Password")
	input("password", "Confirm Password", "psw2", "null", "null");
	label("Age");
	input("number", "Your age", "age",	"min", "18");
	
  

?>
</body>
</html>	
