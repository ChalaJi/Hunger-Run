	var fname;
	var addrss;
	var phn;
	var eml;
	var psw;
	var gen;

function showpass(){
	var sp = document.getElementById("dataPassw");
	if (sp.type === "password"){
		sp.type ="text";
	}
	else{
		sp.type="password";
	}
}
function showpass2(){
	var sp2 = document.getElementById("i5");
	if (sp2.type === "password" ){
		sp2.type="text";
	}
	else{
		sp2.type="password";
	}
}


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




	
document.getElementById("dataUA2").style.display= "none";
	
document.getElementById("edit").addEventListener("click",function(){
document.getElementById("dataUA2").style.display="block";});


document.getElementById("save").addEventListener("click",function(){
document.getElementById("dataUA2").style.display="none";});

document.getElementById("save").addEventListener("click",function(){
fname= document.getElementById("i1").value;});

document.getElementById("save").addEventListener("click",function(){
addrss= document.getElementById("i2").value;});

document.getElementById("save").addEventListener("click",function(){
phn= document.getElementById("i3").value;});

document.getElementById("save").addEventListener("click",function(){
eml= document.getElementById("i4").value;});

document.getElementById("save").addEventListener("click",function(){
psw= document.getElementById("i5").value;});

document.getElementById("save").addEventListener("click",function(){
	if (document.getElementById("m").checked)
	{
		gen= document.getElementById("m").value;
		document.getElementById("avatar").src="Images/male_avatar.png";
	}
	else{
		gen= document.getElementById("f").value;
		document.getElementById("avatar").src="Images/female_avatar.png";
	}
});





document.getElementById("save").addEventListener("click",function(){
document.getElementById("datafnm").innerHTML="Full Name:- "+fname;});

document.getElementById("save").addEventListener("click",function(){
document.getElementById("dataadd").innerHTML="Address:- "+addrss;});

document.getElementById("save").addEventListener("click",function(){
document.getElementById("dataphn").innerHTML="Phone Number:- "+phn;});

document.getElementById("save").addEventListener("click",function(){
document.getElementById("dataem").innerHTML="e-mail Address:- "+eml;});

document.getElementById("save").addEventListener("click",function(){
document.getElementById("dataPassw").value=psw;});
				
document.getElementById("save").addEventListener("click",function(){
document.getElementById("dataGen").innerHTML="Gender:- "+gen;});













































