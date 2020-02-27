<?php
include_once("validation.php");

    $firstname = $_POST['firstname'];
    echo "First Name: ",$firstname,"<br>";

    $middlename = $_POST['middlename'];
    echo "Middle Name: ",$middlename,"<br>";

    $lastname = $_POST['lastname'];
    echo "Last Name: ",$lastname,"<br>";

    $address = $_POST['address'];
    echo "Address: ",$address,"<br>";

    $placeofbirth = $_POST['placeofbirth'];
    echo "Place of Birth: ",$placeofbirth,"<br>";

    $dateofbirth = $_POST['dateofbirth'];
    echo "Date of Birth: ",$dateofbirth,"<br>";

    $civilstatus = $_POST['civilstatus'];
    echo "Civil Status: ",$civilstatus,"<br>";

    $guardian = $_POST['guardian'];
    echo "Guardian: ",$guardian,"<br>";

    $contactnumber = $_POST['contactnumber'];
    echo "Contact Number: ",$contactnumber,"<br>";

    $email = $_POST['email'];
    echo "Email: ",$email,"<br>";

    $course = $_POST['course'];
    echo "Course: ",$course,"<br>";

    $schoolyear = $_POST['schoolyear'];
    echo "School Year: ",$schoolyear,"<br>";

    $yearlevel = $_POST['yearlevel'];
    echo "Year Level: ",$yearlevel,"<br> <br> <br>";
    
    if (notEmp($firstname) && notEmp($lastname) && notEmp($middlename) && notEmp($address) && notEmp($placeofbirth) && notEmp($guardian) && notEmp($civilstatus) && notEmp($schoolyear) && notEmp($email)){
        echo "valid", "<br>";
    }
    else{
        echo "Input should not be empty", "<br>";
    }
    
    /* number2 */
    if (shouldnotNum($firstname) && shouldnotNum($lastname) && shouldnotNum($middlename) &&shouldnotNum($address) && shouldnotNum($placeofbirth) && shouldnotNum($guardian) && shouldnotNum($civilstatus) && shouldnotNum($email)){
        echo "valid", "<br>";
    }
    else{
        echo "Input should not contain with a number", "<br>";
    }
    /* number3 */
    if (notSpecialChar($firstname) && notSpecialChar($lastname) && notSpecialChar($middlename) && notSpecialChar($address) && notSpecialChar($placeofbirth) && notSpecialChar($guardian) && notSpecialChar($civilstatus) && notSpecialChar($schoolyear) && notSpecialChar($email)){
        echo "valid", "<br>";
    }
    else{
        echo "Input should not contain with a special character", "<br>";
    }
    /* number4 */
    if (moreThan2($lastname) && moreThan2($firstname)){
        echo "valid", "<br>";
    }
    else{
        echo "Input should be more than 2 characters.", "<br>";
    }
    /* number5 */
    if (notags($lastname) && notags($firstname) && notags($middlename) && notags($address) && notags($placeofbirth) && notags($guardian) && notags($civilstatus) && notags($schoolyear) && notags($email)){
       echo "valid", "<br>";
    }
    else{
        echo "Input should not contain tags.", "<br>"; 
    }
    /* number6 */
    if (emailFormat($email)){
        echo "valid", "<br>";
    }
    else{
        echo "Invalid email format.", "<br>";
    }
    /* number7 */
    if (philprefix($contactnumber)){
        echo "valid";
    }
    else{
        echo "Input start with +63**********";
    }



?>