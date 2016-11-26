
<html> 
	<head> 
	
		<title>
			Welcome to Elexo
		</title>

		<meta name="description" content="This is the main page of my E-Bus Labs" /> 
		<meta name ="keywords" content="E-Bus, interesting, RMIT, IrfanRocks" />

 		<meta charset="UTF-8"> 
 		
 		
 	</head> 

<body onload="CountDown();DefaultImage()">

    <nav class="motherdiv">
        <?php include 'navtop.php'; ?>
        <?php include 'banner.php'; ?>
        <?php include 'navleft.php'; ?>
        <div class="maincontain">

        <?php
        	$type=$_GET['id'];
			$newconn=mysql_connect("mekong.rmit.edu.vn", "s3461938", "11010100001011") or die("Could not connect: " . mysql_error());
			mysql_select_db("s3461938");

        	$result = mysql_query('SELECT * FROM PRODUCTS WHERE Pr_id="'.$type.'"');
        	$parse = mysql_fetch_array($result, MYSQL_ASSOC);
#Product Image and rating
            printf('<div class="img_star">');
            printf('<div class="productimg"><img src="'.$parse["Pr_Imange"].'" width="300px"/></div>');
            
            printf('<br/><div class="star"><span id="ratetext">Rating:</span>
                            <span class="rating">');
            $y=round($parse['Pr_Rating']);                
            for ($x=5; $x >0; $x--) 
            {
                if ($x==$y) 
                   printf('<input type="radio" class="rating-input" id="rating-input-1-'.$x.'" name="rating-input-1" checked/>
                                <label for="rating-input-1-'.$x.'" class="rating-star"></label>');
                   else
                   printf('<input type="radio" class="rating-input" id="rating-input-1-'.$x.'" name="rating-input-1"/>
                                <label for="rating-input-1-'.$x.'" class="rating-star"></label>');
                
            }              
            printf('</span><br/>('.$parse['Pr_Rating'].' stars by '.$parse['Pr_RateCount'].' votes)</div></div>');
           

            

#Product Name        	
            printf('<div class="productinfo">');
            printf('<h1>'.$parse["Pr_Name"].'</h1>');

            printf('<p id="price">Price: $'.$parse["Pr_Price"].'</p>');

            printf('<p id="specification"><u><b>Specification:</b></u></br>'.$parse["Pr_Specification"].'</p>');
            printf('<p id="description"><u><b>Description:</b></u></br>'.$parse["Pr_Description"].'</p>');



        
        mysql_close($newconn);
        ?>
        </div>
    </nav>
 
</body> 
<link rel="stylesheet" type='text/css' href="styles.css">
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.2.min.js"></script>
<script type='text/javascript' src="script.js"></script>
</html> 