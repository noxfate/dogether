window.onload = initPage;

var validate = [false,false,false,false,false,false,false] ;


function initPage(){
	
	document.getElementById("firstname").onblur = CheckFirstName;
	document.getElementById("lastname").onblur = CheckLastName;
	document.getElementById("email").onblur = CheckEmail;
	document.getElementById("password").onblur= CheckPassword ;
	document.getElementById("repassword").onblur= CheckRePassword;
	document.getElementById("phone").onblur=CheckPhone;
	document.getElementById("dob").onblur=CheckDOB;
	document.getElementById("create").onclick=CheckAll;
	
	}
	
	
	
function CheckFirstName(){
	
	var x = document.getElementById("firstname").value ;
	if(!x||x.length<3){
		validate[0] = false;
		}else{
			validate[0] =true;
			}
	}
	
function CheckLastName(){
	
	var x = document.getElementById("lastname").value;
	if(!x||x.length<3){
		validate[1]=false;
		}else{
			validate[1]=true;
			}
	}

function CheckEmail(){
	
	var x = document.getElementById("email").value ;
	if(!x){
		validate[2]=false;
		}else{
			validate[2]=true;
			
			return validateRegExp(/[\w\_\-\d\.]@[\w].[\w{4}]/,x,2);
			}
	
	}
	
function CheckPassword(){
	
	var x = document.getElementById("password").value;
	if(!x){
		validate[3] = false;
		
		}else{
			validate[3] = true;
			
			return validateRegExp(/^.*(?=.{6,})(?=.*[0-9])(?=.*[a-zA-Z]).*$/,x,3);
			}
	}
	
	
function CheckRePassword(){
	var x = document.getElementById("repassword").value;
	var y = document.getElementById("password").value;
	alert(x);
	if(y == x){
		validate[4] = true;
		alert(validate[4]);
		}else{
			validate[4] = false;
			alert(validate[4]);
			}
	}

	
function CheckPhone(){
	var x = document.getElementById("phone").value;
	
	if(isNaN(x)){
		valiate[5]=false;
		}else{
			validate[5]=true;
			}
	}
	
function CheckDOB(){
	var x = document.getElementById("dob").value;
	
	if(!x){
		validate[6] = false;
		
		}else{
			validate[6] = true;
			
			return validateRegExp(/^\d{4}\-\d{2}\-\d{2}$/,x,6);
			}
	
	}
			

function validateRegExp(reg,instr,num){
		
		//alert(reg.test(instr));
		if(reg.test(instr)){
			validate[num]=true;
			
		}
			else{
				validate[num]=false;
				
				
				}
			
			}
	
	
function CheckAll(){
	
	var j =0;
	for(i=0;i<7;i++){
		if(validate[i]==true){
			j++;
			}
		}
		alert(j);
	if(j==7){
		alert("Form collect");
		}else{
			alert("Please Enter the collect value");
			location.reload() ;
			}
		
	}
	
	
	
	