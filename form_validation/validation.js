function validateForm() {
    var email = document.forms["regForm"]["email"];
    if (email.value == "") {
        alert("Please input your email address");
        
        email.focus();
        return false;
    }
    var name = document.regForm.full_name;
    if (name.value == "") {
        alert("Please input your full name");
        name.focus();
        return false;
    }
    var phone = document.myForm.phone
    if (phone.value == "" || isNaN(phone.value)) {
        alert("Phone number should be numeric.");
        phone.focus();
        return false;
    }
    if (phone.value.length != 11) {
        alert( "Phone number should be exactly 11 digits.");
        phone.focus();
        return false;
    }
    var tribe = document.regForm.tribe;
    if (tribe.value == "-1") {
        alert("Please select your tribe");
        return false;
    }
    return true;
}