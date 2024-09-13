function checkPassword()//Check password
{
	if(document.getElementById("pwd").value != document.getElementById("cpwd").value)
	{
		alert("Password mismatched..!");
		return false;
	}
	else
	{
		alert("Success.!");
		return true;
	}
		
}

function enablesubmitbtn()//Enable subnit button
{
	if (document.getElementById("chkbx").checked)
	{
		
		document.getElementById("sub").disabled = false ;
		
	}
	else
	{
		
		document.getElementById("sub").disabled = true;
		
	}
}
