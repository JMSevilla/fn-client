<?php

session_start();
    include("connection.php");
    include("config.php");
    $user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:filipinobela.php');
}

if(isset($_POST['update_profile'])){

  
   $old_pass = $_POST['old_pass'];
   $update_pass = mysqli_real_escape_string($conn, md5($_POST['update_pass']));
   $new_pass = mysqli_real_escape_string($conn, md5($_POST['new_pass']));
   $confirm_pass = mysqli_real_escape_string($conn, md5($_POST['confirm_pass']));

   if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
      if($update_pass != $old_pass){
         $message[] = 'Hindi tugma ang iyong lumang Password!';
      }elseif($new_pass != $confirm_pass){
         $message[] = 'Kumpirmahin ang Password ay hindi Tugma!';
      }else{
         mysqli_query($conn, "UPDATE `user_form` SET password = '$confirm_pass' WHERE id = '$user_id'") or die('query failed');  
         $messages[] = 'Matagumpay na na-update ang iyong Password!';
      }
   }

}

if(isset($_POST['update_profiles'])){
   
   $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
   $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);

   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = 'uploaded_img/'.$update_image;

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = 'image is too large';
      }else{
         $image_update_query = mysqli_query($conn, "UPDATE `user_form` SET image = '$update_image' WHERE id = '$user_id'") or die('query failed');
         if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
         }

   $insert = mysqli_query($conn, "UPDATE user_form SET name = '$update_name', email = '$update_email' WHERE id = '$user_id'") or die('query failed');

   if($insert){
            $name_email[] = 'Matagumpay na na-update ang iyong Profile!';
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

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/update_profile.css">

   <!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

	<title>I-Update ang Profile</title>
   
   <link rel="shortcut icon" type="images/png" href="images/logo_main.png">

</head>
<body>
   
<div class="update-profile">

   <?php
      $select = mysqli_query($conn, "SELECT * FROM user_form WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      
      <!-- <img src="images/profile.png" class="img"> -->
      
      <?php

         if($fetch['image'] == ''){
            echo '<img src="images/profile.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
         
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
         elseif(isset($messages)){
            foreach($messages as $messages){
               echo '<div class="messages">'.$messages.'</div>';
            } 
         } 
         if(isset($name_email)){
            foreach($name_email as $name_email){
               echo '<div class="name_email">'.$name_email.'</div>';
            }
         } 

      ?>

      <div class="flex">
         <div class="inputBox">
            <span><h3>Iyong Username:</span></h3>
            <input type="text" name="update_name" value="<?php echo $fetch['name']; ?>" class="box">
            <!-- <span class="search-box"> <?php echo $fetch['name']; ?> </span> -->
            <span><h3>Iyong Email:</span></h3>
            <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
            <span><h3>Iyong Larawan:</span></h3>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
            <p style="text-align:left;">*Pumili ng isang parisukat na larawan para sa iyong profile picture sa pag-update ng iyong profile.</p>
            <input type="submit" value="I-Update ang Profile" name="update_profiles" class="btn">
         </div>

         <div class="inputBox">
            <input type="hidden" name="old_pass" value="<?php echo $fetch['password']; ?>">
            <span><h3>Password:</span></h3>
            <input type="password" name="update_pass" id="oldpasswordInput" placeholder="Ilagay ang Password" class="box" required>
            <p class="show"><input type="checkbox" id="showOldPasswordCheckbox" class="show_box"> Ipakita ang Password
            <span><h3>Bagong Password: </span></h3>
            <input type="password" name="new_pass" id="passwordInput" attern="(?=.*\d)(?=.*[\W_]).{7,}" title="Minimum of 7 characters. Should have at least one special character and one number." placeholder="Ilagay ang bagong Password" class="box" >
            <p class="show"><input type="checkbox" id="showPasswordCheckbox" class="show_box"> Ipakita ang Password
            <span><h3>Kumpirmahin: </span></h3>
            <input type="password" name="confirm_pass" id="cpasswordInput" placeholder="Kumpirmahin ang bagong Password" class="box" >
            <p class="show"><input type="checkbox" id="showCPasswordCheckbox" class="show_box"> Ipakita ang Password

               <input type="submit" value="I-Update ang Password" name="update_profile" class="btn_two">
         </div>
      </div>

      

      <a href="index.php" class="back-btn">Bumalik</a>

      <script>
         const oldpasswordInput = document.getElementById('oldpasswordInput');
         const showOldPasswordCheckbox = document.getElementById('showOldPasswordCheckbox');

         showOldPasswordCheckbox.addEventListener('change', function() {
         if (showOldPasswordCheckbox.checked) {
            oldpasswordInput.type = 'text';
         } else {
            oldpasswordInput.type = 'password';
         }
         });
      </script>

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