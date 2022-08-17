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
                  /*  $Contactname = array();
                    $contactRowIds = array();
                    $contactIds = showPatient("SELECT PatientID FROM tblPatients WHERE PatientName =$Contactname ");
                    $length = count($contactIds);
                    for($i = 0; $i < $length; $i++){
                        $index = array_pop($contactIds);

                        $Contactname[$i] = getRowData(queryMysql("SELECT PatientName FROM tblPatients WHERE PatientID = $index "));
                        $contactIds[$i] = $index;
                    }
*/
$ID = "";
$Name= "";
$Surname = "";
$Sickness = "";
$Condition = "";
$CellNo = "";
$Nextofkin = "";

echo '<br>';
$sql = "SELECT PatientID, PatientName, PatientSurname, Sickness, PatCondition, CellNo, NextOfKin FROM tblPatients";
$result = mysqli_prepare($connect, $sql);
$result = $connect->query($sql);


echo '
<h2> Delete Patient </h2>

<div class = "table">
<table = border = "1" cellspacing = "2" cellpadding = "5">
<thead>
<tr>
<th> Name </th>
<th> Surname </th>
<th> Sickness </th>
<th> Condition </th>
<th> Mobile </th>
<th> Kin </th> 
<th colspan = "2"> Action </th> 
</tr>
</thead>';
if ($result->num_rows > 0)
{
        while ($row = $result-> fetch_assoc())
        {
                $ID = $row['PatientID'];
                $Name = $row['PatientName'];
                $Surname = $row['PatientSurname'];
                $Sickness = $row['Sickness'];
                $Condition = $row['PatCondition'];
                $Mobile = $row['CellNo'];
                $Kin = $row['NextOfKin'];
                
                
                echo '<tr>    
                            <td> '.$Name.'</td>
                            <td> '.$Surname.'</td>
                            <td> '.$Sickness.'</td>
                            <td> '.$Condition.'</td>
                            <td> '.$Mobile.'</td>
                            <td> '.$Kin.'</td>
                            <td>
                            </div>
                            <div id = "Delete">
                            <form method = "post"> <input type = "submit" name = "delete" value = "Delete"></form>
                            </div>
                            </td>    
                         </tr>';   
        }


           
            $result->free();
    
}

echo '</table>
</div>';





/*echo '<div style = "overflow-x:auto;"> <table border = "2" cellspacing = "2" cellpadding = "2" 
       <tr> 
            <td> <font face = "Arial">Name</font> </td>
            <td> <font face = "Arial">Surname</font> </td>
            <td> <font face = "Arial">Sickness</font> </td>
            <td> <font face = "Arial">Condition</font> </td>
            <td> <font face = "Arial">Mobile</font> </td>
            <td> <font face = "Arial">Kin</font> </td>
        </tr>';
if ($result->num_rows >= 0)
    {
        while ($row = $result-> fetch_assoc())
            {
                $ID = $row['PatientID']; 
                $Name = $row['PatientName'];
                $Surname = $row['PatientSurname'];
                $Sickness = $row['Sickness'];
                $Condition = $row['PatCondition'];
                $CellNo = $row['CellNo'];
                $Kin = $row['NextOfKin'];
                
                echo '<tr>    
                            <td> '.$Name.'</td>
                            <td> '.$Surname.'</td>
                            <td> '.$Sickness.'</td>
                            <td> '.$Condition.'</td>
                            <td> '.$CellNo.'</td>
                            <td> '.$Kin.'</td>
                             <td> <form method = "post"> <input type = "submit" name = "delete" value = "Delete"></form></td>
                         </tr>';   
               
                
            }
            $result->free();
        }
        echo '</div>';
*/

if (isset ($_REQUEST['delete']))
{
   
    $sql = "DELETE FROM tblPatients WHERE PatientID = '".$ID."'"; 
    $result = mysqli_prepare($connect, $sql);
    $result = $connect->query($sql);
    if($result) {echo '<script type = text/JavaScript> alert("Record Deleted")</script>';}
    else {echo 'Record Has Not Been Deleted';}
    $connect->close();
}



?>