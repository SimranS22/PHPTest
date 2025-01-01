<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/header_style.css">
    <!-- ion icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <!-- google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- font awesome 4 cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>VIEW CUSTOMERS | TSFBANKING</title>
    <style>
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

        .btn {
            padding: 5px;
            border: none;
            color: #fff;
            font-size: 1.2rem;
            font-weight: 500;
            letter-spacing: 1px;
            border-radius: 6px;
            background-color: rgba(10, 39, 134, 0.925);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: #265df2;
        }

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
            text-decoration: none;
        }

        header .navbar a:hover {
            color: #74d14c;
            text-decoration: none;
        }

        /* media queries */

        @media (max-width: 1200px) {
            html {
                font-size: 50%;
            }

            .footer {
                padding: 3rem 5%;
            }

        }

        @media (max-width: 990px) {
            .header {
                padding: 2rem;
            }

            .footer {
                padding: 3rem 2rem;
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
    <?php include '../spinner.php';
    include '../connection.php'; ?>

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

    <h2 class="heading">CUSTOMERS
        <p style="padding: 1rem; text-align: center; justify-content: center; font-size: 1.7rem; font-weight: 400; color: black;">WANT TO ADD A NEW CUSTOMER? <a href="addcustomer.php">CLICK HERE</a></p>
    </h2>
    <section class="t-con" style="background: linear-gradient(45deg, #72b2e4, #92e1e2);">
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>EMAIL</th>
                    <th>ACCOUNT NO.</th>
                    <th>BALANCE</th>
                    <th>SEND MONEY</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM customer";
                $result = $conn->query($sql);

                if (!$result) {
                    die("Invalid Query : " . $conn->error);
                }

                while ($row = $result->fetch_assoc()) {
                    echo '<tr>
                        <td>' . $row["firstname"] . '</td>
                        <td>' . $row["lastname"] . '</td>
                        <td>' . $row["email"] . '</td>
                        <td>' . $row["accno"] . '</td>
                        <td>' . $row["balance"] . '</td>
                        <td style="padding:7px">
                            <a href="moneysend.php?reads=' . $row['accno'] . '">
                                <button type="button" class="btn">Send Money</button>
                            </a>
                        </td>
                    </tr>';
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
