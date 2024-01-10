<!DOCTYPE html>
<?php
    include 'connectionInfo.php';

?>

<html lang="en">
    <head>

        <?php define("title", "confirmation"); ?>
        <title>
            <?php echo title; ?>
        </title>
        <meta charset = "utf-8"/>
    </head>
    <body>


    <?php
        include 'selectUserData.php';
        include 'inputValidate.php';
    ?>
Welcome to the Confirmation Page



<?php
//
//
//    foreach($_POST as $key => $value){
//        echo "<br/>$key : $value <br/>";
//
//
//    }
//?>


    <form id = "myForm" name = "myForm" method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class = "was-validated">


        <div class = "mb-3 mt-3">
            <label for="userName" class = "form-label">Username:</label>
            <input disabled id = "userName" class = "form-control" type = "text" name = "userName" maxlength="50" minlength="6" value ="<?php echo $userName; ?>" required/>

        </div>


        <hr/>
        <div id = "passDiv" class = "form-group">
            <div class = "mb-3">
                <label for="password">Password:</label><br/>
                <input disabled type = "password" id = "password" name = "password" maxlength="50" minlength="8" pattern = "(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*\W).{8,50}"
                       title = "Must contain at least one digit, one capitalized letter, one lowercase letter, one special character, and 8-50 characters"
                       required value = "<?php echo $password;?>" onblur = "passwordsMatch();"/>

                <hr/>
            </div>
        </div>

        <div id = "verPassDiv" class = "form-group">
            <div class = "mb-3">
                <label for="RepeatPassword">Repeat Password:</label><br/>
                <input disabled type = "password" id = "RepeatPassword" name = "RepeatPassword" maxlength="50" minlength="8" pattern = "(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*\W).{8,50}"
                       title = "Must contain at least one digit, one capitalized letter, one lowercase letter, one special character, and 8-50 characters."
                       value = "<?php echo $RepeatPassword;?>" required onkeypress = "passwordsMatch();"/>

                </div>

            </div>
        </div>


        <hr/>




        <div class = "mb-3">
            <label for="firstName">First Name:</label><br/>
            <input disabled id="firstName" type="text" name="firstName" maxlength="50" required value = "<?php echo $firstName;?>"/>

            <br/>

        </div>
        <hr/>



        <div class = "mb-3">
            <label for="lastName">Last Name:</label><br/>
            <input disabled id="lastName" type="text" name="lastName" maxlength="50" required value = "<?php echo $lastName;?>"/>

            <br/>

        </div>
        <hr/>



        <div class = "mb-3">
            <label for="address1">Address Line 1:</label><br/>
            <input disabled id="address1" type="text" name="address1" maxlength="100" required value = "<?php echo $address1;?>"/>

            <br/>


        </div>
        <hr/>

        <div class = "mb-3">
            <label for="address2">Address Line 2:</label><br/>
            <input disabled id="address2" type="text" name="address2" maxlength="100" optional placeholder="Optional" value = "<?php echo $address2;?>"/>



            <br/>

        </div>
        <hr/>



        <div class = "mb-3">
            <label for="city">City:</label><br/>
            <input disabled id="city" type="text" name="city" maxlength="50" required value = "<?php echo $city;?>"/>

            <br/>

            <br/>
            <select disabled id="state" name="state" maxlength="52" required  value="<?php echo $state;?>"/>
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


            <br>





        </div>
        <hr/>




        <hr/>





        <div class = "mb-3">
            <label for="zipCode">Zip Code:</label><br/>
            <input disabled id="zipCode" type="text" name="zipCode" minlength="5" maxlength="10" required onKeypress="zipHyphen();"
                   placeholder = "xxxxx or xxxxx-xxxxx"value = "<?php echo $zipCode;?>"/>


        </div>
        <hr/>







        <div class = "mb-3">
            <label for="phone">Phone Number:</label><br/>
            <input disabled id="phone" type="text" name="phone" maxlength="12"
                   placeholder="xxx-xxx-xxxx" required onKeypress = "phoneHyphen();" value = "<?php echo $phone;?>"/>

            <br/>

            <br/>

        </div>
        <hr/>






        <div class = "mb-3">
            <label for="email">Email:</label><br/>
            <input disabled id="email" type="text" name="email" maxlength="50" placeholder = "x@x.x" required value = "<?php echo $email;?>"/>


        </div>
        <hr/>







        <label for ="female">Female</label>
        <input disabled type = "radio" id = "female" name = "gender"
            <?php if ($gender = "female"){
                echo "checked" ;}?>
               value = "female"/>

        <label for ="Male">Male</label>
        <input disabled type = "radio" id = "male" name = "gender"
            <?php if ($gender = "male"){
                echo "checked" ;}?>
               value = "male"/>


        <label for ="other">Other</label>
        <input disabled type = "radio" id = "other" name = "gender"
            <?php if ($gender = "other"){
                echo "checked" ;}?>
               value = "other"/>


    <hr/>












<label for = "single">Single</label>
        <input disabled type = "radio" id = "single" name = "maritalStatus"
               <?php if ($maritalStatus == "single"){echo "checked";}?>
        value = "single"/>

        <label for = "relationship">In a Relationship</label>
        <input disabled type = "radio" id = "relationship" name = "maritalStatus"
               <?php if ($maritalStatus == "relationship"){echo "checked";}?>
        value = "relationship"/>

        <label for = "engaged">Engaged</label>
        <input disabled type = "radio" id = "engaged" name = "maritalStatus"
               <?php if ($maritalStatus == "engaged"){echo "checked";}?>
        value = "engaged"/>

        <label for = "married">Married</label>
        <input disabled type = "radio" id = "married" name = "maritalStatus"
               <?php if ($maritalStatus == "married"){echo "checked";}?>
        value = "married"/>

        <label for = "widowed">Widowed</label>
        <input disabled type = "radio" id = "widowed" name = "maritalStatus"
               <?php if ($maritalStatus == "widowed"){echo "checked";}?>
        value = "widowed"/>


        <label for = "divorced">Divorced</label>
        <input disabled type = "radio" id = "divorced" name = "maritalStatus"
               <?php if ($maritalStatus == "divorced"){echo "checked";}?>
        value = "divorced"/>



<br/>

    <hr/>







<div class = "form-check mb-3">
    <label for="dateOfBirth">Date of Birth:</label><br/>
    <input disabled id="dateOfBirth" type="date" name="dateOfBirth" required value = "<?php echo $dateOfBirth;?>"/>


    <br/>

    <hr/>








    <button>SUBMIT BUTTON</button>
    <hr/>




    <br>
    </form>
    <?php
        include 'insertValidData.php';
    ?>


</body>

</html>
