<?php
//require_once 'Header.php';
session_start();
echo <<<_INIT
<!DOCTYPE html>
<html>
<head>
<link type = "text/css" rel="stylesheet" href="MyStylesheet.css"/>
<script src = 'Validation.js'></script>
<script src = 'jquery-2.2.4.min.js'></script>
<script src = 'jquery.mobile-1.4.5.min.js'></script>
</head>
<body>

_INIT;




$error = $user = $pass = "";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_POST['user']))
    {
        $user = 'Praxis';  //sanitizeString($_POST['user']);
        $pass =  '123456'; //sanitizeString($_POST['pass']);
        if($user = "" || $pass = "")
            {
                $error = 'All Fields Must Be Entered';
                      
            }
        else 
            {
               // $result = queryMysql("SELECT AdminUserName, AdminPassword FROM tblAdmin WHERE AdminUserName = '$user' AND AdminPassword = '$pass'" );
                
                //if ($result->num_rows==0)
                    {
                        $error = "Invalid login attempt";
                    }
                //else
                    {
                        $_SESSION['user'] = $user;
                        $_SESSION['pass'] = $pass;
                        die ("You are now logged in. Please <a data-transition = 'slide' href = 'Menu.php?view=$user'> click here</a> to continue. </div></body></html>");
                    }
                }    
            }
            
            
echo <<<_END


<form method = 'post' action = 'Login.php'>
   <div class = "box"> 
   
        <label></label>
        <span class = 'error'> $error</span>
        
        <div data-role = 'fieldcontain'>
        <h2>Please enter your details to login</h2>
        </div>
        <div id = 'username'>
        <div data-role = 'fieldcontain'>
        <input type = 'text' name = 'user' placeholder = 'username' id = 'username'>
        </div>
        </div>
        <div id = 'password'> 
        <div data-role = 'fieldcontain'>
        <input type = 'password' name = 'pass' placeholder = 'password' id = 'password'>
        </div>
         </div>
        <div data-role = 'fieldcontain'>
        <div class = 'submit'>
        <label></label>
        <input data-transition = 'slide'  name = 'login' type = 'submit' value = 'Login'>
        </div>
        </div>
        </div>
        
    </form>
</div>
</body>
</html>    

_END;


            
            

?>
       