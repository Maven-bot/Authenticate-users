
    
    <?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();    
session_destroy();

die("<br> You have been logged out. Please <a data-transition = 'slide' 
        href =  'index.php'> click here</a> 
        to login again."); 


?>
