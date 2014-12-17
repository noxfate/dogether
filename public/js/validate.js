window.onload = initPage;

var validate = [false,false,false,false,false,false,false,false] ;
var validate2= [false,false,false,false,false,false,false,false,false,false];


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
	document.getElementById("sname").oninput= CheckStoreName ;
	document.getElementById("address").oninput = CheckAddress ;
	document.getElementById("district").oninput = CheckDistrict ;
	document.getElementById("province").oninput = CheckProvince ;
	document.getElementById("postnum").oninput = CheckPostNum ;
	document.getElementById("phone2").oninput = CheckPhoneOwner ;
	
	document.getElementById("category1").onclick=CheckCategory;
	document.getElementById("category2").onclick=CheckCategory;
	document.getElementById("category3").onclick=CheckCategory;
	document.getElementById("category4").onclick=CheckCategory;
	document.getElementById("category5").onclick=CheckCategory;
	document.getElementById("category6").onclick=CheckCategory;
	
	document.getElementById("signup").onclick=CheckAllOwner ;
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
			alert("Input is incorrect!!!! Please check the form");
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
		validate2[2] = true;
		document.getElementById("signup").disabled=false;
		//alert('true');
		}else{
			validate2[2] = false;
			document.getElementById("signup").disabled=true;
			}
	}
	
	
function CheckStoreName(){
	var x = document.getElementById("sname").value ;
	
	if(!x||x.length<3){
		validate2[3] = false;
	
		document.getElementById("signup").disabled = true;
		}else{
			validate2[3] =true;
			document.getElementById("signup").disabled =false;
			//alert("true");
			}
	}
	
function CheckAddress(){
	var x = document.getElementById("address").value;
	
	if(!x||x.length<10){
		validate2[4] = false;
	
		document.getElementById("signup").disabled = true;
		}else{
			validate2[4] =true;
			document.getElementById("signup").disabled =false;
			//alert("true");
			}
	}

function CheckDistrict(){
	
	var x = document.getElementById("district").value;
	
	alert(x);
	if(!x){
		validate2[5] = false;
		document.getElementById("signup").disabled = true;
		}else{
			validate2[5] = true ;
			document.getElementById("signup").disabled = false;
			}
	}
function CheckProvince(){
	var x = document.getElementById("province").value;
	
	
	if(!x||x.length<4){
		validate2[6] = false;
		document.getElementById("signup").disabled = true;
		
		}else{
			validate2[6] = true ;
			document.getElementById("signup").disabled = false;
			//alert("true");
			}
	}
	
function CheckPostNum(){
	var x = document.getElementById("postnum").value;
	
	
	if(isNaN(x)||x.length<5){
		valiate2[7]=false;
		document.getElementById("signup").disabled=true;
		}else{
			validate2[7]=true;
			document.getElementById("signup").disabled=false;
			//alert("true");
			}
	}
	
function CheckPhoneOwner(){
	
	var x = document.getElementById("phone2").value;
	if(isNaN(x)){
		valiate2[8]=false;
		document.getElementById("signup").disabled=true;
		}else{
			validate2[8]=true;
			document.getElementById("signup").disabled=false;
			}
	}
	
function CheckCategory(){
	validate2[9]=true;
	
	document.getElementById("signup").disabled=false;
	}


//check form for owner
function validateRegExp_owner(reg,instr,num){
	//alert(reg.test(instr));
		if(reg.test(instr)){
			validate2[num]=true;
			document.getElementById("signup").disabled=false;
			//alert(validate2[num]);
			
		}
			else{
				validate2[num]=false;
				document.getElementById("signup").disabled=true;
				//alert(validate2[num]);
				
				
				}
	
	}
	
function CheckAllOwner(){
	
	var j =0;
	for(i=0;i<10;i++){
		if(validate2[i]==true){
			j++;
			}
		}
		
	if(j==10){
		document.getElementById("signup").disabled=false;
		}else{
			document.getElementById("signup").disabled=true;
			alert("Input is incorrect!!!! Please check the form");
			//alert(validate2);
			}
		
	
	}
	