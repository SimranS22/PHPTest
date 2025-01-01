<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEND MONEY | TSFBANKING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/header_style.css">
    <link rel="stylesheet" href="../css/sm_style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            height: 550px;
            width: 200%;
            transition: height 0.2s ease;
        }
        @media (max-width:1200px) {
            html {
                font-size: 50%;
            }
            .footer {
                padding: 3rem 5%;
            }
        }
        @media(max-width:990px) {
            .header {
                padding: 2rem;
            }
            .footer {
                padding: 3rem 2rem;
            }
        }
        @media(max-width:768px) {
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
        @media(max-width:450px) {
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
                    <span class="title" style="text-align:center; margin-top:35px;">Send Money</span>
                    <form action="moneysend.php" method="post">
                        <div class="input-field">
                            <input type="text" placeholder="Account Number - Sender" name="accno1" id="">
                        </div>
                        <div class="input-field">
                            <input type="text"  name="accno2" id="" placeholder="Account Number - Reciever" value="<?php if(isset($_GET['reads'])){echo $_GET['reads'];} ?>">
                        </div>
                        <div class="input-field">
                            <input type="number"  name="amount" id="" placeholder="Amount to Send">
                        </div>
                        <div class="input-field button">
                            <input type="submit" value="Send">
                        </div>
                    </form>
                    <div class="ls">
                        <div class="login-signup">
                            <span class="text">DON'T REMEMBER YOUR ACCOUNT NUMBER?<br>
                                <a href="viewcustomer.php" class="text signup-link">CHECK HERE</a>
                            </span>
                        </div>
                        <div class="login-signup">
                            <span class="text">WANT TO CHECK YOUR ACCOUNT DETAILS?<br>
                                <a href="checkbalance.php" class="text signup-link">CHECK HERE</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $sender = $_POST['accno1'];
        $amount = $_POST['amount'];
        $reciever = $_POST['accno2'];
        
        $checkblcquery = "SELECT balance FROM customer WHERE accno='$sender'";
        $checkbalance = $conn->query($checkblcquery);
        $ava_blc = $checkbalance->fetch_assoc();
        
        if ($ava_blc && $ava_blc['balance'] >= $amount && $amount > 0) {
            $sql1 = "UPDATE customer SET balance = balance - $amount WHERE accno = '$sender'";
            $sql2 = "UPDATE customer SET balance = balance + $amount WHERE accno = '$reciever'";
            $result1 = $conn->query($sql1);
            $result2 = $conn->query($sql2);
            
            if ($result1 && $result2) {
                echo '<div class="alert alert-success" style="width:100%; background: linear-gradient(45deg,#e5a663,#faee9e); padding:20px;" role="alert">
                <div><h2 style="text-align:center; color:green;"><i class="fas fa-check-circle"></i> The amount has been transferred successfully!!!</h2></div></div>';
                
                $sqltran = "INSERT INTO `transact` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'success')";
                $conn->query($sqltran);
            } else {
                echo '<div class="alert alert-danger" style="width:100%; background: linear-gradient(45deg,#e5a663,#faee9e); padding:20px;" role="alert">
                <div><h2 style="text-align:center; color:red;"><i class="fas fa-times-circle"></i> Oops! Something went wrong!</h2></div></div>';
                $sqltran = "INSERT INTO `transact` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'failure')";
                $conn->query($sqltran);
            }
        } else {
            echo '<div class="alert alert-danger" style="width:100%; background: linear-gradient(45deg,#e5a663,#faee9e); padding:20px;" role="alert">
            <div><h2 style="text-align:center; color:red;"><i class="fas fa-times-circle"></i> Not Sufficient Balance in Account!</h2></div></div>';
            $sqltran = "INSERT INTO `transact` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'failure')";
            $conn->query($sqltran);
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
        });
    </script>
</body>
</html>
