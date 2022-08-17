<!DOCTYPE html>


<?php
//patients update page and functionality.  
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'Header.php';

echo <<<_INIT
<head>
<link rel = 'stylesheet' href = 'MyStylesheet.css'>
</head>
_INIT;

$ID = "";
$Name= "";
$Surname = "";
$Sickness = "";
$Condition = "";
$CellNo = "";
$Nextofkin = "";

$sql = "SELECT PatientID, PatientName, Surname, Sickness, PatCondition, CellNo, NextOfKin FROM tblPatients";
$result = mysqli_prepare($connect, $sql);
$result = $connect->query($sql);


echo '
<div class = "table">
<table = border = "1" cellspacing = "2" cellpadding = "5">
<thead>
<tr>
<th> Name </th>
<th> Surname </th>
<th> Sickness </th>
<th> Condition</th>
<th> Mobile </th>
<th> Kin </th>
<th colspan = "2"> Action </th> 
</tr>
</thead>';

//trying to get num_rows on non-object. fix it.
if ($result->num_rows > 0)
{
        while ($row = $result-> fetch_assoc())
        {
                $ID = "$row[PatientID]";
                $Name = "$row[PatientName]";
                $Surname = "$row[Surname]";
                $Sickness = "$row[Sickness]";
                $Condition = "$row[PatCondition]";
                $Mobile = "$row[CellNo]";
                $Kin = "$row[NextOfKin]";
                
                echo '<tr>    
                            <td> '.$Name.'</td>
                            <td> '.$Surname.'</td>
                            <td> '.$Sickness.'</td>
                            <td> '.$Condition.'</td>
                            <td> '.$Mobile.'</td>
                            <td> '.$Kin.'</td>
                            <td>
                            </div>
                            <div id = "button">
                            <form method = "post"> <input type = "submit" name = "edit" value = "Edit"></form>
                            </div>
                            </td>
                     </tr>';   
        }

        $result->free();
}   
echo '</table>
</div>';

if(isset($_REQUEST['edit'])){
echo <<<_END
    <form method='post' action='UpdateDetails.php' autocomplete = 'on' onsubmit = 'Validation(this)'>
        <div data-role='container' class='center'>
            <fieldset>
                <legend>Add Contact</legend>
                <input type = "hidden" name = 'ContactID' value = "$ID">
                <div id='input' data-role='fieldcontain'>
                    <label for='name'>Name</label> 
                        <input type='text' name='name' required='required' autofocus value = "$Name">             
                </div>
                <div id='input' data-role='fieldcontain'>
                    <label for='surname'>Surname</label> 
                    <input type='text' name='surname' required='required' value = "$Surname">
                </div>
                <div id='input' data-role='fieldcontain'>
                    <label for='condition'>Condition</label> 
                    <input type='text' name='condition' value = "$Condition"> 
                </div>
                <div id='input' data-role='fieldcontain'>
                    <label for='cell'>Mobile</label> 
                    <input type='text' name= 'cell' required='required' value = "$Mobile">
                </div>
                <div id='input' data-role='fieldcontain'>
                    <label for='kin'>Next Of Kin</label> 
                    <input type='text' name='kin' required='required' value = "$Kin">
                </div>
                <input class='contacts' type='submit' name='update' value='Update Contact '/>
                </fieldset>
                </div>
        </form>
_END;

}

if(isset($_POST['update']))
{
    $sql = "UPDATE tblPatients SET ContactID = '".$_POST['ContactID']."', Fullname = '".$_POST['name']."', Profession = '".$_POST['profession']."', WHERE ID = '".$_POST['ContactID']."'";
    $myresult = mysqli_prepare($connect, $sql);
    $myresult = $connect->query($sql);
   
    mysqli_close($connect);
}
//fix this thing 
/*$ID->free();
$Name->free();
$Email->free();
$Mobile->free();
$City->free();
$Address->free();
$Type->free();
*/













?>