<?php
        	$Email=$_POST['email'];
        	$Password=$_POST['password'];

			$newconn=mysql_connect("mekong.rmit.edu.vn", "s3461938", "11010100001011") or die("Could not connect: " . mysql_error());
			mysql_select_db("s3461938");

        	$result = mysql_query('SELECT * FROM `CUSTOMERS` WHERE C_Email="'.$Email.'"');
                if (mysql_num_rows($result)<0) {
                        printf("No such email existed in our database");
                }
                else
                {
                        $parse = mysql_fetch_array($result, MYSQL_NUM);

                        if ($Password==$parse[1]) {
                                printf("Sucessfully logged in!");
                        }
                        else
                                {
                                        printf("Wrong Password!");
                                }
                }
                mysql_close($newconn);

        ?>