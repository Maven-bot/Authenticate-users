<?php
require_once 'Header.php';
echo <<<_INIT
<head>
<link rel = 'stylesheet' href = 'MyStylesheet.css'>
</head>
_INIT;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


echo <<<_END


<form method = 'post' action = 'AddP.php' autocomplete = 'on' onsubmit = 'Validation(this)'>
<div data-role = 'fieldcontain'>
    <label></label>
       <h2> Enter Patient Details </h2> 
</div>
<div data-role = 'fieldcontain'>
    <label> Name </label>
        <input type = 'text' name = 'name' value = '' onBlur = 'Validation.js(this)'>
</div>
<div data-role = 'fieldcontain'>    
   <label> Surname </label>
        <input type = 'text' name = 'surname' value = '' onBlur = 'Validation.js(this)'>
</div>
<div data-role = 'fieldcontain'>
   <label> Sickness </label>
        <input type = 'text' name = 'sickness' value = '' onBlur = 'Validation.js(this)'>
</div>
<div data-role = 'fieldcontain'>    
   <label> Condition </label>
        <select name = "condition" size = "1" value = ''>
                            <option value = "stable"> Stable </option>
                            <option value = "critical"> Critical </option> </select></label>
</div>
<div data-role = 'fieldcontain'>    
   <label> Mobile </label>
        <input type = 'text' name = 'cell' value = '' onBlur = 'Validation.js(this)'>
</div>
<div data-role = 'fieldcontain'>    
   <label> Next of kin </label>
        <input type = 'text' name = 'kin' value = '' onBlur = 'Validation.js(this)'>
</div>
<div data-role = 'fieldcontain'>
    <label></label>
        <input data-transition = 'slide' type = 'submit' name = 'AddPatient' value = 'Add Patient'>
</div>
</didv>
</body>
</html>



_END;

if (isset($_POST['AddPatient']))
{
    
    $Name = $_POST['name'];
    $Surname = $_POST['surname'];
    $Sickness = $_POST['sickness'];
    $Condition = $_POST['condition'];
    $CellNo = $_POST['cell'];
    $Kin = $_POST['kin'];
    
    $Name = stripslashes($_REQUEST['name']);
    $Name = mysqli_real_escape_string($connect, $Name);
    $Surname = stripslashes($_REQUEST['surname']);
    $Surname = mysqli_real_escape_string($connect, $Surname);
    $Sickness = stripslashes($_REQUEST['sickness']);
    $Sickness = mysqli_real_escape_string($connect, $Sickness);
    $Condition = stripslashes($_REQUEST['condition']);
    $Condition = mysqli_real_escape_string($connect, $Condition);
    $CellNo = stripslashes($_REQUEST['cell']);
    $CellNo = mysqli_real_escape_string($connect, $CellNo);
    $Kin = stripslashes($_REQUEST['kin']);
    $Kin = mysqli_real_escape_string($connect, $Kin);
    
$sql = "INSERT INTO tblPatients VALUES (NULL,?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($connect, $sql);
$stmt->bind_param("ssssss",$Name, $Surname, $Sickness, $Condition, $CellNo, $Kin);
$stmt->execute();
if($stmt){ echo '<script type = text/JavaScript> alert("Record Added") </script>';}
$stmt->close();
$connect->close();

}


?>