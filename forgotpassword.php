<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM user_form WHERE email = '$email' ") or die('query failed');
  $row = mysqli_fetch_assoc($select);
  
  
  
  

   if(mysqli_num_rows($select) > 0){
    
  
  
  
  
  
  $to = $email;
  $subject = "Password Reset";
         
         $message = "Paki-click ang link upang baguhin ang iyong password.";
         $message .= "http://nauticaloptionslms.com/FIL/newpassword.php?email=$email";
         
         $header = "From:cemetery@gmail.com \r\n";
         $header .= "";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
  
         
         mail($to,$subject,$message);
   
   
   }
  
  
   if($insert){
      $message_approve[] = 'Matagumpay ang pagpapadala sa iyong email!';
   }else{
      $message[] = 'Maling Email';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <title>Login</title>
   
   <link rel="shortcut icon" type="images/png" href="images/logo_main.png">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/login_styles.css">

   <!----===== Boxicons CSS ===== -->
   <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
   
<div class="form-container">
   
   <form action="" method="post" enctype="multipart/form-data">
      <a href="login.php" class='bx bx-arrow-back'></a>
      <h2>Forgot Password</h2>
         <center><p class="copyright">Ilagay ang iyong email.</p></center>

      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      if(isset($message_approve)){
         foreach($message_approve as $message_approve){
            echo '<div class="message_approve">'.$message_approve.'</div>';
         }
      }
      ?>

      <div class="login_regis-container">
         <div class="text-container">
           <p class="login_regis-text">
            
               <i class="email">Email: 
                  <input type="email" name="email" placeholder="Ilagay ang iyong email" class="box" required>
               </i>
               <input type="submit" name="submit" value="Submit" class="login_regis_btn"></input>
            </p>
         </div>
      </div>
               
   </form>

</div>

</body>
</html>