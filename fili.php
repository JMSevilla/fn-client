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
    <link rel="stylesheet" href="./css/fili_styles.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>El Filibusterismo</title> 
    
    <link rel="shortcut icon" type="images/png" href="images/EF.png">
</head>

<body>
    
		<nav class="sidebar close">
			<header>
				<div class="image-text">
					<span class="image">
						<img src="./images/EF.png" alt="">
					</span>

					<div class="text logo-text">
						<span class="name_two">El Filibusterismo</span>
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
                        <span class="text nav-text">Ano ang Kabanata?</span>
                    </a>
                </li>

                <!-- tauhan section-->
                <li data-tab-target="#nobela" class="tab nav-link">
                    <a href="#">
                        <i class='bx bx-face icon' ></i>
                        <span class="text nav-text">Mga Tauhan</span>
                    </a>
                </li>

                <!-- Kabanata section-->
                <li data-tab-target="#kabanata_1" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 1</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_2" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 2</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_3" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 3</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_4" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 4</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_5" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 5</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_6" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 6</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_7" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 7</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_8" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 8</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_9" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 9</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_10" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 10</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_11" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 11</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_12" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 12</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_13" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 13</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_14" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 14</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_15" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 15</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_16" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 16</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_17" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 17</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_18" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 18</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_19" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 19</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_20" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 20</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_21" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 21</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_22" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 22</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_23" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 23</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_24" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 24</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_25" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 25</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_26" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 26</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_27" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 27</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_28" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 28</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_29" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 29</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_30" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 30</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_31" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 31</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_32" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 32</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_33" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 33</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_34" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 34</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_35" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 35</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_36" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 36</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_37" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 37</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_38" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 38</span>
                    </a>
                </li>

                <li data-tab-target="#kabanata_39" class=" tab nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon' ></i>
                        <span class="text nav-text">Kabanata 39</span>
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

                    <!-- Fili page -->
                    <?php include 'fili/talambuhay.php'; ?>

                    <?php include 'fili/kaalaman.php'; ?>

                    <?php include 'fili/nobela.php'; ?>

                    <?php include 'fili/kabanata_1.php'; ?>

                    <?php include 'fili/kabanata_2.php'; ?>

                    <?php include 'fili/kabanata_3.php'; ?>

                    <?php include 'fili/kabanata_4.php'; ?>

                    <?php include 'fili/kabanata_5.php'; ?>

                    <?php include 'fili/kabanata_6.php'; ?>
                    
                    <?php include 'fili/kabanata_7.php'; ?>

                    <?php include 'fili/kabanata_8.php'; ?>

                    <?php include 'fili/kabanata_9.php'; ?>

                    <?php include 'fili/kabanata_10.php'; ?>

                    <?php include 'fili/kabanata_11.php'; ?>

                    <?php include 'fili/kabanata_12.php'; ?>

                    <?php include 'fili/kabanata_13.php'; ?>

                    <?php include 'fili/kabanata_14.php'; ?>

                    <?php include 'fili/kabanata_15.php'; ?>

                    <?php include 'fili/kabanata_16.php'; ?>
                    
                    <?php include 'fili/kabanata_17.php'; ?>

                    <?php include 'fili/kabanata_18.php'; ?>

                    <?php include 'fili/kabanata_19.php'; ?>

                    <?php include 'fili/kabanata_20.php'; ?>

                    <?php include 'fili/kabanata_21.php'; ?>

                    <?php include 'fili/kabanata_22.php'; ?>

                    <?php include 'fili/kabanata_23.php'; ?>

                    <?php include 'fili/kabanata_24.php'; ?>

                    <?php include 'fili/kabanata_25.php'; ?>

                    <?php include 'fili/kabanata_26.php'; ?>
                    
                    <?php include 'fili/kabanata_27.php'; ?>

                    <?php include 'fili/kabanata_28.php'; ?>

                    <?php include 'fili/kabanata_29.php'; ?>

                    <?php include 'fili/kabanata_30.php'; ?>

                    <?php include 'fili/kabanata_31.php'; ?>

                    <?php include 'fili/kabanata_32.php'; ?>

                    <?php include 'fili/kabanata_33.php'; ?>

                    <?php include 'fili/kabanata_34.php'; ?>

                    <?php include 'fili/kabanata_35.php'; ?>

                    <?php include 'fili/kabanata_36.php'; ?>
                    
                    <?php include 'fili/kabanata_37.php'; ?>

                    <?php include 'fili/kabanata_38.php'; ?>

                    <?php include 'fili/kabanata_39.php'; ?>

                    <?php include 'fili/buod.php'; ?>

            </div>

        </div>  

        <li class="search-box "></li>

</section>

    <script defer src="script.js"></script>
                            
</body>
</html>
