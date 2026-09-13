function validate(p){

    const firstName = p.firstName.value;
    const firstNameErrMsg = document.getElementById("firstNameErrMsg");
    firstNameErrMsg.innerHTML = "";

    const lastName = p.lastName.value;
    const lastNameErrMsg = document.getElementById("lastNameErrMsg");
    lastNameErrMsg.innerHTML = "";

    const male = p.Gender[0].checked;
    const female = p.Gender[1].checked;
    const genderErrMsg = document.getElementById("genderErrMsg");
    genderErrMsg.innerHTML = "";

    let flag = true;

    if(firstName == ""){
        firstNameErrMsg.innerHTML = "Please enter your first name";
        flag = false;
    }

    if(lastName == ""){
        lastNameErrMsg.innerHTML = "Please enter your last name";
        flag = false;
    }

    if(!male && !female){
        genderErrMsg.innerHTML = "Please select your gender";
        //alert("selct gn!");
        flag = false;
    }


    // If all validations are successful
    if(flag){
        alert("Registration Successful!");
    }

    return flag;
}