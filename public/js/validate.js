window.onload = initPage;

var validate = [false,false,false,false,false,false,false] ;


function initPage(){
	document.getElementById("firstname").onblur = CheckFirstName;
	document.getElementById("lastname").onblur = CheckLastName;
	document.getElementById("email").onblur = CheckEmail;
	document.getElementById("password").onblur= CheckPassword ;
	document.getElementById("repassword").onblur= CheckRePassword;
	
	}
	
	
	
function CheckFirstName(){
	alert("Firstname")
	var x = document.getElementById("firstname").value ;
	if(!x||x.length<3){
		validate[0] = false;
		}else{
			validate[0] =true;
			}
	}
	
function CheckLastName(){
	alert("lastname");
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
			
			return validateRegExp(/[\w\_\-\d\.]@[\w].[\w{4}]/,x,'2');
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
		
	
function validateRegExp(reg,instr,num){
		
		//alert(reg.test(instr));
		if(reg.test(instr)){
			
			validate[num]=true;
			
			alert(validate[num]);
			
		}
			else{
				validate[num]=false;
				alert(validate[num]);
				
				}
			
			}