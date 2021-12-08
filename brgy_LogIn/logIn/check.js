function checkValidates()
{
	var admin_email = document.forms["form"]["admin_email"]; 
    var admin_pass = document.forms["form"]["admin_pass"];
    if(admin_email.value == "")
    {
        window.alert("Please enter email!");
        firstname.focus();
        return false;
    }
    if(admin_pass.value == "")
    {
        window.alert("Please enter password!");
        lastname.focus();
        return false;
    }

    if(check_email.value == "")
    {
        window.alert("Confirm Password");
        studentnumber.focus();
        return false;
    }
return true;
}