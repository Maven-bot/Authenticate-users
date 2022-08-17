<?php
require_once 'Functions.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo <<<_MAIN
<link rel = 'stylesheet' href = 'MyStylesheet.css'/>
<h2> Patient Management System </h2>
_MAIN;
echo <<<_LOGGEDIN

    <div class = "dropdown">
    <button class = "dropbutton">Menu</button>
    <div class = "dropdown-content">
        <a href = 'Menu.php'> Home</a>
        <a href = 'AddP.php'> Add Patient </a> 
        <a href = 'DeletePatient.php'> Delete Patient </a>
        <a href = 'UpdatePatient.php'> Update Patient </a>
        <a href = 'Logout.php'> Logout </a>
</div>
</div>
_LOGGEDIN;







/*
echo <<<_LOGGEDIN
    <div class = "dropdown">
    <button class = "dropbutton">Menu</button>
    <div class = "dropdown-content">
        <a data-role= 'button' data-inline = 'true' data icon = 'home' data-transition = "slide" href = 'index.php'> Home</a>
        <a data-role = 'button' data-inline = 'true' data-transition = "slide" href = 'AddP.php'> Add Patient </a> 
        <a data-role = 'button' data-inline = 'true' data-transition = "slide" href = 'DeletePatient.php'> Delete Patient </a>
        <a data-role = 'button' data-inline = 'true' data-transition = "slide" href = 'UpdatePatient.php'> Update Patient </a>
        <a data-role = 'button' data-inline = 'true' data-transition = "slide" href = 'Logout.php'> Logout </a>
</div>
</div>
_LOGGEDIN;
*/
?>
