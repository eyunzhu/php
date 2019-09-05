function isRegSubmit(form){
	if(!form.username.value){
		alert("请输入用户名！");
		return false;
	}else if(!form.password.value){
		alert("请输入密码！");
		return false;
	}else if(form.password.value!=form.password1.value){
		alert("两次密码不一致！");
		return false;
	}else if(!form.name.value){
		alert("请输入昵称！");
		return false;
	}
	return true;
}

function clearAllReg(form){
	form.username.value="";
	form.password.value="";
	form.password1.value="";
	form.name.value="";
	
}

function checkToggle(name){
    var checkobj=document.getElementsByName(name);
    var deletes=document.getElementsByName(deletes);
    var i;
    var flag =true;
    for (i = 0; i < checkobj.length; i++) {
        if(!(checkobj[i].checked)){
            flag=false;
            break;
        }                        
    }
    if(flag){
        for (i = 0; i < checkobj.length; i++) {
            checkobj[i].checked = false;                   
        }
    }
    else{
        for (i = 0; i < checkobj.length; i++) 
            checkobj[i].checked = true;  
    }    
}