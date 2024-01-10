//Password validation:
function passwordValidation(){
    var myInput = document.getElementById("password");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var specialCharacter = document.getElementById("specialCharacter");
    var length = document.getElementById("length");


//When the user clicks on the password field, show the message box.

    myInput.onfocus=function(){
        document.getElementById("message").style.display="block";
    }

    //When the user clicks outside  the password field, hide the message box.
    myInput.onblur = function(){
        document.getElementById("message").style.display="none";
    }


    //When the user starts to type something inside the password field...

    myInput.onkeyup = function(){

        //Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if(myInput.value.match(lowerCaseLetters)){
            letter.classList.remove("invalid");
            letter.classList.add("valid");
        } else{
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }


        //Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if(myInput.value.match(upperCaseLetters)){
            capital.classList.remove("invalid");
            capital.classList.add("valid");
        } else{
            capital.classList.remove("valid");
            capital.classList.add("invalid");
        }



        //Validate numbers
        var numbers = /[0-9]/g;
        if(myInput.value.match(numbers)){
            number.classList.remove("invalid");
            number.classList.add("valid");
        } else{
            number.classList.remove("valid");
            number.classList.add("invalid");
        }



        //Validate special characters
        var specialCharacterszzs = /[^A-Za-z_0-9]/g;
        if(myInput.value.match(specialCharacterszzs)){
            specialCharacter.classList.remove("invalid");
            specialCharacter.classList.add("valid");
        } else{
            specialCharacter.classList.remove("valid");
            specialCharacter.classList.add("invalid");
        }


        //Validate special character
        var specialCharacterszzs = /[^A-Za-z_0-9]/g;
        if(myInput.value.match(specialCharacterszzs)){
            specialCharacter.classList.remove("invalid");
            specialCharacter.classList.add("valid");
        } else{
            specialCharacter.classList.remove("valid");
            specialCharacter.classList.add("invalid");
        }

        //Validate length
        if(myInput.value.length>=8 && myInput.value.length<=50){
            langth.classList.remove("invalid");
            langth.classList.add("valid");
        }else{
            length.classList.remove("valid");
            length.classList.add("invalid");
        }
    }

}






//add hyphens for the dynamic change requirement:
 function zipHyphen(){
    var input = document.getElementById("zipCode");

    if(input.value.length ===5){
        input.value += "-";
    }
}
//Add hyphens for the dynamic change requirement apropos of phone number:


function phoneHyphen(){
    var input = document.getElementById("phone");

    if(input.value.length ===3){
        input.value += "-";
    }

    if(input.value.length ===7){
        input.value += "-";
    }
}

function passwordChecker() {
    var res;
    var str =
        document.getElementById("t1").value;
    if (str.match(/[a-z]/g) && str.match(
        /[A-Z]/g) && str.match(
        /[0-9]/g) && str.match(
        /[^a-zA-Z\d]/g) && str.length >= 8)
        res = "TRUE";
    else
        res = "FALSE";
    document.getElementById("t2").value = res;

}



function chkPasswords() {
    var init = document.getElementById("password");
    var sec = document.getElementById("RepeatPassword");
    if (init && sec) {
        if (init.value == "") {
            var initDiv = document.getElementById("passDiv");
            if (initDiv) {
                initDiv.classList.add("has-error");
                initDiv.classList.remove("has-success");
            }
            var initErr = document.getElementById("passErr");
            if (initErr) {
                initErr.classList.remove("hide");
                initErr.classList.add("show");
            }
            return false;
        } else {
            var initDiv = document.getElementById("passDiv");
            if (initDiv) {
                initDiv.classList.remove("has-error");
                initDiv.classList.add("has-success");
            }
            var initErr = document.getElementById("passErr");
            if (initErr) {
                initErr.classList.add("hide");
                initErr.classList.remove("show");
            }
        }

        if (init.value != sec.value) {
            var secDiv = document.getElementById("verPassDiv");
            if (secDiv) {
                secDiv.classList.add("has-error");
                secDiv.classList.remove("has-success");
            }
            var secErr = document.getElementById("verPassErr");
            if (secErr) {
                secErr.classList.remove("hide");
                secErr.classList.add("show");
            }
            return false;
        } else {
            var secDiv = document.getElementById("verPassDiv");
            if (secDiv) {
                secDiv.classList.remove("has-error");
                secDiv.classList.add("has-success");
            }
            var secErr = document.getElementById("verPassErr");
            if (secErr) {
                secErr.classList.add("hide");
                secErr.classList.remove("show");
            }

            var subBtn = document.getElementById("submitButton");
            if (subBtn) {
                subBtn.disabled = false;
            }
            return true;
        }
    }
    return false;
}

// function registerHandlers() {
//     document.getElementById("RepeatPassword").onblur = chkPasswords;
//     document.getElementById("myForm").onsubmit = chkPasswords;
// }

function checkPasswordMatch() {
    $('#RepeatPassword').focusout(function () {
        //get values on the focusout event
        var password = $('password').val();
        var RepeatPassword = $('#RepeatPassword').val();


        //test them

        if (password != RepeatPassword) {
            $("#divCheckPasswordMatch").html("Passwords did not match!");
        }
    });
}


// function passwordsMatch(){
//
//    var pass1 = document.getElementById("password");
//    var pass2 = document.getElementById("RepeatPassword");
//     var displayMessagePass = document.getElementById("samePasswordMessage");
//
// //     if (!(pass1 = pass2)) {
// //         displayMessagePass.innerHTML = "The passwords DO NOT match!";
// //         displayMessagePass.remove("valid");
// //         displayMessagePass.add("invalid");
// //     } else {
// //         displayMessagePass.innerHTML = "The passwords match.";
// //         displayMessagePass.add("valid");
// //     }
// // }
//
// if (pass1 = pass2) {
//     displayMessagePass.innerHTML = "The passwords match.";
//     displayMessagePass.classList.remove("invalid");
//     displayMessagePass.classList.add("valid");
// } else {
//     displayMessagePass.innerHTML = "The passwords DO NOT match";
//     displayMessagePass.classList.add("invalid");
// }
// }




function passwordsMatch(){
     let pass1 = document.getElementById("password").value;
     let pass2 = document.getElementById("RepeatPassword").value;

     let match = true;

     if(pass1 != pass2){
         $("#samePasswordMatch").html("Passwords do not match");
         match = false;
     } else{
         $("#samePasswordMatch").html("Passwords match!");
     }




    return match;
}

function chkPasswords() {
    var init = document.getElementById("password");
    var sec = document.getElementById("RepeatPassword");
    if (init && sec) {
        if (init.value == "") {
            var initDiv = document.getElementById("passDiv");
            if (initDiv) {
                initDiv.classList.add("has-error");
                initDiv.classList.remove("has-success");
            }
            var initErr = document.getElementById("passErr");
            if (initErr) {
                initErr.classList.remove("hide");
                initErr.classList.add("show");
            }
            return false;
        } else {
            var initDiv = document.getElementById("passDiv");
            if (initDiv) {
                initDiv.classList.remove("has-error");
                initDiv.classList.add("has-success");
            }
            var initErr = document.getElementById("passErr");
            if (initErr) {
                initErr.classList.add("hide");
                initErr.classList.remove("show");
            }
        }

        if (init.value != sec.value) {
            var secDiv = document.getElementById("verPassDiv");
            if (secDiv) {
                secDiv.classList.add("has-error");
                secDiv.classList.remove("has-success");
            }
            var secErr = document.getElementById("verPassErr");
            if (secErr) {
                secErr.classList.remove("hide");
                secErr.classList.add("show");
            }
            return false;
        } else {
            var secDiv = document.getElementById("verPassDiv");
            if (secDiv) {
                secDiv.classList.remove("has-error");
                secDiv.classList.add("has-success");
            }
            var secErr = document.getElementById("verPassErr");
            if (secErr) {
                secErr.classList.add("hide");
                secErr.classList.remove("show");
            }

            var subBtn = document.getElementById("submitButton");
            if (subBtn) {
                subBtn.disabled = false;
            }
            return true;
        }
    }
    return false;
}

function registerHandlers() {
    document.getElementById("RepeatPassword").onblur = chkPasswords;
    document.getElementById("myForm").onsubmit = chkPasswords;
}

