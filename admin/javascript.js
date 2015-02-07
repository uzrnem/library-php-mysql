function show_prompt(book)
{
var name=prompt("Insert User Numb","");
window.location.assign("update.php?c=a&d=t&b="+book+"&u="+name);
}
function check(pass)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
		xmlhttp=new XMLHttpRequest();
	else
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	xmlhttp.open("GET","check.php?pass="+pass,true);
	xmlhttp.send();
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			if(xmlhttp.responseText=="1")
			{
				alert("Username Already Exist");
				document.getElementById("username").value="";
			}
		}
	}
}

function validate_content()
{
	if(document.getElementById("name").value=="")
	{
		alert("Please Enter Book Name");
		document.getElementById("name").focus();
		return false;
	}
	else if(document.getElementById("author").value=="")
	{
		alert("Please Enter Author Name");
		document.getElementById("author").focus();
		return false;
	}
	else if(document.getElementById("edition").value=="")
	{
		alert("Please Select Edition Category");
		document.getElementById("edition").focus();
		return false;
	}
	else if(document.getElementById("copies").value=="")
	{
		alert("Please Enter Number of Copies Amount");
		document.getElementById("copies").focus();
		return false;
	}
}
function validate_member()
{
	if(document.getElementById("username").value=="")
	{
		alert("Please Enter Username");
		document.getElementById("username").focus();
		return false;
	}
	else if(document.getElementById("password").value=="")
	{
		alert("Please Enter Password");
		document.getElementById("password").focus();
		return false;
	}
	else if(document.getElementById("name").value=="")
	{
		alert("Please Enter Member Name");
		document.getElementById("name").focus();
		return false;
	}
	else if(document.getElementById("class").value=="")
	{
		alert("Please Enter Author Name");
		document.getElementById("class").focus();
		return false;
	}
	else if(document.getElementById("numb").value=="")
	{
		alert("Please Enter Member Numb");
		document.getElementById("numb").focus();
		return false;
	}
	else if(document.getElementById("mobile").value=="")
	{
		alert("Please Enter Mobile Numb");
		document.getElementById("mobile").focus();
		return false;
	}
}
