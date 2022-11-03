<?php
   include("./config/constants.php");

   if(isset($_POST['signup'])){
     $std_id = $_POST['stdID'];
     $passwd = $_POST['passwd'];
     $std_name = $_POST['stdName'];
     $doj = $_POST['Doj'];
     $age = $_POST['age'];
     $department = $_POST['department'];
     $mobile_no = $_POST['mobileNo'];
     $email = $_POST['email'];
     
     $sql = "INSERT INTO student VALUES 
            ('$std_id', '$passwd', '$std_name', '$doj', $age, '$department', $mobile_no, '$email')";

     if(mysqli_query($conn, $sql)){
        $message =  "Data Submitted Successfully";
     }else{
        $message =  "Error : ".mysqli_error($conn);
        $message = "Sign Up In Successfully";  
     }

     mysqli_close($conn);
   }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Students Signup</title>
</head>
<body>
    <div class="container">
      <form action="./signup.php" method="post" class="form-signup">
        <h1 class="heading-primary">Sign Up</h1>

        <div class="message"><?php echo $message ?></div>

        <div class="input-group">
            <label for="stdID">ID </label>
            <input type="text" name="stdID">
        </div>
        <div class="input-group">
            <label for="passwd">Password </label>
            <input type="password" name="passwd">
        </div>
        <div class="input-group">
            <label for="stdName">Name </label>
            <input type="text" name="stdName">
        </div>
        <div class="input-group">
            <label for="Doj">Date of Joining </label>
            <input type="date" name="Doj">
        </div>
        <div class="input-group">
            <label for="age">Age </label>
            <input type="number" name="age">
        </div>
        <div class="input-group">
            <label for="department">Department </label>
            <input type="text" name="department">
        </div>
        <div class="input-group">
            <label for="mobileNo">Mobile No. </label>
            <input type="number" name="mobileNo">
        </div>
        <div class="input-group">
            <label for="email">Email </label>
            <input type="email" name="email">
        </div>
        
        <div class="input-group">
            <input type="submit" name="signup" value="Sign Up">
        </div>
      </form>
    </div>
</body>
</html>