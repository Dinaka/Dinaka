function validateForm() {
    var email = document.forms["signUp"]["email"];
    if (email.value == "") {
        alert("Please input your email address");
        email.focus();
        return false;
    }
    var firstname = document.signUp.firstname;
    if (firstname.value == "") {
        alert("Please input your first name");
        firstname.focus();
        return false;
    }
    var lastname = document.signUp.lastname;
    if (lastname.value == "") {
        alert("Please input your last name");
        lastname.focus();
        return false;
    }
    var password = document.signUp.password;
    if (password.value.length < 8) {
        alert( "Password must contain at least 8 characters.");
        password.focus();
        return false;
    }
    var password = document.signUp.password;
    var confirm_password = document.signUp.confirm_password;
    if (password.value != confirm_password.value) {
        alert("Your passwords must match.")
        confirm_password.focus();
        return false;
    } 
    var tel = document.signUp.tel
    if (tel.value == "" || isNaN(tel.value)) {
        alert("Phone number should be numeric.");
        tel.focus();
        return false;
    }
    if (tel.value.length != 11) {
        alert( "Phone number should be exactly 11 digits.");
        tel.focus();
        return false;
    }
    
    if (document.getElementById("ma").checked == false &&
        document.getElementById("fe").checked == false &&
        document.getElementById("ot").checked == false) {
            alert("Please select gender");
            return false;
        }
    
    var country = document.signUp.country;
    if (country.value == "0") {
        alert("Please select your country");
        return false;
    }
    $('#regForm').submit();
}