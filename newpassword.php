<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){


   $pass1 = mysqli_real_escape_string($conn, md5($_POST['pass1']));
   $pass2 = mysqli_real_escape_string($conn, md5($_POST['pass2']));
$email=$_GET['email'];


  

   if($pass1==$pass2){
    
  
  
  
  
  
  $to = $email;
  $subject = "Matagumpay na Napalitan ang Password";
         
         $message = "Napalitan ang Password!";
         $message .= "";
         
     
   $insert = mysqli_query($conn, "UPDATE user_form SET password = '$pass1' WHERE email = '$email'") or die('query failed');

  
         
         mail($to,$subject,$message);
   
   
   
  
  
   
   }else{
      $message[] = 'Di-tugma ang Pasword!';
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
      <h2>Gumawa ng Password</h2>
         <center><p class="copyright">Gumawa ulit ng panibagong password para sa iyong account.</p></center>

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
            
               <i class="email">Bagong Password: 
                  <input type="password" name="pass1" id="passwordInput" placeholder="Ilagay ang iyong email" class="box" pattern="(?=.*\d)(?=.*[\W_]).{7,}" title="Minimum ng pitong characters. Dapat magkaroon ng kahit isang espesyal na karakter at isang numero." required>
               </i>

               <i class="show">
                  <input type="checkbox" id="showPasswordCheckbox" class="show_box"> Ipakita ang Password
               </i>
            
               <br>
               <i class="email">Co-Password:
                  <input type="password" name="pass2" id="cpasswordInput" placeholder="Ilagay ang iyong email" class="box" required>
               </i>

               <i class="show">
                  <input type="checkbox" id="showCPasswordCheckbox" class="show_box"> Ipakita ang Password
               </i>
            
               <br>
               <input type="submit" name="submit" value="Submit" class="login_regis_btn"></input>
            
                  </p>
            </div>
      </div>
      
      
      <script>
         const passwordInput = document.getElementById('passwordInput');
         const showPasswordCheckbox = document.getElementById('showPasswordCheckbox');

         showPasswordCheckbox.addEventListener('change', function() {
         if (showPasswordCheckbox.checked) {
            passwordInput.type = 'text';
         } else {
            passwordInput.type = 'password';
         }
         });
      </script>

      <script>
         const cpasswordInput = document.getElementById('cpasswordInput');
         const showCPasswordCheckbox = document.getElementById('showCPasswordCheckbox');

         showCPasswordCheckbox.addEventListener('change', function() {
         if (showCPasswordCheckbox.checked) {
            cpasswordInput.type = 'text';
         } else {
            cpasswordInput.type = 'password';
         }
         });
      </script>
         
         

   </form>

</div>

</body>
</html>