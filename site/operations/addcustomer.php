<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD CUSTOMER | TSFBANKING</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/header_style.css">
    <link rel="stylesheet" href="../css/sm_style.css">

    <!-- google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- font awesome 4 cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600;1,800&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            outline: none;
            border: none;
            text-decoration: none;
            transition: all .4s linear;
            box-sizing: border-box;
        }
        
        *::selection {
            background: rgb(12, 104, 242);
            color: #fff;
        }
        
        html {
            font-size: 60%;
            overflow-x: hidden;
            scroll-padding-top: 5rem;
            scroll-behavior: smooth;
        }

        header .navbar a {
            color: #004aad;
            font-size: 2rem;
            font-weight: 500;
            margin: 0.8rem;
        }
        
        header .navbar a:hover {
            color: #74d14c;
        }

        header .icons i {
            font-size: 2.5rem;
            color: #004aad;
            cursor: pointer;
            margin-right: 2rem;
            margin-left: 2rem;
        }

        header .icons i:hover {
            color: #74d14c;
        }

        header .icons #menu-btn {
            display: none;
        }

        .container .forms {
            display: flex;
            align-items: center;
            height: 600px;
            width: 200%;
            transition: height 0.2s ease;
        }

        /* media queries */
        @media (max-width: 1200px) {
            html {
                font-size: 50%;
            }
        }

        @media(max-width: 990px) {
            .header {
                padding: 2rem;
            }
        }

        @media(max-width: 768px) {
            header .icons #menu-btn {
                display: initial;
            }

            header .navbar {
                position: absolute;
                top: 100%;
                right: 0;
                left: 0;
                padding: 1rem 2rem;
                background: linear-gradient(45deg, #72b2e4, #92e1e2);
                border-top: 0.1rem solid rgba(34, 30, 30, 0.2);
                clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
                text-align: center;
            }

            header .navbar.active {
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            }

            header .navbar a {
                display: block;
                padding: 1rem;
                border-radius: .5rem;
                margin: 1rem 0;
                text-align: center;
                background: #fff;
            }
        }

        @media(max-width: 450px) {
            html {
                font-size: 30%;
            }
        }
    </style>
</head>
<body>
    <?php include '../spinner.php'; include '../connection.php'; ?>
    
    <!-- header section starts -->
    <header class="header" style="position:sticky;top:0;left:0;right:0; background:rgba(255, 255, 255, 0.912); z-index: 1000; display: flex; align-items: center; justify-content: space-between;padding: 1rem 2%;">
        <img src="../images/TSFlogo.png" alt="Logo" style="width:6.25rem;">
        <nav class="navbar">
            <a href="../index.php">HOME</a>
            <a href="../operations/viewcustomer.php">VIEW ALL CUSTOMERS</a>
            <a href="../operations/moneysend.php">SEND MONEY</a>
            <a href="../operations/transacthistory.php">TRANSACTION HISTORY</a>
        </nav>
        <div class="icons">            
            <i id="menu-btn" class="fas fa-bars"></i>
        </div>
    </header>
    <!-- header section ends -->

    <section class="lf">
        <div class="container">
            <div class="forms">
                <div class="form login">
                    <span class="title" style="text-align:center; margin-top:35px;">New Customer</span>

                    <form action="addcustomer.php" method="post">
                        <div class="input-field">
                            <input type="text" placeholder="First Name" name="fn" id="" required>
                        </div>
                        <div class="input-field">
                            <input type="text" name="ln" id="" placeholder="Last Name" required>
                        </div>

                        <div class="input-field">
                            <input type="email" name="email" id="" placeholder="Email" required>
                        </div>

                        <div class="input-field">
                            <input type="text" name="accno" id="" placeholder="Account Number (10 Digits)" required>
                        </div>

                        <div class="input-field">
                            <input type="number" name="balance" id="" placeholder="Balance" required>
                        </div>
    
                        <div class="input-field button">
                            <input type="submit" value="Add Customer">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $firstname = $_POST['fn'];
            $lastname = $_POST['ln'];
            $email = $_POST['email'];
            $accno = $_POST['accno'];        
            $blc = $_POST['balance'];
    
            $stmt = $conn->prepare("INSERT INTO customer(firstname, lastname, email, accno, balance) VALUES(?,?,?,?,?)");
            $stmt->bind_param("ssssi", $firstname, $lastname, $email, $accno, $blc);

            if ($stmt->execute()) {
                echo '<div class="alert alert-success" style="width:100%; background: linear-gradient(45deg, #e5a663, #faee9e); padding:20px;" role="alert">
                        <div>
                            <h2 style="text-align:center; color:green;"><i class="fas fa-check-circle"></i> The customer has been added successfully!!!</h2>
                        </div>
                    </div>';
            }
        }
    ?>
    
    <script>
        let menu = document.querySelector('#menu-btn');
        let navbar = document.querySelector('.navbar');
        
        window.onscroll = () => {
            searchbtn.classList.remove('fa-times');
            searchbar.classList.remove('active');
        }
        
        menu.addEventListener('click', () => {
            menu.classList.toggle('fa-times');
            navbar.classList.toggle('active');
        })
    </script>
</body>
</html>
