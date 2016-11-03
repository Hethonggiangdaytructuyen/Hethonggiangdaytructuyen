$(document).ready(function(e){
    $('.add_button').click(function(){
      $('.form').addClass('collapsed-box');
    });

    $('.close').click(function(){
      $('.form').removeClass('collapsed-box');
    });
});

// Validation form
var re_phone = /0[1-9][\d]{8,9}/;
function checkPhone(){
    var phone_value = document.form.txt_phone.value;
    var OK = re_phone.exec(phone_value);
    if(!OK){
        if(phone_value == ''){
            document.form.err_phone.value = '';
            $("#err_phone").css("display", "none");
            return false;
        }
        else{
            document.form.err_phone.value = 'Invalid phone number';
            $("#err_phone").css("display", "block");
            return false;
        }
    }
    else{
        document.form.err_phone.value = '';
        $("#err_phone").css("display", "none");
        return true;
    }
}

var re_email = /[a-z][a-z0-9\._]{2,31}@[a-z0-9-]{3,}(\.[a-z]{2,4}){1,2}/;
function checkEmail(){
    var email_value = document.form.txt_email.value;
    var OK = re_email.exec(email_value);
    if(!OK){
        if(email_value == ''){
            document.form.err_email.value = '';
            $("#err_email").css("display", "none");
            return false;
        }
        else{
            document.form.err_email.value = 'Invalid Email address';
            $("#err_email").css("display", "block");
            return false;
        }
    }
    else{
        document.form.err_email.value = '';
        $("#err_email").css("display", "none");
        return true;
    }
}

var re_pass = /[\w\s!@%&\#]{6,32}/;
function checkPass(){
    var pass_value = document.form.txt_pass.value;
    var length = pass_value.length;
    var OK = re_pass.exec(pass_value);
    if(length>=1 && length<=4){
        document.form.err_pass.value = 'Too Short';
        $("#err_pass").css("display", "block");
        return false;
    }
    else if(length>=5 && length<=10){
        document.form.err_pass.value = 'Medium';
        $("#err_pass").css("display", "block");
        return true;
    }
    else if(length>10){
        document.form.err_pass.value = 'Strong';
        $("#err_pass").css("display", "block");
        return true;
    }
    else if(OK){
        document.form.err_pass.value = 'Strong';
        $("#err_pass").css("display", "block");
        return true;
    }
    else{
        document.form.err_pass.value = '';
        $("#err_pass").css("display", "none");
        return false;
    }
}

function checkValidate(){
    checkPhone();
    checkEmail();
    checkPass();
    if(checkPhone()==false || checkEmail()==false || checkPass()==false){
        return false;
    }
}