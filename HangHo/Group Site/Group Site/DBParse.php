<?php

        	$Fname=$_POST['firstname'];
        	$Lname=$_POST['lastname'];
        	$Email=$_POST['email'];
        	$Password=$_POST['password'];

			$newconn=mysql_connect("mekong.rmit.edu.vn", "s3461938", "11010100001011") or die("Could not connect: " . mysql_error());
			mysql_select_db("s3461938");

        	$result = mysql_query('INSERT INTO CUSTOMERS(C_FName,C_LName,C_Email,C_Password)
        							VALUE ("'.$Fname.'","'.$Lname.'","'.$Email.'","'.$Password.'");')
        			or die(mysql_error());
        			
        	mysql_close($newconn);
                printf('Sucessfully Registered!');

        ?>