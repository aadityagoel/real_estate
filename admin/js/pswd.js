function f1()
{
var a=document.admin.npswd.value;
var b=document.admin.rpswd.value;
if(b!=a)
	{
		alert("Password did not match!!!");
		return false;
	}
}
