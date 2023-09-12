<?php
include("db_config.php");


$person_ID = "person_ID";
$last_name = "last_name";
$first_name = "first_name";
$middle_name = "middle_name";
$extension_name = "extension_name";
$sex = "sex";
$birth_date = "birth_date";
$age = "age";
$home_address = "home_address";
$civil_status = "civil_status";
$religion = "religion";
$nationality = "nationality";
$boarding_address = "boarding_address";
$contact_number = "contact_number";
$email_address = "email_address";



if (array_key_exists('search_user', $_POST)) {
    $person_Id = $_POST['person_ID'];

    $SearchUserAccountQuery = "SELECT * FROM `person` WHERE `Person_Id` = '$person_Id'";

    $result = $db_connect->query($SearchUserAccountQuery);

    if ($result) {
    
    while ($row = mysqli_fetch_object($result)) {
   
    $last_name = $row->last_name;
    $first_name = $row->first_name;
    $middle_name = $row->middle_name;
    $extension_name = $row->extension_name;
    $sex = $row->sex;
    $birth_date= $row->birth_date;
    $age = $row->age;
    $home_address = $row->home_address;
    $civil_status = $row->civil_status;
    $religion = $row->religion;
    $nationality = $row->nationality;
    $boarding_address = $row->boarding_address;
    $contact_number = $row->contact_number;
    $email_address = $row->email_address;
    }

    } else {
    echo "Error executing the query: " . $db_connect->error;
    }
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY USER</title>
</head>
<body>
    <form method="post">
        <input type="text" id="person_ID" name="person_ID">
        <label for="person_ID">Person ID</label><br>
        <button type="submit"  name="search_user">SEARCH</button>
    </form>
    <input type="text" id="last_name" name="last_name" value="<?php echo $last_name ?>">
    <label for="last_name">Last_Name</label><br>

    <input type="text" id="first_name" name="first_name" value="<?php echo $first_name ?>">
    <label for="first_name">First_Name</label><br>
    
    <input type="text" id="middle_name" name="middle_name" value="<?php echo $middle_name ?>">
    <label for="middle_name">Middle_Name</label><br>

    <input type="text" id="extension_name" name="extension_name" value="<?php echo $extension_name ?>">
    <label for="extension_name">Extension_Name</label><br>

    <input type="text" id="sex" name="sex" value="<?php echo $sex ?>">
    <label for="sex">Sex</label><br>

    <input type="text" id="birth_date" name="birth_date" value="<?php echo $birth_date ?>">
    <label for="birth_date">Birth_Date</label><br>

    <input type="text" id="age" name="age" value="<?php echo $age ?>">
    <label for="age">Age</label><br>

    <input type="text" id="home_address" name="home_address" value="<?php echo $home_address ?>">
    <label for="home_address">Home_Address</label><br>

    <input type="text" id="civil_status" name="civil_status" value="<?php echo $civil_status ?>">
    <label for="civil_status">Civil_Status</label><br>

    <input type="text" id="nationality" name="nationality" value="<?php echo $nationality ?>">
    <label for="nationality">Nationality</label><br>

    <input type="text" id="religion" name="religion" value="<?php echo $religion ?>">
    <label for="religion">Religion</label><br>

    <input type="text" id="boarding_address" name="boarding_address" value="<?php echo $boarding_address ?>">
    <label for="boarding_address">boarding_address</label><br>
    
    <input type="text" id="contact_number" name="contact_number" value="<?php echo $contact_number ?>">
    <label for="contact_number">Contact_Number</label><br>

    
    <input type="text" id="email_address" name="email_address" value="<?php echo $email_address ?>">
    <label for="email_address">Email_Address</label><br>


</body>
</html>