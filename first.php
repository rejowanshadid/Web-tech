<?php 


if (empty($_POST['firstName'])) {
    echo "FIRST NAME FIELD IS EMPTY";
}
else {
    echo "First Name: " . $_POST['firstName'];
}

echo "<br>";

if (empty($_POST['lastName'])) {
    echo "LAST NAME IS EMPTY";
}
else {
    echo "Last Name: " . $_POST['lastName'];
}
echo"<br>";

if (empty($_POST['Gender'])) {
    echo "GENDER IS EMPTY";
}
else {
    echo "Gender: " . $_POST['Gender'];
}


echo "<br>";

if (empty($_POST['fatherName'])) {
    echo "FATHER'S NAME IS EMPTY";
}
else {
    echo "Father's Name: " . $_POST['fatherName'];
}


echo "<br>";

if (empty($_POST['motherName'])) {
    echo "MOTHER's NAME IS EMPTY";
}
else {
    echo "Mother's Name: ". $_POST['motherName'];
}

echo "<br>";

if (empty($_POST['bloodGroup'])) {
    echo "BLOOD GROUP ISN'T SELECTED";
}
else {
    echo "Blood Group: ". $_POST['bloodGroup'];
}

echo "<br>";

if (empty($_POST['Religion'])) {
    echo "RELIGION ISN'T SELECTED";
}
else {
    echo "Religion: " . $_POST['Religion'];
}


echo "<br>";

if (empty($_POST['email'])) {
    echo "EMAIL IS EMPTY";
}
else {
    echo "Email: " . $_POST['email'];
}

echo "<br>";

if (empty($_POST['phone'])) {
    echo "PHONE NUMBER IS EMPTY";
}
else {
    echo "Phone: " . $_POST['phone'];
}

echo "<br>";

if (empty($_POST['website'])) {
    echo "WEBSITE IS EMPTY";
}
else {
    echo "Website: " . $_POST['website'];
}

echo "<br>";

if (empty($_POST['country'])) {
    echo "COUNTRY IS EMPTY";
}
else {
    echo "Country: " . $_POST['country'];
}

echo "<br>";

if (empty($_POST['division'])) {
    echo "DIVISION IS EMPTY";
}
else {
    echo "Division: " . $_POST['division'];
}

echo "<br>";

if (empty($_POST['road'])) {
    echo "ROAD/STREET IS EMPTY";
}
else {
    echo "Road/Street: " . $_POST['road'];
}

echo "<br>";

if (empty($_POST['postcode'])) {
    echo "POST CODE IS EMPTY";
}
else {
    echo "Post Code: " . $_POST['postcode'];
}

echo "<br>";

if (empty($_POST['userName'])) {
    echo "USERNAME IS EMPTY";
}
else {
    echo "User Name: " . $_POST['userName'];
}

echo "<br>";

if (empty($_POST['password'])) {
    echo "PASSWORD IS EMPTY";
}
else {
    echo "Password: " . $_POST['password'];
}


echo "<br>";
/*
if (empty($_POST['confirmPassword'])){
    echo "CONFIRM PASS IS EMPTY";
}
else {
    echo "Confirm Pass:" . $_POST['confirmPassword'];
}
*/

if (empty($_POST['confirmPassword'])) {
    echo "CONFIRM PASSWORD IS EMPTY";
}
else if ($_POST['password'] != $_POST['confirmPassword']) {
    echo "PASSWORD DOES NOT MATCH";
}
else {
    echo "PASSWORD MATCHED";
}


?>