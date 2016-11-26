
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
			<form name="inputform" class="register">
			<h1 id="formtitle">Customer Login</h1>
			
			<h2 id="inputtitle">Email:</h2>
			<input type="text" name="email"><br>
					
			<h2 id="inputtitle">Password:</h2>
			<input type="password" name="password"><br>
			
			<br/>
			<input type="button" value="Log in" onclick="ValidateLogin()">			
			</form>
        </div>
        
       
    </nav>
 
</body> 
<link rel="stylesheet" type='text/css' href="styles.css">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.2.min.js"></script>
<script type='text/javascript' src="script.js"></script>
</html> 