
<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="jquery/jquery-2.1.0.js"></script>
         <script type="text/javascript" src="jquery/gen_validatorv4.js"></script>
        <title> Bug fixing site </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="main.css" />
    </head>

    <script type="text/javascript" >

        function validatePassword() {

            var first_password = document.getElementById("password").value;
            var second_password = document.getElementById("second_password").value;
            var error = "";
            var illegalChars = /[\W_]/; // allow only letters and numbers

            if ((first_password.length < 7) || (first_password.length > 15)) {

                error = "The password is the wrong length. \n";

                alert(error);

                return false;


            } else if (illegalChars.test(first_password)) {

                error = "The password contains illegal characters.\n";

                alert(error);

                return false;

            } else if ( (first_password.search(/[a-zA-Z]+/)==-1) || (first_password.search(/[0-9]+/)==-1) ) {

                error = "The password must contain at least one numeral.\n";
                alert(error);

                return false;


            }
            else if(first_password != second_password){

                error = "invalid password match";
                alert(error);
                return false;

            }
            else {
                   return true;
            }
            return true;

        }

    </script>


    <script>
        $(function(){
    $('img.login').click(function(){
        $('.black_overlay').fadeIn(1000);
        $('.login_box').fadeIn(3000);	
    });
      $('img.register').click(function(){
        $('.black_overlay').fadeIn(1000);
        $('.reg_box').fadeIn(3000);	
    });
     
     
});
    </script>

    <body>
        <div id ="top"> &nbsp;</div>
        <div id="content" > 
        <div id="btn">
            <img src="picture/login.jpg" class='login'/>
            <img src="picture/reg.jpg" class="register" />
        </div>
        </div>
        
        <div id="footer">&nbsp;</div>
        
        
        <div id='login_box' style="display: none;" class="login_box" >
            <a href="index.html"><img src="picture/close.png" class="close_img" /></a>
            <img src="picture/login2.jpg" id='login_img' />
             <form action='login.php' method="post" style="margin-left: 25%;">
                    <label>Username:</label>
                    <input type="text" name="username" id="user" required />
                    <br><br>
                    <label>Password:</label>
                    <input type="password" name="pass" id="pass" required/>
                    <br><br>
                    <input type='submit' value='Login' >
                    <input type='reset' value='Cancel' >
                </form>
             <br> <br>
        </div>
        <div id="fade" class="black_overlay"></div>
        
        <div id='reg_box' style="display: none;" class="reg_box">
            <a href="index.html"><img src="picture/close.png" class="close_img" /></a>
            <img src="picture/register.jpg" id='reg_img' />
                <form action='registeration.php' method="post" id="reg_form" onsubmit="return validatePassword()" style="margin-left: 25%; margin-top: 0px;">
                    <table border='0' cellpadding='5' cellspacing='7'>

                 <tr>
                     <td> <label>First Name:</label> </td>
                     <td><input type="text" name="fname" id="fname" on="return first_name_validation()" max="50" required/> </td>
                    
                    </tr>  
                    <tr>
                        <td><label>Last Name:</label></td>
                        <td><input type="text" name="lname" id="lname" max="50" required/> </td>
                   
                    </tr>
                    <tr>
                        <td><label>Email:</label> </td>
                        <td><input type="email" name="email" id="email" required /> </td>
                  
                    </tr>
                        <tr>
                            <td> <label>Username:</label></td>
                            <td><input type="text" name="username" id="username" required </td>
                        </tr>
                    <tr cellpadding="2" cellspacing="2">
                        <td><label>Phone Number:</label> </td>
                        <td><p style="margin-left: 20px; margin-bottom: 0px; margin-top: 0px;">Format xxx-xxxx-xxxx</p>
                            <input type="text" name="phone_no" id="phone_no" pattern="^\d{3}-\d{4}-\d{4}$" required /> </td>
                    
                    </tr>
                    <tr>
                        <td><label>Password:</label> </td>
                        <td><input type="password" name="password" id="password"  required /> </td>
                    
                    </tr>
                    <tr>
                        <td><label>Re-type password:</label> </td>
                        <td><input type="password" name="second_password" id="second_password" required /> </td>
                    
                    </tr>
                    <tr>
                        <td>&nbsp; </td>
                        <td>
                            <input type='submit' value='Register' >
                            <input type='reset' value='Cancel' > </td>
                    </tr>
                    </table>
                </form>
            
             
            </div>
        
        
    </body>
</html>
