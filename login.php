<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM user_form WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:index.php');
   }else{
      $message[] = 'Maling Email o Password!';
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
      <a href="filipinobela.php" class='bx bx-arrow-back'></a>
      <h3>Login</h3>
         <center><p class="copyright">Mag-login gamit ang iyong email at password.</p></center>

      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>

      <div class="login_regis-container">
         <div class="text-container">
           <p class="login_regis-text">
            
               <i class="email">Email: 
                  <input type="email" name="email" placeholder="Ilagay ang iyong email" class="box" required>
               </i>
               <br>
               <i class="pass">Password: 
                  <input type="password" id="passwordInput" name="password" placeholder="Ilagay ang iyong password" class="box"  required>
               </i>
               <i class="show">
                  <input type="checkbox" id="showPasswordCheckbox" class="show_box"> Ipakita ang Password
               </i>
               <br>

               <input type="submit" name="submit" value="I-Login" class="login_regis_btn"></input>
            
                  </p>
            </div>
      </div>
               <hr size="4" color="#321414" align="center"><br>
               <a href="forgotpassword.php" class="forgot" >Nakalimutan ang password?</a>
               <p class="p_regis">Walang pang account?<a href="mabuhay.php" class="tab_regis" > Gumawa ng Bagong Account!</a></p>
               
      
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
         
         

   </form>

</div>

</body>
</html>