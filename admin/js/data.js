function f1()
{
var a=document.admin.apswd.value;
var b=document.admin.acpswd.value;
if(b!=a)
	{
		alert("Password did not match!!!");
		return false;
	}
}

function f2()
{
var a=document.user.upswd.value;
var b=document.user.ucpswd.value;
if(b!=a)
	{
		alert("Password did not match!!!");
		return false;
	}
}

