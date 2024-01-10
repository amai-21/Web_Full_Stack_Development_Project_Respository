

<?php

//define variables and set to empty values:

 $usernameErr = $passwordErr = $RepeatPasswordErr = $SamePasswordErr = $firstNameErr =
$lastNameErr = $AddressLine1Err = $AddressLine2Err = $cityErr =
$stateErr = $zipCodeErr = $phoneNumberErr = $emailErr = $genderErr =
$maritalStatusErr = $birthdayErr = "";

$userName = $password = $RepeatPassword = $firstName =
$lastName = $address1 = $address2 = $city = $state = $zipCode =
$phone = $email = $gender = $maritalStatus = $dateOfBirth = "";

$isValid = false;






if($_SERVER["REQUEST_METHOD"] = "POST") {
    $isValid = true;

    $userName = clean_input(isset($_POST["userName"]) ? $_POST["userName"] : null);
    if (empty($userName)) {
        $usernameErr = "Username is required";
        $isValid = false;
    } elseif(strlen($userName) < 6) {
        $usernameErr = "Username length MUST have a minimum of 6 characters.";
        $isValid = false;
    } else{
        //Nothing else. The code is good.
    }


    //Variables for checking password requirements.

    //1 digit
//    $containsDigitPassword = preg_match('/\d/', $password);
//    $containsLowerPassword = preg_match('/[a-z]/', $password);
//    $containsCapitalPassword = preg_match('/[A-Z]/', $password);
/*    $containsSpecialPassword = preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password);*/


    $DigitPattern = '/[0-9]/';
    $LowercasePattern = '/[a-z]/';
    $CapitalPattern = '/[A-Z]/';
    $SpecialcharPattern = '/[^A-Za-z0-9]/';
    $allPatterns = '/\d/[a-z]/[A-Z]/[\'^£$%&*()}{@#~?><>,|=_+¬-]/';

$containsDigitPassword = preg_match($DigitPattern, $password);


//    $containsAllPatternsPassword = preg_match($allPatterns, $password);


    $password = clean_input(isset($_POST["password"]) ? $_POST["password"] : null);
    if (empty($password)) {
        $passwordErr = "Password is required";
        $isValid = false;
    } elseif (strlen($password) < 8) {
        $passwordErr = "Password must have a minimum of 8 characters.";
        $isValid = false;

    } elseif(preg_match($DigitPattern, $password) != 1 OR preg_match($LowercasePattern, $password) != 1 OR
    preg_match($CapitalPattern, $password) != 1 OR preg_match($SpecialcharPattern, $password) != 1){
        $passwordErr = "Password must contain at least 1 capital, 1 lowercase, 1 digit, and 1 special character(s).";
        $isValid = false;

    }
    else{
        //Code is good.


    }


    $RepeatPassword = clean_input(isset($_POST["RepeatPassword"]) ? $_POST["RepeatPassword"] : null);
    if (empty($RepeatPassword)) {
        $RepeatPasswordErr = "Repeat Password is required";
        $isValid = false;
    } elseif (preg_match($DigitPattern, $RepeatPassword) != 1 OR preg_match($LowercasePattern, $RepeatPassword) != 1 OR
    preg_match($CapitalPattern, $RepeatPassword) != 1 OR preg_match($SpecialcharPattern, $RepeatPassword) != 1){
        $RepeatPasswordErr = "Repeat Password must contain at least 1 capital, 1 lowercase, 1 digit, and 1 special character(s).";
        $isValid = false;

    } elseif(strlen($RepeatPassword) < 8){
        $RepeatPasswordErr = "Repeat Password must be at least 8 characters long.";
        $isValid = false;

    } elseif($RepeatPassword != $password){
        $RepeatPasswordErr = "Passwords MUST match!!";
        $isValid = false;
    }
    else{
        //All good.
    }


    $firstName = clean_input(isset($_POST["firstName"]) ? $_POST["firstName"] : null);
    if (empty($firstName)) {
        $firstNameErr = "First Name is required";
        $isValid = false;
    } elseif(strlen($firstName) == 50) {
       $firstNameErr = "First name character limit: 50";
       $isValid = false;
    } else{
        //All good.
    }


    $lastName = clean_input(isset($_POST["lastName"]) ? $_POST["lastName"] : null);
    if (empty($lastName)) {
        $lastNameErr = "Last Name is required";
        $isValid = false;
    } elseif(strlen($lastName) == 50) {
        $lastNameErr = "Last name character limit: 50";
     $isValid = false;
    }


    $address1 = clean_input(isset($_POST["address1"]) ? $_POST["address1"] : null);
    if (empty($address1)) {
        $AddressLine1Err = "Address Line 1 is required";
        $isValid = false;
    } elseif (strlen($address1) == 100) {
        $AddressLine1Err = "Address Line 1 character limit: 100.";
        $isValid = false;
    }


    $address2 = clean_input(isset($_POST["address1"]) ? $_POST["address1"] : null);
    if (empty($address2)) {
       //Nothing...this is optional.
    } else{
        //Nuthin.
    }


    $city = clean_input(isset($_POST["city"]) ? $_POST["city"] : null);
    if (empty($city)) {
        $cityErr = "City is required";
        $isValid = false;
    } elseif(strlen($city) == 50) {
        $cityErr = "City character limit is 50.";
        $isValid = false;
    }


    $state = clean_input(isset($_POST["state"]) ? $_POST["state"] : null);
    if (empty($state)) {
        $stateErr = "State is required";
        $isValid = false;
    } else {
        //Success!
    }


    $zipCode = clean_input(isset($_POST["zipCode"]) ? $_POST["zipCode"] : null);
    if (empty($zipCode)) {
        $zipCodeErr = "Zip Code is required";
        $isValid = false;
    } elseif(strlen($zipCode) < 5) {
       $zipCodeErr = "Zip Code must be at least five numbers long.";
       $isValid = false;
    } elseif(strlen($zipCode) > 10){
        $zipCodeErr = "Zip code CANNOT be more than ten numbers long.";
        $isValid = false;
    } elseif(strlen($zipCode) > 5 AND preg_match('-', $zipCode) != 1){
        $zipCodeErr = "Please type in your zip code correctly.";
        $isValid = false;
    }
    else{
        //Nothin. This is good.
    }



    $phone = clean_input(isset($_POST["phone"]) ? $_POST["phone"] : null);
    if (empty($phone)) {
        $phoneNumberErr = "Phone Number is required";
        $isValid = false;
    } elseif(strlen($phone) > 12) {
        $phoneNumberErr = "Phone number length cannot exceed 12.";
        $isValid = false;
    } else{
        //We good.
    }


    $email = clean_input(isset($_POST["email"]) ? $_POST["email"] : null);
    if (empty($email)) {
        $emailErr = "Email is required";
        $isValid = false;
    } elseif(strlen($email) ){

    }
    else {
       //check if email address is well-formed.

       if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
           /*
           The vilter var() function is the easiest and safeset way to check whether an email address is well-informed.
           */
        }
    }


    $gender = clean_input(isset($_POST["gender"]) ? $_POST["gender"] : null);
    if (empty($gender)) {
        $genderErr = "Gender is required";
        $isValid = false;
    } elseif(strlen($gender) == 50) {
        $genderErr = "Gender character cannot exceed 50.";
        $isValid = false;

    }
    else{
        //All good.
    }


    $maritalStatus = clean_input(isset($_POST["maritalStatus"]) ? $_POST["maritalStatus"] : null);
    if (empty($maritalStatus)) {
        $maritalStatusErr = "Marital Status is required";
        $isValid = false;
    } elseif(strlen($maritalStatus) == 50) {
        $maritalStatusErr = "Marital status character length cannot exceed 50.";
        $isValid = false;

    }


    $dateOfBirth = clean_input(isset($_POST["dateOfBirth"]) ? $_POST["dateOfBirth"] : null);
    if (empty($dateOfBirth)) {
        $birthdayErr = "Birthday is required";
        $isValid = false;
    } else {
      //Nuthin.
    }
}
            //var_dump($isValid);

            function clean_input($data): string
            {
                $data = trim($data);
                $data = stripslashes($data);
                return htmlspecialchars($data);
            }














