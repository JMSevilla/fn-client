        <?php

session_start();
    include("connection.php");
    include("config.php");
    $user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:filipinobela.php');
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS Style Sheets -->
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="./css/ibong_adarna_styles.css">

    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Ibong Adarna</title> 
    
    <link rel="shortcut icon" type="images/png" href="images/IA.png">
</head>

<body>
    
		<nav class="sidebar close">
			<header>
				<div class="image-text">
					<span class="image">
						<img src="./images/IA.png" alt="">
					</span>

					<div class="text logo-text">
						<span class="name_two">Ibong Adarna</span>
					</div>
				</div>

				<i class='bx bx-menu toggle'></i>
			</header>
                

            <div class="menu-bar">
				<div class="menu">

                <li data-tab-target="#">
                    <a href="main.php">
                        <i class='bx bx-arrow-back icon'></i>
                        <span class="text nav-text">Bumalik</span>
                    </a>
                </li>
                
				<div class="bottom-content">
                    <li class="mode">
                        <div class="sun-moon">
                            <i class='bx bx-moon icon moon'></i>
                            <i class='bx bx-sun icon sun'></i>
                        </div>
                <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </div>    
                </li>


		
		    <ul class="menu-links tabs">
				<!-- talambuhay section-->
				<li data-tab-target="#talambuhay" class="active tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-reader icon' ></i>
                        <span class="text nav-text">Talambuhay</span>
                    </a>
                </li>

                <!-- Karagdagang Kaalaman section-->
                <li data-tab-target="#kaalaman" class="tab nav-link">
                    <a href="#">
                        <i class='bx bx-help-circle icon'></i>
                        <span class="text nav-text">Ano ang Korido?</span>
                    </a>
                </li>

                <!-- tauhan section-->
                <li data-tab-target="#nobela" class="tab nav-link">
                    <a href="#">
                        <i class='bx bx-face icon' ></i>
                        <span class="text nav-text">Mga Tauhan</span>
                    </a>
                </li>

                <!-- korido section-->
                <li data-tab-target="#korido_1" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 1</span>
                    </a>
                </li>

                <li data-tab-target="#korido_2" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 2</span>
                    </a>
                </li>

                <li data-tab-target="#korido_3" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 3</span>
                    </a>
                </li>

                <li data-tab-target="#korido_4" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 4</span>
                    </a>
                </li>

                <li data-tab-target="#korido_5" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 5</span>
                    </a>
                </li>

                <li data-tab-target="#korido_6" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 6</span>
                    </a>
                </li>

                <li data-tab-target="#korido_7" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 7</span>
                    </a>
                </li>

                <li data-tab-target="#korido_8" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 8</span>
                    </a>
                </li>

                <li data-tab-target="#korido_9" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 9</span>
                    </a>
                </li>

                <li data-tab-target="#korido_10" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 10</span>
                    </a>
                </li>

                <li data-tab-target="#korido_11" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 11</span>
                    </a>
                </li>

                <li data-tab-target="#korido_12" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 12</span>
                    </a>
                </li>

                <li data-tab-target="#korido_13" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 13</span>
                    </a>
                </li>

                <li data-tab-target="#korido_14" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 14</span>
                    </a>
                </li>

                <li data-tab-target="#korido_15" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 15</span>
                    </a>
                </li>

                <li data-tab-target="#korido_16" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 16</span>
                    </a>
                </li>

                <li data-tab-target="#korido_17" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 17</span>
                    </a>
                </li>

                <li data-tab-target="#korido_18" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 18</span>
                    </a>
                </li>

                <li data-tab-target="#korido_19" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 19</span>
                    </a>
                </li>

                <li data-tab-target="#korido_20" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 20</span>
                    </a>
                </li>

                <li data-tab-target="#korido_21" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 21</span>
                    </a>
                </li>

                <li data-tab-target="#korido_22" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 22</span>
                    </a>
                </li>

                <li data-tab-target="#korido_23" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 23</span>
                    </a>
                </li>

                <li data-tab-target="#korido_24" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 24</span>
                    </a>
                </li>

                <li data-tab-target="#korido_25" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 25</span>
                    </a>
                </li>

                <li data-tab-target="#korido_26" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 26</span>
                    </a>
                </li>

                <li data-tab-target="#korido_27" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 27</span>
                    </a>
                </li>

                <li data-tab-target="#korido_28" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 28</span>
                    </a>
                </li>

                <li data-tab-target="#korido_29" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 29</span>
                    </a>
                </li>

                <li data-tab-target="#korido_30" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Korido 30</span>
                    </a>
                </li>

                <!-- buod section-->
				<li data-tab-target="#buod" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bxs-book-open icon' ></i>
                        <span class="text nav-text">Buod</span>
                    </a>
                </li>
            
            </ul>
        
        </div>
    </div>

</nav>

    <section class="home ">

        <div class="tab-content">

                    <!-- Ibong Adarna page -->
                    <?php include 'ibong_adarna/talambuhay.php'; ?>

                    <?php include 'ibong_adarna/kaalaman.php'; ?>

                    <?php include 'ibong_adarna/nobela.php'; ?>

                    <?php include 'ibong_adarna/korido_1.php'; ?>

                    <?php include 'ibong_adarna/korido_2.php'; ?>

                    <?php include 'ibong_adarna/korido_3.php'; ?>

                    <?php include 'ibong_adarna/korido_4.php'; ?>

                    <?php include 'ibong_adarna/korido_5.php'; ?>

                    <?php include 'ibong_adarna/korido_6.php'; ?>
                    
                    <?php include 'ibong_adarna/korido_7.php'; ?>

                    <?php include 'ibong_adarna/korido_8.php'; ?>

                    <?php include 'ibong_adarna/korido_9.php'; ?>

                    <?php include 'ibong_adarna/korido_10.php'; ?>

                    <?php include 'ibong_adarna/korido_11.php'; ?>

                    <?php include 'ibong_adarna/korido_12.php'; ?>

                    <?php include 'ibong_adarna/korido_13.php'; ?>

                    <?php include 'ibong_adarna/korido_14.php'; ?>

                    <?php include 'ibong_adarna/korido_15.php'; ?>

                    <?php include 'ibong_adarna/korido_16.php'; ?>
                    
                    <?php include 'ibong_adarna/korido_17.php'; ?>

                    <?php include 'ibong_adarna/korido_18.php'; ?>

                    <?php include 'ibong_adarna/korido_19.php'; ?>

                    <?php include 'ibong_adarna/korido_20.php'; ?>

                    <?php include 'ibong_adarna/korido_21.php'; ?>

                    <?php include 'ibong_adarna/korido_22.php'; ?>

                    <?php include 'ibong_adarna/korido_23.php'; ?>

                    <?php include 'ibong_adarna/korido_24.php'; ?>

                    <?php include 'ibong_adarna/korido_25.php'; ?>

                    <?php include 'ibong_adarna/korido_26.php'; ?>
                    
                    <?php include 'ibong_adarna/korido_27.php'; ?>

                    <?php include 'ibong_adarna/korido_28.php'; ?>

                    <?php include 'ibong_adarna/korido_29.php'; ?>

                    <?php include 'ibong_adarna/korido_30.php'; ?>

                    <?php include 'ibong_adarna/buod.php'; ?>
                    
            </div>

        </div>  

        <li class="search-box"></li>

</section>

    <script defer src="script.js"></script>
                            
</body>
</html>
