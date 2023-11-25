<?php

session_start();
    include("connection.php");
    include("config.php");
    $user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:filipinobela.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:filipinobela.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- swup transition --> 
    <script defer src="https://unpkg.com/swup@3"></script>
    <script defer>const swup = new Swup();</script>

     <!-- sweet alert -->
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script defer src="sweetalert.min.js"></script>
    <script defer src="jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin="anonymous"></script>
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="./css/main_styles.css">

    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>FilipiNobela</title> 
    
    <link rel="shortcut icon" type="images/png" href="images/logo_main.png">
</head>

<body>
    
		<nav class="sidebar close">
			<header>
				<div class="image-text">
					<span class="image">
						<img src="./images/logo_main.png" alt="">
					</span>

					<div class="text logo-text">
						<span class="name">&nbsp;FilipiNobela</span>
					</div>
				</div>
				
                <i class='bx bx-menu toggle'></i>
				
			</header>

			<div class="menu-bar">
				<div class="menu">
				
				<!-- search button -->
				<li class="search-box">
                        <?php
                             $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
                             if(mysqli_num_rows($select) > 0){
                                $fetch = mysqli_fetch_assoc($select);
                             }
                             if($fetch['image'] == ''){
                                echo '<img src="images/profile.png">'; 
                             }else{
                                echo '<img src="uploaded_img/'.$fetch['image'].'">' ;
                             } 
                          ?> &nbsp;&nbsp;&nbsp;

					<?php
						$select = mysqli_query($conn, "SELECT * FROM `user_form`  WHERE id = '$user_id'") or die('query failed');
						if(mysqli_num_rows($select) > 0){
							$fetch = mysqli_fetch_assoc($select);


						}
					?>

					<span class="text"><h3>Hi <?php echo $fetch['name']; ?>!</h3></span>
			    </li>

			<ul class="menu-links tabs">
				<!-- nobela section-->
				<li data-tab-target="#nobela" class="active tab nav-link">
                    <a href="#">
                        <i class='bx bx-book icon' ></i>
                        <span class="text nav-text">Nobela</span>
                    </a>
                </li>

                <!-- katanungan section-->
                <li data-tab-target="#katanungan" class="tab nav-link">
                    <a href="#">
                        <i class='bx bx-help-circle icon'></i>
                        <span class="text nav-text">Mga Katanungan</span>
                    </a>
                </li>

                <!-- tungkol sa filipinobela section-->
                <li data-tab-target="#tungkol" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-heart icon' ></i>
                        <span class="text nav-text">Tungkol sa FilipiNobela</span>
                    </a>
                </li>

                <!-- marka section-->
                <!-- <li data-tab-target="#dashboard" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-heart icon' ></i>
                        <span class="text nav-text">Mga Marka</span>
                    </a>
                </li> -->
            </ul>
                </div>


            <div class="bottom-content">
                <!-- Update Profile button -->
                <li class="">
                    <a href="update_profile.php">
                        <i class='bx bx-cog icon' ></i>
                        <span class="text nav-text">I-Update ang Profile</span>
                    </a>
                </li>
            
                <!-- log-out button -->
                <li class="">
                    <a href="main.php?logout=<?php echo $user_id; ?>">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Mag-sign out</span>
                    </a>
                </li>

                </div>

            </div>

        </nav>
    

    <section class="home ">

        <div class="tab-content">

            <!-- nobela page -->
            <div id="nobela" data-tab-content class="active">
                <form class="nobela_form container" action="" method="post">
                    <h1 class="katanungan_title title"><i class='bx bx-book' ></i> Nobela</h1>

                    <div class="nobela_box_container">
                        <div class="nobela_card container">
                            <img src="images/IA.png" class="nobela_profile_img">
                            <div class="content">
                                <h1>Ibong Adarna</h1>   
                                <p>Buod <br> 
								Tauhan <br>
                                Talambuhay <br>
                                Korido 1 - 30</p>
                                <br>               
                                <center><a href="ibong_adarna.php" class="btn">Buksan</a></center><br>
                            </div>
                        </div>

                        <div class="nobela_card container">
                            <img src="images/FL.png" class="nobela_profile_img">
                            <div class="content">
                                <h1>Florante at Laura</h1>
                                <p>Buod <br> 
								Tauhan <br>
                                Talambuhay <br>
                                Korido 1 - 29</p>
                                <br>               
                                <center><a href="florante_laura.php" class="btn">Buksan</a></center><br>
                            </div>
                        </div>

                        <div class="nobela_card container">
                            <img src="images/NMT.png" class="nobela_profile_img">
                            <div class="content">
                                <h1>Noli Me Tangere</h1>
                                <p>Buod <br> 
								Tauhan <br>
                                Talambuhay <br>
                                Kabanata 1 - 64</p>
                                <br>               
                                <center><a href="noli.php" class="btn">Buksan</a></center><br>
                            </div>
                        </div>

                        <div class="nobela_card container">
                            <img src="images/EF.png" class="nobela_profile_img">
                            <div class="content">
                                <h1>El Filibusterismo</h1>
                                <p>Buod <br> 
								Tauhan <br>
                                Talambuhay <br>
                                Kabanata 1 - 39</p>
                                <br>               
                                <center><a href="fili.php" class="btn">Buksan</a></center><br>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


            <!-- Mga Katanungan page -->
            <div id="katanungan" data-tab-content>
                            
                <div class="katanungan_container container">
                    <h1 class="katanungan_title title"><i class='bx bx-help-circle' ></i> Mga Katanungan</h1>
                    
                    <div class="katanungan_first_container">
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Ang seksyon na ito ay nagbibigay kasagutan sa mga gumagamit ng pook-sapot na ito kung ano ang mga madalas katanungan tungkol sa FilipiNobela. Kasama na rin dito ang pakikipag ugnayan sa mga developers kung may problema na nakakaharap sa paggamit ng FilipiNobela at pagbibigay din ng puna (Feedback) sa sistemang ito.</p>
                    </div><br>
                    
                    
                    <div class="katanungan_second_container">
                        <form method="post" class="contact_form container">
                            <h3 class="katanungan_title title"><i class='bx bxs-contact bx-flip-horizontal' ></i>Makipag-ugnayan sa amin</h3>

                            <center><img src="./images/connect.png" alt="" class="katanungan_img"></center>

                            <div class="form__div">
                                <input type="text" name="name" class="form__input" placeholder=" " required>
                                <label for="name" class="form__label"> <i class='bx bx-user icon' ></i>  Pangalan</label>
                            </div>

                            <div class="form__div">
                                <input type="email" name="email" class="form__input" placeholder=" " required>
                                <label for="email" class="form__label"><i class='bx bx-envelope icon' ></i>  Email</label>
                            </div>

                            <div class="form__div">
                                <textarea type="text" name="message" class="form__input form_textarea" placeholder=" " cols="30" rows="10" required></textarea>
                                <label for="message" class="form__label"><i class='bx bx-message-square-edit icon' ></i>  Mensahe</label>
                            </div>
                            <br>
                            <div class="button-container">
                                <button type="submit" name="submit" class="btn contact__button" value="Submit">Ipasa</button>
                            </div>
                                    <?php

                                    if(isset($_POST['submit'])){

                                        $name = $_POST['name']; 
                                        $name = filter_var($name, FILTER_SANITIZE_STRING);
                                        $email = $_POST['email']; 
                                        $email = filter_var($email, FILTER_SANITIZE_STRING);
                                        $message = $_POST['message']; 
                                        $message = filter_var($message, FILTER_SANITIZE_STRING);

                                        $select_contact = $con->prepare("SELECT * FROM `contact` WHERE name = ? AND email = ? AND message = ?");
                                        $select_contact->execute([$name, $email, $message]);
                                        $result = $select_contact->get_result();

                                        if($result && mysqli_num_rows($result) > 0){
                                            ?>

                                            <?php

                                        }else{
                                            $insert_message = $con->prepare("INSERT INTO `contact`(name, email, message) VALUES(?,?,?)");
                                            $insert_message->execute([$name, $email, $message]);
                                            ?>

                                            <script>  
                                                    swal({
                                                    title: "Tagumpay!",
                                                    text: "Matagumpay na naipadala ang iyong Minsahe!",
                                                    icon: "success"
                                                    });
                                            </script>

                                            <?php 
                                        }

                                    }

                                    ?>
                        </form>
              
                        <div class="katanungan_third_container">
                            <h3 class="katanungan_title"><i class='bx bx-help-circle' ></i> Madalas na katanungan:</h3><br>
                             
                            <center><img src="./images/katanungan.png" alt="" class="katanungan_img"></center>

                            <h4>ANO BA ANG MERON SA FILIPINOBELA?</h4>
                            <p>- Ang FilipiNobela ay naglalaman ng Nobelang Filipino kung saan ginagamit ito ng mga mag-aaral sa kanilang leksyon.</p>
                            <p>- Sa dulo ng bawat kabanata kanilang matatagpuan ang pagsusulit na susubok sa kanilang natutunan. Ito rin ay makatutulong sa kanila na maunawaan at matandaan ang mahahalagang bagay na naganap sa bawat kabanata.</p> <br>
                            <h4>ANO PA ANG KAYANG GAWIN NG SISTEMANG FILIPINOBELA?</h4>
                            <p>-    Sa pagbukas ng bawat portal sa bawat kabanata, kanilang makikita sa itaas na bahagi nito ang recorded audio na binabasa ang bawat stanza, upang mapadali ang kanilang pagbabasa.</p><br>
                            <h4>MAY MGA ISYU SA IYONG ACCOUNT?</h4>
                            <p>- Upang itama ito, mangyaring punan ang form sa makipag-ugnayan sa amin sa kaliwang bahagi upang ma-iayos agad ang isyung ikinahaharap ng sistemang ito.</p>
                        </div>

                    </div>
                    
                </div>

            </div>


            <!-- TUngkol sa FilipiNobela page -->
            <div id="tungkol" data-tab-content>
                <form class="tungkol_form container" action="" method="post">
                    <h1 class="tungkol_title title"><i class='bx bx-heart' ></i> Tungkol sa FilipiNobela</h1>
                        
                            <div class="tungkol_second_container">
                                <h2>Panimula</h2><br>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								Ang sistema na ito ay nakatuon sa pagbibigay sa mga estudyante na nasa sekondarya ng nostalhik na damdamin at kasiyahan upang muling suriin ang mga komedya, trahedya at inspirasyon ng magagandang nobelang Pilipino.
                                <br><br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								Ang pangunahing priyoridad ng FilipiNobela ay ang mag-alok ng karaniwang kaalaman kung gaano kahalagaan ang mga nobelang Pilipino. Dito ay matutuklasan ang mga iba't ibang paniniwala, ideya, at lipunan ng tao mula sa nakaraan, na ang ilan sa mga ito ay bahagi pa rin ng ating kultura sa kasalukuyan. 
                                <br><br>
                                
								<h2>Benipisyo ng FilipiNobela</h2><br>
                                <div class="tungkol_box_container">
                                    <div class="tungkol_card container">
                                        <img src="./images/benefit_1.png" alt="" class="tungkol_profile_img"><br>
                                        <p>Mas kaunting oras sa paghahanap ng mga Nobela</p>
                                    </div>
                                    <div class="tungkol_card container">
                                        <img src="./images/benefit_2.png" alt="" class="tungkol_profile_img"><br>
                                        <p>Nakakatulong sa mga estudyante</p>
                                    </div>
                                    <div class="tungkol_card container">
                                        <img src="./images/benefit_3.png" alt="" class="tungkol_profile_img"><br>
                                        <p>Nadadagdagan ang kaalaman sa kultura</p>
                                    </div>
                                    <div class="tungkol_card container">
                                        <img src="./images/benefit_4.png" alt="" class="tungkol_profile_img"><br>
                                        <p>Madaling gamitin</p>
                                    </div>
                                </div>

                                <br>
                                <hr size="1" color="#AC9362" align="center">
                                <p class="aboutus_copyright">Copyright © by FilipiNobela | All rights reserved.</p>

                            </div>

                        </div>      
                        
                    </div>

                </div>

                <!-- Dashboard page -->
                <!-- <div id="dashboard" data-tab-content>
                                
                    <div class="katanungan_container container">
                        <h1 class="katanungan_title title"><i class='bx bx-help-circle' ></i> Iyong Quiz Score Dashboard</h1>
                        
                        <div class="katanungan_first_container">
                            <div id="score-display"></div>
                            
                        </div>
                    </div>

                </div> -->


                
                <li class="mode">    
                <div class="toggle-switch"></div>
                </li>
                        
</section>

    <script defer src="script.js"></script>
                            
</body>
</html>