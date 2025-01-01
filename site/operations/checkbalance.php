<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHECK BALANCE | TSFBANKING</title>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/header_style.css">
    <link rel="stylesheet" href="../css/sm_style.css">
        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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

        .heading {
            padding: 1rem;
            text-align: center;
            justify-content: center;
            font-size: 3.5rem;
            font-weight: 600;
            color: #004aad;
        }

        .heading a {
            text-decoration: none;
        }

        .heading a:hover {
            text-decoration: underline;
        }

        .t-con {
            margin: 1rem;
            padding: 1.5rem;
        }

        .table th {
            color: #004aad;
            text-align: center;
            font-size: 2rem;
        }

        .table tr {
            text-align: center;
        }

        td {
            font-size: 1.5rem;
        }

        .box-text #btn {
            margin-top: 35px;
            padding: 10px;
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

        .box-text #btn:hover {
            background-color: #265df2;
        }

        .container {
            position: relative;
            max-width: 470px;
            width: 100%;
            background: #fff;
            border-radius: 10px;
            border-color: rgba(10, 39, 134, 0.925);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin: 0 20px;
        }

        .container .forms {
            display: flex;
            align-items: center;
            height: 300px;
            width: 200%;
            transition: height 0.2s ease;
        }

        /* media queries */
        @media (max-width: 1200px) {
            html {
                font-size: 50%;
            }
        }

        @media (max-width: 990px) {
            .header {
                padding: 2rem;
            }
        }

        @media (max-width: 768px) {
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

        @media (max-width: 450px) {
            html {
                font-size: 30%;
            }
        }
    </style>

</head>
<body>
<?php include '../spinner.php'; include '../connection.php'; ?>
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

    <section class="lf">
        <div class="container">
            <div class="forms">
                <div class="form login">
                    <span class="title" style="text-align:center;">Check Personal Details</span>

                    <form action="checkbalance.php" method="post">
                        <div class="input-field">
                            <input type="text" placeholder="Account Number" name="accno" id="">
                        </div>

                        <div class="input-field button">
                            <input type="submit" value="Check">
                        </div>
                    </form>

                    <div class="login-signup">
                        <span class="text">DON'T REMEMBER YOUR ACCOUNT NUMBER? 
                            <a href="viewcustomer.php" class="text signup-link">CHECK HERE</a>
                        </span>
                    </div>

                    <div class="login-signup">
                        <span class="text">WANT TO SEND MONEY? 
                            <a href="moneysend.php" class="text signup-link">CLICK HERE</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <h2 class="heading">PERSONAL DETAILS</h2>
    <section class="t-con" style="background: linear-gradient(45deg,#e5a663,#faee9e);">
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>EMAIL</th>
                    <th>ACCOUNT NO.</th>
                    <th>BALANCE</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                if($_SERVER['REQUEST_METHOD']== 'POST'){
                    $accno = $_POST['accno'];
                    $sql = "SELECT * FROM customer WHERE accno=$accno";
                    $result = $conn->query($sql);

                    if(!$result) {
                        die("Invalid Query : " . $conn->error);
                    }

                    while($row = $result->fetch_assoc()){
                        echo '<tr>                               
                        <td>' . $row["firstname"] .'</td>
                        <td>' . $row["lastname"] . '</td>
                        <td>' . $row["email"] . '</td>
                        <td>' . $row["accno"] . '</td>
                        <td> <i class="fas fa-rupee-sign" aria-hidden="true"></i>' . $row["balance"] . '</td>
                        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </section>

    <h2 class="heading">PERSONAL TRANSACTION HISTORY</h2>
    <section class="t-con" style="background: linear-gradient(45deg,#e5a663,#faee9e);">
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>SENDER</th>
                    <th>RECEIVER</th>
                    <th>AMOUNT</th>
                    <th>STATUS</th>
                    <th>DATE & TIME</th>
                </tr>
            </thead>

            <tbody>
                <?php
                if($_SERVER['REQUEST_METHOD']== 'POST'){
                    $accno = $_POST['accno'];

                    $sql = "SELECT * FROM transact WHERE sender=$accno OR receiver=$accno";
                    $result = mysqli_query($conn, $sql);
                    if(!$result) {
                        die("Invalid Query : " . $conn->error);
                    }
                    while($row = $result->fetch_assoc()){
                        if(!(empty($row['sender']) && empty($row['receiver']) && empty($row['amount']))){
                            echo '
                            <tr>
                                <td>'.$row['sender'].'</td>
                                <td>'.$row['receiver'].'</td>
                                <td> <i class="fas fa-rupee-sign" aria-hidden="true"></i>'.$row['amount'].'</td>
                                <td>';
                                if($row['status'] == "success"){
                                    echo '<b><p style="color:green;">success</p></b>';
                                } else {
                                    echo '<b><p style="color:red;">failure</p></b>';
                                }
                                echo '</td>
                                <td>'.$row['datentime'].'</td>
                            </tr>';
                        }
                    }
                }
                ?>
            </tbody>
        </table>
    </section>

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
