function isEmail(elem, helperMsg){
    var regexp  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(regexp.test(elem.value)){
        return true;
    }else{
        alert(helperMsg);
        elem.focus();
        return false;
    }
}

function isStrongPassword(elem, msg) {
    alert(elem);
    var regx = /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
    if(regx.test(elem.value)){
        alert('here');
        return true;
    }else {
        alert(helperMsg);
        elem.focus();
        return false;
    }
}



document.getElementById('myCheck').onclick = function () {
    if(this.checked){

        var x = document.getElementById("UserName").value;
        if(!/^[a-zA-Z0-9]*$/g.test(x)){
            alert("User Name Contains Special Charecters");
            this.checked = false;
            return;
        }
        
        x =  document.getElementById("Name").value;
        if(!/^[a-zA-Z\s]*$/g.test(x)){
            alert("Name Contains Special Charecters");
            this.checked = false;
            return;
        }

        var GivenDate=document.getElementById("dob").value;
        var CurrentDate = new Date();
        GivenDate = new Date(GivenDate);
        if(GivenDate > CurrentDate){
            alert('Given Date of Birth is greater than the current date.');
            this.checked = false;
            return ;
        }

        x =  document.getElementById("department").value;
        if(!/^[a-zA-Z]*$/g.test(x)){
            alert("Department Contains Special Charecters");
            this.checked = false;
            return;
        }

        x = document.getElementById("roll-no").value;
        if(!/^[a-zA-Z0-9]*$/g.test(x)){
            alert("Roll Number Contains Special Charecters");
            this.checked = false;
            return;
        }

        x = document.getElementById("reg-no").value;
        if(!/^[a-zA-Z0-9]*$/g.test(x)){
            alert("Registration Number Contains Special Charecters");
            this.checked = false;
            return;
        }

        x = document.getElementById('email_id');
        if(isEmail(x, "Invalid Email Format") == false){
            this.checked = false;
            return;
        }

        x = document.getElementById("phonenumber").value;
        if(!/^[0-9]*$/g.test(x)){
            alert("Phone Number Contains Special Charecters");
            this.checked = false;
            return;
        }

        x =  document.getElementById("city").value;
        if(!/^[a-zA-Z0-9]*$/g.test(x)){
            alert("City Contains Special Charecters");
            this.checked = false;
            return;
        }

        x =  document.getElementById("state").value;
        if(!/^[a-zA-Z]*$/g.test(x)){
            alert("State Contains Special Charecters");
            this.checked = false;
            return;
        }

        x =  document.getElementById("pin-code").value;
        if(!/^[0-9]*$/g.test(x)){
            alert("Department Contains Special Charecters");
            this.checked = false;
            return;
        }

        x =  document.getElementById("password").value;
        x2=  document.getElementById("confirm_password").value;
        if(x != x2){
            alert("Passwords Does't Match");
            this.checked = false;
            return;
        }

    }
}