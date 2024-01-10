<?php include 'connectionInfo.php'; ?>
<!DOCTYPE html>



<html lang = "en">


<head>

    <?php define("title","Registration");?>
    <title><?php echo title; ?></title>
    <meta charSet= "utf-8"/>


    <!--Mobile responsive code:-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        .error {color: #FF0000;}

    </style>


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>





        <script src = "https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src = "https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src = ./js/inputValidation.js></script>
    <link href="./css/regex.css" type = "text/css" rel = "stylesheet"/>

    <link href = "./css/phpRegistrationStyles.css" rel = "stylesheet" type = "text/css"/>
    <title></title>


</head>
<body  onload = "registerHandlers();">



<!-- So that the web items don't get scrunched all the way to the left.-->

<div class = "container mt-3">


<?php
    echo title;
?>

<?php include 'inputValidate.php'; ?>







<p><span class = "error">* required field.</span></p>

<form id = "myForm" name = "myForm" method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class = "was-validated">


<div class = "mb-3 mt-3">
    <label for="userName" class = "form-label">Username:</label>
    <input id = "userName" class = "form-control" type = "text" name = "userName" maxlength="50" minlength="6" value ="<?php echo $userName; ?>" required/>
    <span class = "error">* <?php
        echo $usernameErr;?></span>
    <div class = "valid-feedback">Valid.</div>

    <div class = "invalid-feedback">Please fill out this field.</div>
    <div class = "invalid-feedback">Minimum length of six characters.</div>
</div>


    <hr/>
        <div id = "passDiv" class = "form-group">
        <div class = "mb-3">
    <label for="password">Password:</label><br/>
    <input type = "password" id = "password" name = "password" maxlength="50" minlength="8" pattern = "(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*\W).{8,50}"
           title = "Must contain at least one digit, one capitalized letter, one lowercase letter, one special character, and 8-50 characters"
           required value = "<?php echo $password;?>" onblur = "passwordsMatch();"/>
    <span class = "error">* <?php echo $passwordErr;?></span>
    <div class = "valid-feedback">Valid.</div>
    <div class = "invalid-feedback">Please fill out this field.</div>
    <div class = "invalid-feedback">Minimum length of 8 characters. Please include at least 1 capital letter, 1 lowercase letter
    , 1 digit, and 1 special character.</div>
    <hr/>
        </div>
        </div>

    <div id = "verPassDiv" class = "form-group">
    <div class = "mb-3">
    <label for="RepeatPassword">Repeat Password:</label><br/>
    <input type = "password" id = "RepeatPassword" name = "RepeatPassword" maxlength="50" minlength="8" pattern = "(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*\W).{8,50}"
           title = "Must contain at least one digit, one capitalized letter, one lowercase letter, one special character, and 8-50 characters."
           value = "<?php echo $RepeatPassword;?>" required onkeypress = "passwordsMatch();"/>
    <span class = "error">* <?php echo $RepeatPasswordErr;?></span>

    <div class = "valid-feedback">Valid.</div>
    <div class = "invalid-feedback">Please fill out this field.</div>
    <div class = "invalid-feedback">Minimum length of 8 characters. Please include at least 1 capital letter, 1 lowercase letter
        , 1 digit, and 1 special character.
    </br>
        <span id = "samePasswordsErr" class = "help-block hide">
            The passwords DO NOT match!
        </span>
    </div>

        </div>
    </div>


    <hr/>




    <div class = "mb-3">
        <label for="firstName">First Name:</label><br/>
        <input id="firstName" type="text" name="firstName" maxlength="50" required value = "<?php echo $firstName;?>"/>
        <span class = "error">* <?php echo $firstNameErr;?></span>
        <div class = "valid-feedback">Valid.</div>
        <div class = "invalid-feedback">Please fill out this field.</div>

        <br/>

    </div>
    <hr/>



    <div class = "mb-3">
        <label for="lastName">Last Name:</label><br/>
        <input id="lastName" type="text" name="lastName" maxlength="50" required value = "<?php echo $lastName;?>"/>
        <span class = "error">* <?php  echo $lastNameErr;?></span>

        <div class = "valid-feedback">Valid.</div>
        <div class = "invalid-feedback">Please fill out this field.</div>

        <br/>

    </div>
    <hr/>



    <div class = "mb-3">
        <label for="address1">Address Line 1:</label><br/>
        <input id="address1" type="text" name="address1" maxlength="100" required value = "<?php echo $address1;?>"/>
        <span class = "error">* <?php echo $AddressLine1Err;?></span>
        <div class = "valid-feedback">Valid.</div>
        <div class = "invalid-feedback">Please fill out this field.</div>
        <br/>


    </div>
    <hr/>

    <div class = "mb-3">
        <label for="address2">Address Line 2:</label><br/>
        <input id="address2" type="text" name="address2" maxlength="100" optional placeholder="Optional" value = "<?php echo $address2;?>"/>



        <br/>

    </div>
    <hr/>



    <div class = "mb-3">
        <label for="city">City:</label><br/>
        <input id="city" type="text" name="city" maxlength="50" required value = "<?php echo $city;?>"/>
        <span class = "error">* <?php echo $cityErr;?></span>
        <div class = "valid-feedback">Valid.</div>
        <div class = "invalid-feedback">Please fill out this field.</div>
        <br/>

        <br/>
        <select id="state" name="state" maxlength="52" required  value="<?php echo $state;?>"
            <option value="AL">AL</option>
            <option value="AK">AK</option>
            <option value="AR">AR</option>
            <option value="AZ">AZ</option>
            <option value="CA">CA</option>
            <option value="CO">CO</option>
            <option value="CT">CT</option>
            <option value="DC">DC</option>
            <option value="DE">DE</option>
            <option value="FL">FL</option>
            <option value="GA">GA</option>
            <option value="HI">HI</option>
            <option value="IA">IA</option>
            <option value="ID">ID</option>
            <option value="IL">IL</option>
            <option value="IN">IN</option>
            <option value="KS">KS</option>
            <option value="KY">KY</option>
            <option value="LA">LA</option>
            <option value="MA">MA</option>
            <option value="MD">MD</option>
            <option value="ME">ME</option>
            <option value="MI">MI</option>
            <option value="MN">MN</option>
            <option value="MO">MO</option>
            <option value="MS">MS</option>
            <option value="MT">MT</option>
            <option value="NC">NC</option>
            <option value="NE">NE</option>
            <option value="NH">NH</option>
            <option value="NJ">NJ</option>
            <option value="NM">NM</option>
            <option value="NV">NV</option>
            <option value="NY">NY</option>
            <option value="ND">ND</option>
            <option value="OH">OH</option>
            <option value="OK">OK</option>
            <option value="OR">OR</option>
            <option value="PA">PA</option>
            <option value="RI">RI</option>
            <option value="SC">SC</option>
            <option value="SD">SD</option>
            <option value="TN">TN</option>
            <option value="TX">TX</option>
            <option value="UT">UT</option>
            <option value="VT">VT</option>
            <option value="VA">VA</option>
            <option value="WA">WA</option>
            <option value="WI">WI</option>
            <option value="WV">WV</option>
            <option value="WY">WY</option>
        </select>

        <span class = "error">* <?php echo $stateErr;?></span>
        <br>





    </div>
    <hr/>




    <hr/>





    <div class = "mb-3">
        <label for="zipCode">Zip Code:</label><br/>
        <input id="zipCode" type="text" name="zipCode" minlength="5" maxlength="10" required onKeypress="zipHyphen();"
               placeholder = "xxxxx or xxxxx-xxxxx"value = "<?php echo $zipCode;?>"/>
        <span class = "error">* <?php echo $zipCodeErr;?></span>
        <div class = "valid-feedback">Valid.</div>
        <div class = "invalid-feedback">Please fill out this field.</div>
        <br/>

    </div>
    <hr/>







    <div class = "mb-3">
        <label for="phone">Phone Number:</label><br/>
        <input id="phone" type="text" name="phone" maxlength="12"
              placeholder="xxx-xxx-xxxx" required onKeypress = "phoneHyphen();" value = "<?php echo $phone;?>"/>
        <span class = "error">* <?php echo $phoneNumberErr;?></span>
        <div class = "valid-feedback">Valid.</div>
        <div class = "invalid-feedback">Please fill out this field.</div>
        <br/>

        <br/>

    </div>
    <hr/>






    <div class = "mb-3">
        <label for="email">Email:</label><br/>
        <input id="email" type="text" name="email" maxlength="50" placeholder = "x@x.x" required value = "<?php echo $email;?>"/>
        <span class = "error">* <?php echo $emailErr;?></span>
        <div class = "valid-feedback">Valid.</div>
        <div class = "invalid-feedback">Please fill out this field.</div>
        <br/>

    </div>
    <hr/>






<div class = "mb-3">
    <label for ="female">Female</label>
    <input type = "radio" id = "female" name = "gender"
        <?php if (isset($gender) && $gender=="female") echo "checked";?>
           value = "female"/>

    <label for ="Male">Male</label>
    <input type = "radio" id = "male" name = "gender"
        <?php if (isset($gender) && $gender=="male") echo "checked";?>
           value = "male"/>


    <label for ="other">Other</label>
    <input type = "radio" id = "other" name = "gender"
        <?php if (isset($gender) && $gender=="other") echo "checked";?>
           value = "other"/>

    <span class = "error"> * <?php echo $genderErr;?> </span>
    <hr/>

    </div>










<label for = "single">Single</label>
        <input type = "radio" id = "single" name = "maritalStatus"
               <?php if (isset($maritalStatus) && $maritalStatus=="single") echo "checked";?>
        value = "single"/>

        <label for = "relationship">In a Relationship</label>
        <input type = "radio" id = "relationship" name = "maritalStatus"
               <?php if (isset($maritalStatus) && $maritalStatus=="relationship") echo "checked";?>
        value = "relationship"/>

        <label for = "engaged">Engaged</label>
        <input type = "radio" id = "engaged" name = "maritalStatus"
               <?php if (isset($maritalStatus) && $maritalStatus=="engaged") echo "checked";?>
        value = "engaged"/>

        <label for = "married">Married</label>
        <input type = "radio" id = "married" name = "maritalStatus"
               <?php if (isset($maritalStatus) && $maritalStatus=="married") echo "checked";?>
        value = "married"/>

        <label for = "widowed">Widowed</label>
        <input type = "radio" id = "widowed" name = "maritalStatus"
               <?php if (isset($maritalStatus) && $maritalStatus=="widowed") echo "checked";?>
        value = "widowed"/>


        <label for = "divorced">Divorced</label>
        <input type = "radio" id = "divorced" name = "maritalStatus"
              <?php if (isset($maritalStatus) && $maritalStatus=="divorced") echo "checked";?>
        value = "divorced"/>
         <span class = "error">* <?php echo $maritalStatusErr;?></span>
    <hr/>

<br/>

    <hr/>







<div class = "form-check mb-3">
    <label for="dateOfBirth">Date of Birth:</label><br/>
    <input id="dateOfBirth" type="date" name="dateOfBirth" required value = "<?php echo $dateOfBirth;?>"/>
    <span class = "error">* <?php echo $birthdayErr;?></span>

    <br/>

    <hr/>






   <input type = "reset" name="reset" class="btn btn-info"/>

    <button>SUBMIT BUTTON</button>
    <hr/>




    <br>
</form>


    <?php
        include 'insertValidData.php';
    ?>

    <!--Below is code from project 3. This dispalys the user's input information on a page called "confirmation.php". -->
<?php
////var_dump($isValid);
//if ($isValid) {
//    ?>
<!--    <form id="hiddenForm" name="hiddenForm"-->
<!--          method="POST" action="confirmation.php">-->
<!--        --><?php
//        foreach($_POST as $key => $value) {
//            ?>
<!--            <input name="--><?php //echo $key;?><!--"-->
<!--                   value="--><?php //echo $value;?><!--"-->
<!--                   type="hidden"/>-->
<!--            --><?php
//        }
//        ?>
<!--    </form>-->
<!--    <script>-->
<!--        document.createElement('form').submit.call(document.getElementById('hiddenForm'));-->
<!--    </script>-->
<!--    --><?php
//}
//?>








</div>
</body>
</html>