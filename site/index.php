<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME TO TSFBANKING</title>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/header_style.css">
    <link rel="stylesheet" href="css/homepage_style.css">
    <link rel="stylesheet" href="css/card_style.css">
        <!-- ion icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <!-- google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <!-- font awesome 4 cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600;1,800&display=swap');
        *{
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            outline: none;
            border: none;
            text-decoration: none;
            transition: all .4s linear;
            box-sizing:border-box;
        }

        *::selection{
            background:rgb(12, 104, 242);
            color:#fff;
        }

        html{
            font-size: 60%;
            overflow-x: hidden;
            scroll-padding-top:5rem;
            scroll-behavior: smooth;
        }
        header .navbar a{
            color:#004aad;
            font-size: 2rem;
            font-weight: 500;
            margin: 0.8rem;
        }

        header .navbar a:hover{
            color:#74d14c;
        }

        .box-text #btn{
            margin-top: 35px;
            padding:10px;
            border: none;
            color: #fff;
            font-size: 17px;
            font-weight: 500;
            letter-spacing: 1px;
            border-radius: 6px;
            background-color: rgba(10, 39, 134, 0.925);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .box-text #btn:hover{
            background-color: #265df2;
        }

        

        /* media queries */

        @media (max-width:1200px){
            html{
                font-size: 50%;
            }
            .footer{
                padding:3rem 5%;
            }
            
        }

        @media(max-width:990px){
            .header{
                padding: 2rem;
            }
            .footer{
                padding:3rem 2rem;
            }
        }

        @media(max-width:768px){
            header .icons #menu-btn{
                display: initial;
            }

            header .navbar{
                position: absolute;
                top:100%;
                right:0;
                left:0;
                padding:1rem 2rem;
                background: linear-gradient(45deg,#72b2e4,#92e1e2); 
                border-top: 0.1 rem solid rgba(34, 30, 30, 0.2);
                clip-path: polygon(0 0,100% 0,100% 0,0 0);
                text-align: center;
            
            }

            header .navbar.active{
                clip-path: polygon(0 0,100% 0,100% 100%,0 100%);
            }

            header .navbar a{
                display: block;
                padding:1rem;
                border-radius: .5rem;
                margin: 1rem 0;
            text-align:center;
                background: #fff; 
            }

        }

        @media(max-width:450px){
            html{
                font-size: 30%;
            }
        }

   </style>

</head>
<body>
   <header class="header" style="position:sticky;top:0;left:0;right:0; background:rgba(255, 255, 255, 0.912); z-index: 1000; display: flex; align-items: center; justify-content: space-between;padding: 1rem 2%;">
        <img src="images/TSFlogo.png" alt="Logo" style="width:6.25rem;">
        <nav class="navbar">
            <a href="index.php">HOME</a>
            <a href="operations/viewcustomer.php">VIEW ALL CUSTOMERS</a>
            <a href="operations/moneysend.php">SEND MONEY</a>
            <a href="operations/transacthistory.php">TRANSACTION HISTORY</a>
        </nav>
    
        <div class="icons">            
            <i id="menu-btn" class="fas fa-bars"></i>
        </div>
        
    </header>
    <!-- header section ends -->

    <!--home slider section starts-->
    <section class="home">
        <div class="swiper home-slider">
           
            <div class="swiper-wrapper">
     
                <section class="swiper-slide slide" style="background: url(images/1.png) no-repeat;">
                    <div class="content">
                        <h3>Welcome to<br>TSFBANKING</h3>
                    </div>
                </section>
     
                <section class="swiper-slide slide" style="background: url(images/2.png) no-repeat;">
                    <div class="content">
                        <h3>To find out more about<br>The Sparks Foundation,</h3>
                        <a href="https://www.thesparksfoundationsingapore.org/" style="font-size: 3rem; line-height: 2; color: #cf1a18;padding: 1rem 0;">Click here</a>
                    </div>
                </section>

                <section class="swiper-slide slide" style="background: url(images/3.png) no-repeat;">
                    <div class="content">
                        <h3>This website is created by<br><span style="color:#004aad">Simran Sharma</span></h3>
                        <h4 style="font-size: 2.5rem; text-transform: capitalize; color: #74d14c;">Connect with me :</h4>
                        <div class="social-handles">
                            <a href="https://www.instagram.com/simm.rann0220/"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/simran-sharma-2a1740238/"><i class="fab fa-linkedin-square" ></i></a>
                        </div>
                    </div>  
                </section>

            </div>
            <div class="swiper-pagination"></div>

        </div>    
    </section>
    <!-- home slider section ends-->

    <section class="inform_about">
        <div class="content">
            <h3 style="font-weight:600;">SERVICES PROVIDED BY<br>TSFBANKING</h3>
        </div>
    </section>

    <section id="fac-box"> 
        <div class="b-con">
    
            <div class="single-box">
                <div class="bimg">
                    <img alt="picture" src="images/customerspic.jpg">
                </div>
                <div class="box-text">
                    <button id="btn"><a href="operations/viewcustomer.php" style="color:#fff;">VIEW ALL CUSTOMERS</a></button>
                </div>
            </div>

            <div class="single-box">
                <div class="bimg">
                    <img alt="picture" src="images/moneyy.jpg">
                </div>
                <div class="box-text">
                    <button id="btn"><a href="operations/moneysend.php" style="color:#fff;">SEND MONEY</a></button>
                </div>
            </div>

            <div class="single-box">
                <div class="bimg">
                    <img alt="picture" src="images/viewhistory.jpg">
                </div>
                <div class="box-text">
                    <button id="btn"><a href="operations/transacthistory.php" style="color:#fff;">TRANSACTION HISTORY</a></button>
                </div>
            </div>

            <div class="single-box">
                <div class="bimg">
                    <img alt="picture" src="images/perhistory.jpg">
                </div>
                <div class="box-text">
                    <button id="btn"><a href="operations/checkbalance.php" style="color:#fff;">CHECK PERSONAL DETAILS</a></button>
                </div>
            </div>

            <div class="single-box">
                <div class="bimg">
                    <img alt="picture" src="images/newcust.jpg">
                </div>
                <div class="box-text">
                    <button id="btn"><a href="operations/addcustomer.php" style="color:#fff;">ADD CUSTOMER</a></button>
                </div>
            </div>
        
        </div>
    </section>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        let menu=document.querySelector('#menu-btn');
        let navbar= document.querySelector('.navbar');

        window.onscroll = () =>{
            searchbtn.classList.remove('fa-times');
            searchbar.classList.remove('active');
        }

        menu.addEventListener('click',() =>{
            menu.classList.toggle('fa-times');
            navbar.classList.toggle('active');
        })

        var swiper = new Swiper(".home-slider", {
            autoplay:{
                delay:4000,
                disableOnInteraction: false,
            },
        pagination: {
            el: ".swiper-pagination",
            clickable:true,
        },
        loop:true,
        grabCursor:true,
        });
    </script>
</body>
</html>