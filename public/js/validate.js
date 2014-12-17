window.onload = initPage;

var validate = [false,false,false,false,false,false,false,false] ;
var validate2= [false,false,false,false,false,false,false,false,false,false,false];


function initPage(){
	//This is Register for user
	document.getElementById("firstname").oninput = CheckFirstName;
	document.getElementById("lastname").oninput = CheckLastName;
	document.getElementById("email").oninput = CheckEmail;
	document.getElementById("password").oninput= CheckPassword ;
	document.getElementById("repassword").oninput= CheckRePassword;
	document.getElementById("phone").oninput=CheckPhone;
	document.getElementById("dob").oninput=CheckDOB;
	document.getElementById("inlineRadio1").onclick=SendMale;
	document.getElementById("inlineRadio2").onclick=SendFemale;
		
	document.getElementById("create").onclick=CheckAll;
	document.getElementById("create").disabled=true;
	
	
	
	//This is Register for owner
	document.getElementById("inputEmail3").oninput = CheckEmailOwner ;
	document.getElementById("password2").oninput = CheckPasswordOwner ;
	document.getElementById("repassword2").oninput = CheckRePasswordOwner ;
	document.getElementById("signup").disabled = true;

	
	}
	
	
//This is function for User
	
function CheckFirstName(){
	
	var x = document.getElementById("firstname").value ;
	if(!x||x.length<3){
		validate[0] = false;
		document.getElementById("create").disabled=true;
		}else{
			validate[0] =true;
		document.getElementById("create").disabled=false;
			}
	}
	
function CheckLastName(){
	
	var x = document.getElementById("lastname").value;
	if(!x||x.length<3){
		validate[1]=false;
		document.getElementById("create").disabled=true;
		}else{
			validate[1]=true;
			document.getElementById("create").disabled=false;
			}
	}

function CheckEmail(){
	
	var x = document.getElementById("email").value ;
	if(!x){
		validate[2]=false;
		document.getElementById("create").disabled=true;
		}else{
			validate[2]=true;
			document.getElementById("create").disabled=false;
			
			
			return validateRegExp(/[\w\_\-\d\.]@[\w].[\w{4}]/,x,2);
			}
	
	}
	
function CheckPassword(){
	
	var x = document.getElementById("password").value;
	if(!x){
		validate[3] = false;
		document.getElementById("create").disabled=true;
		
		}else{
			validate[3] = true;
			document.getElementById("create").disabled=false;
			
			return validateRegExp(/^.*(?=.{6,})(?=.*[0-9])(?=.*[a-zA-Z]).*$/,x,3);
			}
	}
	
	
function CheckRePassword(){
	var x = document.getElementById("repassword").value;
	var y = document.getElementById("password").value;
	//alert(x);
	if(y == x){
		validate[4] = true;
		document.getElementById("create").disabled=false;
		}else{
			validate[4] = false;
			document.getElementById("create").disabled=true;
			}
	}

	
function CheckPhone(){
	var x = document.getElementById("phone").value;
	
	if(isNaN(x)){
		valiate[5]=false;
		document.getElementById("create").disabled=true;
		}else{
			validate[5]=true;
			document.getElementById("create").disabled=false;
			}
	}
	
function CheckDOB(){
	var x = document.getElementById("dob").value;
	
	if(!x){
		validate[6] = false;
		document.getElementById("create").disabled=true;
		
		}else{
			validate[6] = true;
			
			return validateRegExp(/^\d{4}\-\d{2}\-\d{2}$/,x,6);
			}
	
	}
	
	
function SendMale(){
	CheckSex("male");
	}
function SendFemale(){
	CheckSex("female");
	}


function CheckSex(x){
	validate[7]=true;
	document.getElementById("create").disabled=false;
	}
	
	
			

function validateRegExp(reg,instr,num){
		
		//alert(reg.test(instr));
		if(reg.test(instr)){
			validate[num]=true;
			document.getElementById("create").disabled=false;
			
		}
			else{
				validate[num]=false;
				document.getElementById("create").disabled=true;
				
				
				}
			
			}
	
	
function CheckAll(){
	
	var j =0;
	for(i=0;i<8;i++){
		if(validate[i]==true){
			j++;
			}
		}
		
	if(j==8){
		document.getElementById("create").disabled=false;
		}else{
			document.getElementById("create").disabled=true;
			alert("Input is incorrect!!Please check the form");
			}
		
	}
	
	
	
	
	
	
//This is Function for Owner

function CheckEmailOwner(){
	
	var x = document.getElementById("inputEmail3").value ;
	
	if(!x){
		validate2[0]=false;
		document.getElementById("signup").disabled=true;
		}else{
			validate2[0]=true;
			document.getElementById("signup").disabled=false;
			
			
			return validateRegExp_owner(/[\w\_\-\d\.]@[\w].[\w{4}]/,x,0);
			}
	}
	
function CheckPasswordOwner(){
	var x = document.getElementById("password2").value;
	
	if(!x){
		validate2[1] = false;
		document.getElementById("signup").disabled=true;
		
		}else{
			validate2[1] = true;
			document.getElementById("signup").disabled=false;
			
			return validateRegExp_owner(/^.*(?=.{6,})(?=.*[0-9])(?=.*[a-zA-Z]).*$/,x,1);
			}
	
	
	}
	
function CheckRePasswordOwner(){
	var x = document.getElementById("repassword2").value;
	var y = document.getElementById("password2").value;
	//alert(x);
	if(y == x){
		validate[2] = true;
		document.getElementById("signup").disabled=false;
		}else{
			validate[2] = false;
			document.getElementById("signup").disabled=true;
			}
	}


function validateRegExp_owner(reg,instr,num){
	//alert(reg.test(instr));
		if(reg.test(instr)){
			validate2[num]=true;
			document.getElementById("signup").disabled=false;
			
		}
			else{
				validate2[num]=false;
				document.getElementById("signup").disabled=true;
				
				
				}
	
	}
	