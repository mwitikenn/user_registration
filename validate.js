// JavaScript Document
function validateForm(){
	var username = document.forms["myForm"]["username"].value;
	var username = document.forms["myForm"]["password"].value;
	var username = document.forms["myForm"]["first_name"].value;
	var username = document.forms["myForm"]["last_name"].value;
	
	if(username == "" || password =="" || first_name == "" || last_name== ""){
		alert("Please enter data for all the fields");
		return false;
	}
	else{
		return true;
	}
}