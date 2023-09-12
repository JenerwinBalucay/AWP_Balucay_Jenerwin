<?php
   include("db_Config.php");
   ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
    font-family: Verdana, sans-serif;
    min-height: 200vh;
    background: #eee;
    display: flex;
    justify-content: center;
    align-items: center;
}
    .form-container form {
    display: flex;
    flex-direction: column;
    gap: 5px;
    width: 300px;
    background: white;
    padding: 2rem;
    border-radius: 10px;
    position: relative;
    margin-left: 16%; 
}
    .form-container h2{
        color: darkgreen;
        text-align: center;
        font-family: Verdana, sans-serif;
}
    .form-container label{
        font-family: Verdana, sans-serif;
        font-size: 12px;
        margin: 2px;
        letter-spacing: 1px;
        margin-left: 2px;
    }.form-container input, select{
        border: none;
        background: #eee;
        height: 30px;
        font-family: Verdana, sans-serif;
    }
    .form-container input:hover,  select:hover{
        background-color:forestgreen;
        cursor: pointer;
        color: white;
    }
    
    .form-container button{
        width: 100%;
        height: 30px;
        background: darkgreen;
        color: white;
        border: none;
        border-radius: 10px;
        font-family: Verdana, sans-serif;
        margin-top: 10px;
    }
    .form-container button:hover{
        background-color: white;
        color:black;
        cursor: pointer;
        border: 1px solid darkgreen;
    }
</style>
<body>
<div class="form-container">
<form method="post">
        <label>Last Name</label><br>
        <input type="text" id="last_name" name="last_name">

        <label>First Name</label><br>
        <input type="text" id="first_name" name="first_name">

        <label>Middle Name</label><br>
        <input type="text" id="middle_name" name="middle_name">

        <label>Extension Name</label><br>
        <input type="text" id="extension_name" name="extension_name">

        <label>Sex</label><br>
        <select name="sex" id="sex">
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select> 

        <label>Birth_Date</label><br>
        <input type="date" id="birth_date" name="birth_date">

        <label>Age</label><br>
        <input type="number" id="age" name="age">

        <label>Home Address</label><br>
        <input type="text" id="home_address" name="home_address">

        <label>Civil Status</label><br>
        <select name="civil_status" id="civil_status">
            <option value="Single">Single</option>
            <option value="Maried">Maried</option>
            <option value="Widowed/Widower">Widowed/Widower</option>
        </select> 

        <label>Nationality</label><br>
        <input type="text" id="nationality" name="nationality">

        <label>Religion</label><br>
        <input type="text" id="religion" name="religion">

        <label>Boarding Address</label><br>
        <input type="text" id="boarding_address" name="boarding_address">

        <label>Contact Number</label><br>
        <input type="text" id="contact_number" name="contact_number">

        <label>Email Address</label><br>
        <input type="email" id="email_address" name="email_address">
<button type="submit"  name="add_Student">ADD STUDENT</button>
</form>
</div>
<?php 
  if (array_key_exists('add_Student',$_POST))
  {
         $last_name= $_POST ['last_name'];
         $first_name= $_POST ['first_name'];
         $middle_name= $_POST ['middle_name'];
         $extension_name= $_POST ['extension_name'];
         $sex= $_POST ['sex'];
         $birth_date= $_POST ['birth_date'];
         $age= $_POST ['age'];
         $home_address= $_POST ['home_address'];
         $civil_status= $_POST ['civil_status'];
         $nationality= $_POST ['nationality'];
         $religion= $_POST ['religion'];
         $boarding_address= $_POST ['boarding_address'];
         $contact_number= $_POST ['contact_number'];
         $email_address= $_POST ['email_address'];
  
         echo $last_name;
         echo $first_name;
         echo $middle_name;
         echo $extension_name;
         echo $sex;
         echo $birth_date;
         echo $age;
         echo $home_address;
         echo $civil_status;
         echo $nationality;
         echo $religion;
         echo $boarding_address;
         echo $contact_number;
         echo $email_address;
        //EVERYTHING ABOVE IS WORKING

        //  $insert_person= "INSERT INTO `person` (`last_name`, `first_name`, `middle_name`, `extension_name`, `sex`, `birth_date`, `age`, `home_address`, `civil_status`, `religion`, `nationality`, `boarding_address`, `contact_number`, `email_address`) 
        //  VALUES ('$last_name','$first_name','$middle_name','$extension_name','$sex',' $birth_date','$age','$home_address','$civil_status','$religion','$nationality','$boarding_address','$contact_number','$email_address');";
        //  $result= $db_connect->query($insert_person);


         $db_connect->query("SET @Input_last_name='" .$last_name. "'");
         $db_connect->query("SET @Input_first_name='" .$first_name. "'");
         $db_connect->query("SET @Input_middle_name='" .$middle_name. "'");
         $db_connect->query("SET @Input_extension_name='" .$extension_name. "'");
         $db_connect->query("SET @Input_sex='" .$sex. "'");
         $db_connect->query("SET @Input_birth_date='" .$birth_date. "'");
         $db_connect->query("SET @Input_age='" .$age. "'");
         $db_connect->query("SET @Input_home_address='" .$home_address. "'");
         $db_connect->query("SET @Input_civil_status='" .$civil_status. "'");
         $db_connect->query("SET @Input_nationality='" .$nationality. "'");
         $db_connect->query("SET @Input_religion='" .$religion. "'");
         $db_connect->query("SET @Input_boarding_address='" .$boarding_address. "'");
         $db_connect->query("SET @Input_contact_number='" .$contact_number. "'");
         $db_connect->query("SET @Input_email_address='" .$email_address. "'");
         $insert_person=$db_connect->query("CALL SP_Add_person(@Input_last_name,@Input_first_name,@Input_middle_name,@Input_extension_name,@Input_sex,@Input_birth_date,@Input_age,@Input_home_address,@Input_civil_status,@Input_nationality,@Input_religion,@Input_boarding_address,@Input_contact_number,@Input_email_address)");

         $result= $db_connect->query($insert_person);  
  }
?>
</body>
</html>