<?php
   include("./config/constants.php");

   if(isset($_POST['login'])){
     $std_id = $_POST['stdID'];
     $passwd = $_POST['passwd'];
    
     $sql = "SELECT * FROM student WHERE stdID = '$std_id' AND passwd = $passwd LIMIT 1";

     $result = mysqli_query($conn, $sql);

     if(!$result){
        $message = "Could not run query : ".mysqli_error($conn);
     }
     else if(mysqli_num_rows($result) == 0){
        $message = "Wrong username or password";
     }
     else{
        $data = mysqli_fetch_assoc($result);
        $message = "Logged In Successfully";  
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
        <form action="./login.php" method="post" class="form-login">
            <h1 class="heading-primary">Login</h1>

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
                <input type="submit" name="login" value="Login">
            </div>
        </form>
    </div>
</body>
</html>