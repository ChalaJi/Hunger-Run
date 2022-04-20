function loadData(name){
	if (name == "button1"){
		document.getElementById("img1").src = "images/des1.jpeg";
		document.getElementById("img2").src = "images/des2.jpeg";
		document.getElementById("img3").src = "images/des3.jpeg";
		document.getElementById("para").innerHTML = "Deserts";
	}else if (name == "button2"){
		document.getElementById("img1").src = "images/b1.jpeg";
		document.getElementById("img2").src = "images/b2.jpeg";
		document.getElementById("img3").src = "images/b3.jpeg";
		document.getElementById("para").innerHTML = "Breakfast";
	}else if (name == "button3"){
		document.getElementById("img1").src = "images/l1.jpeg";
		document.getElementById("img2").src = "images/l2.jpeg";
		document.getElementById("img3").src = "images/l3.jpg";
		document.getElementById("para").innerHTML = "Lunch";
	}else if (name == "button4"){
		document.getElementById("img1").src = "images/d1.jpg";
		document.getElementById("img2").src = "images/d2.jpg";
		document.getElementById("img3").src = "images/d3.jpg";
		document.getElementById("para").innerHTML = "Dinner";
	}else{
		alert("INVALID !");
	}
}

function loadDataa(namee){
	if (namee == "button5"){
		document.getElementById("img4").src = "images/bk1.jpg";
		document.getElementById("img5").src = "images/bk2.jpg";
		document.getElementById("img6").src = "images/bk3.jpeg";
		document.getElementById("para1").innerHTML = "Bakery Corner";
	}else if (namee == "button6"){
		document.getElementById("img4").src = "images/a1.jpg";
		document.getElementById("img5").src = "images/a2.jpg";
		document.getElementById("img6").src = "images/a3.jpg";
		document.getElementById("para1").innerHTML = "Authentic Indian Cuisiness";
	}else if (namee == "button7"){
		document.getElementById("img4").src = "images/p1.jpg";
		document.getElementById("img5").src = "images/p2.jpg";
		document.getElementById("img6").src = "images/p3.jpg";
		document.getElementById("para1").innerHTML = "Pizza Oven";
	}else if (namee == "button8"){
		document.getElementById("img4").src = "images/s1.jpg";
		document.getElementById("img5").src = "images/s2.jpg";
		document.getElementById("img6").src = "images/s3.jpg";
		document.getElementById("para1").innerHTML = "Special Set Menue";
	}else{
		alert("INVALID !");
	}
}

function enableButton1(){
	if(document.getElementById("cod").checked){
		document.getElementById("btn").disabled=false;
	}
	else{
		document.getElementById("btn").disabled=true;
	}
}

function enableButton2(){
	if(document.getElementById("visa").checked){
		document.getElementById("btn").disabled=false;
	}
	else{
		document.getElementById("btn").disabled=true;
	}
}

function enableButton3(){
	if(document.getElementById("other").checked){
		document.getElementById("btn").disabled=false;
	}
	else{
		document.getElementById("btn").disabled=true;
	}
}
function quantity(){
	var qtyv =document.getElementById("qty").value;
}

document.getElementById("qtyo").innerHTML = "Pizza *"+qtyv;

