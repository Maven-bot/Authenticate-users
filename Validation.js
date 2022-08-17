/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function validate(form)
{
    fail = validatePatientName(form.PatientName.value);
    fail += validatePatientSurname(form.PatientSurname.value);
    fail += validateSickness(form.Sickness.value);
    fail += validatePatCondition(form.PatCondition.value);
    fail += validateCellNo(form.CellNo.value);
    fail += validateNextOfKin(form.NextOfKin.value);
    

if (fail=="") return true
else {alert(fail); return false}
}

function validatePatientName(field)
{
    return (field=="") ? "No Name Was Entered.\\n" : ""
}

function validatePatientSurname(field)
{
    return (field=="") ? "No Surname Was Entered.\\n" : ""
}

function validateSickness(field)
{
    return (field=="") ? " No Sickness Was Entered. \\n" : ""
    
}
function validatePatCondition(field)
{
    return (field=="") ? " No Condition Was Entered. \\n" : ""
}

function validateCellNo(field)
{
    if (field=="") return "No Cell Number Was Entered.\\n" 
    else if(field.length !=="10")
        return "Cell Number Must Be 10 digits"
}

function validateNextOfKin(field)
{
    if (field=="") return "No Cell Number Was Entered.\\n" 
    else if(field.length !=="10")
        return "Cell Number Must Be 10 digits"
}

