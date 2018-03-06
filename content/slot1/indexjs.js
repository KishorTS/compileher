function validate()
{
	if(document.forms["index"]["name1"].value=="")
	{
		alert("Enter the name of the Team Leader");
		return false;
	}
	else if(document.forms["index"]["name2"].value=="")
	{
		alert("Enter the Member Name");
		return false;
	}
	else if(document.forms["index"]["mobile"].value=="")
	{
		alert("Enter the Mobile Number");
		return false;
	}
}

