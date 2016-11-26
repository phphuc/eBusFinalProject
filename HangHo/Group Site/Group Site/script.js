//These functions are to change image for the banner//



    function DefaultImage() {
            document.getElementById("Img1").style.visibility = "visible";
            document.getElementById("Img1").style.opacity = "1";
            document.getElementById("C1").style.backgroundColor = "rgb(70,70,70)";
    }
    function ChangeImage(intNav) {
        var intImg = 3;
        var intSec = 4;
        for (var i = 0; i < 3; i++)
        {
            document.getElementById("C" + i).style.backgroundColor="rgb(250,250,250)"
            document.getElementById("Img" + i).style.visibility = "hidden"
            document.getElementById("Img" + i).style.opacity = "0";
        }

        document.getElementById("Img" + intNav).style.visibility = "visible"
        document.getElementById("Img" + intNav).style.opacity = "1"
        document.getElementById("C" + intNav).style.backgroundColor = "rgb(70,70,70)";
                
    }
    
//These functions are to countdown time//
    
        function CountDown() {

            var dtEnd = new Date(2016, 00, 01, 23, 59, 59);
            var dtCur = new Date();
            var secDiff = Math.round(dtEnd.getTime() / 1000 - dtCur.getTime() / 1000);
            var Interval = setInterval(function(){
                document.getElementById("timecounter").innerHTML = secDiff.toString();
                if (secDiff > 0) {
                    secDiff = secDiff -1;
                }            
            }
            , 1000);
        }
//Validate form function//
function ValidateRegister( ) { 
    var isValid = true;
    var dataString = 'firstname=' + document.inputform.firstname.value + 
                    '&lastname=' + document.inputform.lastname.value +
                    '&email=' + document.inputform.email.value +
                    '&password=' + document.inputform.password.value;
    if ( document.inputform.firstname.value == "" ) { 
        alert ( "Please enter your Firstname!" ); 
        isValid = false;
    } else if ( document.inputform.lastname.value=="" ) { 
            alert ( "Please enter your Lastname!" ); 
            isValid = false;
    } else if ( document.inputform.email.value == "" ) { 
            alert ( "Please enter your Email!" ); 
            isValid = false;
    } else if ( document.inputform.reemail.value == "" ) { 
            alert ( "Please re-enter your Email!" ); 
            isValid = false;
    } else if ( document.inputform.email.value !== document.inputform.reemail.value ) { 
            alert ( "Email does not match!" ); 
            isValid = false;
    } else if ( document.inputform.password.value == "" ) { 
            alert ( "Please enter your Password!" ); 
            isValid = false;
    } else if ( document.inputform.repassword.value == "" ) { 
            alert ( "Please re-enter your Password!" ); 
            isValid = false;
    } else if ( document.inputform.password.value !== document.inputform.repassword.value ) { 
            alert ( "Password does not match!" ); 
            isValid = false;
    }
    else {
        $.ajax({
        type: "POST",
        url: "DBParse.php",
        data: dataString,
        cache: false,
        success: function(html) {
        alert(html);
        document.inputform.reset();
        }
        });
         

        }
        return false;
    }


function ValidateLogin ( ) { 
    var isValid = true;
    var dataString = 'email=' + document.inputform.email.value + 
                    '&password=' + document.inputform.password.value;
    if ( document.inputform.email.value == "" ) { 
            alert ( "Email must not be blank!" ); 

    } else if ( document.inputform.password.value == "" ) { 
            alert ( "Password must not be blank!" ); 
    }
    else
    {
        $.ajax({
        type: "POST",
        url: "DBCheckCustomer.php",
        data: dataString,
        cache: false,
        success: function(html) {
        alert(html);
        }
        });
         

        }
        return false;
    }
