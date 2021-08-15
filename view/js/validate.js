function registervalidate() {
    var name = document.forms["registerform"]["username"].value;
    if (name == "") {
        alert("Please enter the name");
        return false;
    }
    if (name.length > 5) {
        alert("atleast 5 charecter");
        return false;
    }



    var password = document.forms["registerform"]["password"].value;
    if (password == "") {
        alert("Please enter password");
        return false;
    }
    if (password.length > 8) {
        alert("password max size 8");
        return false;
    }
}
function resetValidate() {
    var password = document.forms["resetform"]["password"].value;
    if (password == "") {
        alert("Please enter password");
        return false;
    }
    if (password.length > 8) {
        alert("password max size 8");
        return false;
    }

}
function empValidate() {
    var name = document.forms["empreg"]["name"].value;
    if (name == "") {
        alert("Please enter name");
        return false;
    }

    var gender = document.forms["empreg"]["gender"].value;
    if (gender == "") {
        alert("Value cannot be empty,please enter value");
        return false;
    }
    var dob = document.forms["empreg"]["dob"].value;
    if (dob == "") {
        alert("Value cannot be empty,please enter value");
        return false;
    }
    var relegion = document.forms["empreg"]["relegion"].value;
    if (relegion == "") {
        alert("Value cannot be empty,please enter value");
        return false;
    }
    var email = document.forms["empreg"]["email"].value;
    if (email == "") {
        alert("Value cannot be empty,please enter value");
        return false;
    }
    var address = document.forms["empreg"]["address"].value;
    if (address == "") {
        alert("Value cannot be empty,please enter value");
        return false;
    }


    var username = document.forms["empreg"]["username"].value;
    if (username == "") {
        alert("Please enter the name");
        return false;
    }




    var password = document.forms["empreg"]["password"].value;
    if (password == "") {
        alert("Please enter password");
        return false;
    }
    if (password.length > 8) {
        alert("password max size 8");
        return false;
    }

}
function userValidate() {
    var name = document.forms["userreg"]["name"].value;
    if (name == "") {
        alert("Please enter name");
        return false;
    }

    var gender = document.forms["userreg"]["gender"].value;
    if (gender == "") {
        alert("Value cannot be empty,please enter value");
        return false;
    }
    var dob = document.forms["userreg"]["dob"].value;
    if (dob == "") {
        alert("Value cannot be empty,please enter value");
        return false;
    }

    var email = document.forms["userreg"]["email"].value;
    if (email == "") {
        alert("Value cannot be empty,please enter value");
        return false;
    }
    var address = document.forms["userreg"]["address"].value;
    if (address == "") {
        alert("Value cannot be empty,please enter value");
        return false;
    }


    var username = document.forms["userreg"]["username"].value;
    if (username == "") {
        alert("Please enter the name");
        return false;
    }




    var password = document.forms["userreg"]["password"].value;
    if (password == "") {
        alert("Please enter password");
        return false;
    }
    if (password.length > 8) {
        alert("password max size 8");
        return false;
    }

}

