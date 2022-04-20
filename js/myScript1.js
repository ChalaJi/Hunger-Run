function checkpassword(){
	if(document.getElementById("psw").value != document.getElementById("pswn").value)
	{
		alert("passwords are mismatched!!");
		return false;
	}
	else
	{
		alert("Signed-In Successfully");
		return true;
	}
}
function enablebutton(){
	if(document.getElementById("policy").checked)
	{
		document.getElementById("sub").disabled=false;
	}
	else
	{
		document.getElementById("sub").disabled=true;
	}
}
function Function1() {
  alert("Please Sign in to Progress");
}
function Function2() {
  alert("sorry!! Currently Unavailable");
}
function Function3() {
  if(document.getElementById("SH").value== "Italiano")
  {
	    window.location.href = "Restaurant Page A.php";
	  return true;
  }
  else
  {
	  alert("There are no Restaurants available with given name!!");
		return false;
  }
}