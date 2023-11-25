<?php

include 'config.php';
// include 'connection.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));


   $select = mysqli_query($conn, "SELECT * FROM user_form WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'Nagamit na ang email na ito!'; 
   }else{
      if($pass != $cpass){
         $message[] = 'Ang kinumpirmang Password ay hindi Tugma!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `user_form`(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');

         if($insert){
            $message_approve[] = 'Matagumpay ang Pagpaparehistro!';
         }else{
            $message[] = 'Nabigo ang Pagpaparehistro!';
         }
      }
   }

}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <title>Rehistro</title>
   
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
      <h3>Rehistro</h3>
         <center><p class="copyright">Punan ang mga kahon upang magkaroon ng Account!</p></center>
      
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
               
               <i class="user_regis">Username:
                  <input type="text" name="name" placeholder="Ilagay ang iyong username" class="box" required>
               </i>
               
               <br>
               <i class="email_regis">Email: 
                  <input type="email" name="email" placeholder="Ilagay ang iyong email" class="box" required>
               </i>
               
               <br>
               <i class="pass_regis">Password: 
                  <input type="password" id="passwordInput" name="password" pattern="(?=.*\d)(?=.*[\W_]).{7,}" title="Minimum ng pitong characters. Dapat magkaroon ng kahit isang espesyal na karakter at isang numero." placeholder="Ilagay ang iyong password" class="box" required>
               </i>
               
               <i class="show">
                  <input type="checkbox" id="showPasswordCheckbox" class="show_box"> Ipakita ang Password
               </i>
               
               <br>
               <i class="co_regis">Kumpirmahin:
                  <input type="password" id="cpasswordInput" name="cpassword" placeholder="Ilagay ulit ang iyong password" class="box" required>
               </i>

               <i class="show">
                  <input type="checkbox" id="showCPasswordCheckbox" class="show_box"> Ipakita ang Password
               </i>

               <br>
               <input type="submit" name="submit" value="I-Rehistro" class="login_regis_btn"></input>
               
               </p>
            </div>
      </div>
            
 
      <!-- <center><input type="submit" name="submit" value="I-Register" class="login_regis_btn"></center>    -->
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