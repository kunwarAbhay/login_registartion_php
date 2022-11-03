<?php    
   define('SERVER', 'localhost');
   define('USERNAME', 'root');
   define('PASSWORD', '');
   define('DATABASE', '2001cs40');

   $conn = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);

   if(!$conn){
    die("Connection Failed : ".mysqli_connect_error());
   }

   function notify_success($message){
      echo "<span class='success'>$message</span>";
   }

   function notify_error($message){
      echo "<span class='error'>$message</span>";
   }
?>