<?php
   include("./config/constants.php");
   
   if(isset($_POST['update_profile'])){
     $std_id = $_POST['stdID'];
     $passwd = $_POST['passwd'];
     $mobile_no = $_POST['mobileNo'];
     $email = $_POST['email'];
    
     $sql = "SELECT * FROM student WHERE stdID = '$std_id' AND passwd = $passwd LIMIT 1";

     $result = mysqli_query($conn, $sql);

     if(!$result){
        $message = "Could not run query : ".mysqli_error($conn);
     }
     else if(mysqli_num_rows($result) == 0){
        $message = "Wrong username or password";
     }
     else{
        $sql = "UPDATE student SET mobileNo = $mobile_no, email = '$email'  WHERE stdID = '$std_id'";
        
        $result = mysqli_query($conn, $sql);

        if(!$result){
            $message = "Could not run query : ".mysqli_error($conn);
         }
         else{
            $message = "Mobile No. and Email updated successfully";
         }
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
    <title>Students Login</title>
</head>
<body>
    <div class="container">
        <form action="./update_profile.php" method="post" class="form-update_profile">
            <h1 class="heading-primary">Update Profile</h1>
            
            <div class="message"><?php echo $message ?? "" ?></div>

            <div class="input-group">
               <label for="stdID">ID</label>
               <input type="text" name="stdID">
            </div>
            <div class="input-group">
               <label for="passwd">Password</label>
               <input type="password" name="passwd">
            </div>
            <div class="input-group">
               <label for="mobileNo">Mobile No.</label>
               <input type="number" name="mobileNo">
            </div>
            <div class="input-group">
               <label for="email">Email</label>
               <input type="email" name="email">
            </div>
        
            <input type="submit" name="update_profile" value="Update Profile">
        </form>
    </div>
</body>
</html>