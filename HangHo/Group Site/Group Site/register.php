
<html> 
	<head> 
	
		<title>
			Welcome to Elexo
		</title>

		<meta name="description" content="This is the main page of my E-Bus Labs" /> 
		<meta name ="keywords" content="E-Bus, interesting, RMIT, IrfanRocks" />

 		<meta charset="UTF-8"> 
 		
 		
 	</head> 

<body onload="CountDown()">

    <nav class="motherdiv">
        <?php include 'navtop.php'; ?>
        <div class="middleform">
			<form name="inputform" class="register" id="register">
			<h1 id="formtitle">New Customer Registration</h1>
			<h2 id="inputtitle">First name:</h2>
			<input type="text" name="firstname"><br>
			
			<h2 id="inputtitle">Last name:</h2>
			<input type="text" name="lastname"><br>
			<h2 id="inputtitle">Email:</h2>
			<input type="text" name="email"><br>
			<h2 id="inputtitle">Retype Email:</h2>
			<input type="text" name="reemail"><br>		
			<h2 id="inputtitle">Password:</h2>
			<input type="password" name="password"><br>
			<h2 id="inputtitle">Retype Password:</h2>
			<input type="password" name="repassword">
			<br/>
			<input type="button" value="Submit" onclick="ValidateRegister()">				
			</form>
        </div>

       
    </nav>
 
</body> 
<link rel="stylesheet" type='text/css' href="styles.css">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.2.min.js"></script>
<script type='text/javascript' src="script.js"></script>

</html> 