<?php
    session_start();
    if(!isset($_SESSION['log']))
    {
      header('Location: homepagewoil.html');
    }
    if (isset($_SESSION['u']))
    {
        $username=$_SESSION['u'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="assets/tablogo.png">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/44f557ccce.js"></script>
    <title>Feedback Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #f1f5f9;
            background: -webkit-linear-gradient(to right, #97617c, #f1f5f9);
            background: var(--extra-light);
            min-height: 100vh;

        }

        .container {
            margin-top: 100px;
        }

        header {
            display: flex;
            position: relative;
            background: var(--white);
        }

        .nav__links {
            margin-top: 7px;
        }

        .footer {
            margin-top: 250px;
        }

        .btn {
            padding: 0.75rem 2rem;
            outline: none;
            border: none;
            font-size: 1rem;
            font-weight: 500;
            color: var(--white);
            background-color: var(--primary-color);
            border-radius: 2rem;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: var(--primary-color-dark);
            color: var(--white);
        }

        .rating {
            display: inline-block;
            position: relative;
            height: 50px;
            line-height: 50px;
            font-size: 50px;
        }

        .rating label {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            cursor: pointer;
        }

        .rating label:last-child {
            position: static;
        }

        .rating label:nth-child(1) {
            z-index: 5;
        }

        .rating label:nth-child(2) {
            z-index: 4;
        }

        .rating label:nth-child(3) {
            z-index: 3;
        }

        .rating label:nth-child(4) {
            z-index: 2;
        }

        .rating label:nth-child(5) {
            z-index: 1;
        }

        .rating label input {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
        }

        .rating label .icon {
            float: left;
            color: transparent;
        }

        .rating label:last-child .icon {
            color: #5a0b49;
        }

        .rating:not(:hover) label input:checked~.icon,
        .rating:hover label:hover input~.icon {
            color: #ffe602;
        }

        .rating label input:focus:not(:checked)~.icon:last-child {
            color: #ffe602;
            text-shadow: 0 0 5px var(--primary-color);
        }

        @font-face {
            font-family: 'product sans';
            src: url('assets/css/Product Sans Bold.ttf');
        }

        h1 {
            font-size: 45px !important;
            margin-bottom: 20px;
            color: var(--text-dark);
            font-family: 'product sans' !important;
            text-align: center;
        }

        textarea {
            color: var(--text-light) !important;
            border: 1px solid var(--text-light) !important;
            background-color: var(--white) !important;
            font-weight: bold !important;
        }

        textarea:focus {
            outline-style: none !important;
            outline: none !important;
        }

        *:focus {
            outline: none !important;
        }

        input {
            border: 0px !important;
            border-bottom: 1px solid var(--text-dark) !important;
            color: var(--primary-color) !important;
            border-radius: 0px !important;
            font-weight: bold !important;
            border: none;
            border-bottom: 2px solid var(--primary-color);
        }

        label {
            color: var(--text-dark) !important;
            font-size: 19px;
        }

        div.form-group label {
            color: var(--text-light) !important;
            font-weight: bold;
        }

        div.rating label {
            font-size: 40px !important;
        }

        .input-group {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .footer {
    margin-top: 10px; /* Adjust this value as needed */
    margin-bottom: 0; /* Add this line to remove bottom margin */
}

        .form-box {
            padding: 40px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .footer .col {
         width: 190px;
         height: auto;
         float: left;
         box-sizing: border-box;
         padding: 20px;
         }
         .footer .col h2 {
         margin: 0;
         padding: 0;
         font-size: 15px;
         line-height: 17px;
         padding: 10px 0;
         color: #ffffff;
         }
         .footer .col h3 {
         margin: 0;
         padding: 0;
         font-size: 15px;
         line-height: 17px;
         padding: 10px 0;
         color: rgb(255, 255, 255);
         text-transform: uppercase;
         }
         .text-muted {
         color: #ffffff !important;
         }
         
        .nav__links2 li {
    list-style: none;
    display: inline-block;
    padding: 12px 12px;
    position: relative;
}

.nav__links2 li a {
    color: #8E2157;
    text-decoration: none;
    font-weight: 700;
}

.nav__links2 li::after {
    content: '';
    width: 0%;
    height: 3px;
    background: #6B0F3D;
    display: block;
    margin: auto;
    transition: 0.5s;
}

.nav__links2 li:hover::after {
    width: 80%;
}
.text-muted {
         color: #ffffff !important;
      }

      .footer__bar1 {
         padding: 0.5rem;
         display: flex;
         align-items: center;
         justify-content: space-between;
         gap: 1rem;
      }
      .footer__bar1 p {
    font-size: 0.9rem;
    color: var(--extra-light);
  }
    .user-log1
    {
        position: relative;
        bottom: 5px;
        color:#8E2157;
    }
    .user-log1:hover
    {
        color:#6B0F3D;
        text-decoration: none;
    }
    .feedback
    {
        position: relative;
        bottom: 40px;
    }
    </style>
</head>

<body>
    <?php
        if (isset($_POST['submit']))
        {
             $wwimp=$_POST['wwimp'];
             $sss=$_POST['sss'];
             $missing=$_POST['missing1'];
             $stars=$_POST['stars'];
            $hostName ="localhost";
            $hostName ="localhost";
            $dbusers ="root";
            $dbPassword ="";
            $dbName ="jetsetfly";
            $conn =mysqli_connect($hostName,$dbusers,$dbPassword,$dbName);
            if (!$conn)
            {
                die("Something went Wrong");
            }
                
            $sql ="INSERT INTO feedback (firstimpression,come,missing,rating,id) VALUES (?,?,?,?,?)";
            $stmt =mysqli_stmt_init($conn);
            $prepare =mysqli_stmt_prepare($stmt,$sql);
            if ($prepare)
            {
                mysqli_stmt_bind_param($stmt,"sssii",$wwimp,$sss,$missing,$stars,$id);
                mysqli_stmt_execute($stmt);
                echo "<script>alert('Thank You For FeedBack..!!');</script>";
                
            }
            else
            {
                    die("SomeThing Went Wrong");
            }
        }             
            
        
    ?>
    <header>
        <div class="nav__logo"><img src="assets/JJ.png"></div>
        <ul class="nav__links2">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="link1"><a href="homepagewl.php">HOME</a></li>
            <li class="link1"><a href="AboutUs.php">ABOUT</a></li>
            <li class="link1"><a href="MyFlights.php">MY FLIGHTS</a></li>
            <!-- <li class="link1"><a href="#">FEEDBACK</a></li> -->
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
        </ul>
        <a class="user-log1"><i class="fa fa-user" style="font-size:20px;"></i>&nbsp; <?php echo $username; ?></a>
        <a href="logout.php"><button class="btn">Logout &nbsp;<i class="fa fa-sign-out" style="font-size:15px;"></i></button></a>
    </header>
    <section class="feedback">
        <div class="container mb-4">
            <h1> <i class="far fa-comment-alt"></i> Feedback Form</h1>
            <div class="row justify-content-center">
                <div class="col-md-6 bg-light form-box">
                    <form action="feedback.php" method="POST">
                        <div class="row justify-content-center">
                            <div class="col-12 mt-4">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">What was your first impression
                                        when you entered the website?</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="wwimp" rows="3"
                                        required></textarea>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <div class="form-group">
                                    <select class="mt-4" name="sss" style="border: 0px; border-bottom: 
                        2px solid var(--primary-color); background-color: var(--extra-light) !important;
                        font-weight: bold !important;color :var(--primary-color) !important;
                        width:100%" required>
                                        <option selected disabled>How did you first hear about us?</option>
                                        <option>Search Engine</option>
                                        <option>Social Media</option>
                                        <option>Friends/Relatives</option>
                                        <option>Television</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Is there anything missing on this
                                        page?</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="missing1" rows="3"
                                        required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="rating ml-3">
                                <label>
                                    <input type="radio" name="stars" value="1" required />
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="stars" value="2" required />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="stars" value="3" required />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="stars" value="4" required />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="stars" value="5" required />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <button tye="submit" name="submit" class="btn">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </section>

    <footer class="footer">
        <div class="section__container footer__bar1">
           <p>Copyright © 2024 Team <b>GMADS.</b> All rights reserved.</p>
           <div class="socials">
              <span><a href="" class="text-muted" target="_blank"><i class="ri-facebook-fill"></i></a></span>
              <span><a href="" class="text-muted" target="_blank"><i class="ri-twitter-fill"></i></a></span>
              <span><a href="" class="text-muted" target="_blank"><i class="ri-instagram-line"></i></a></span>
              <span><a href="https://www.youtube.com/channel/UCNCWGkiAKDhwgCuGT02aXCg" class="text-muted" target="_blank"><i
                       class="ri-youtube-fill"></i></a></span>
                       <div class="nav__logo"><img src="assets/w.png"></div>
           </div>
           
        </div>
     </footer>

    <script>
        $(document).ready(function () {
            $('.input-group input').focus(function () {
                me = $(this);
                $("label[for='" + me.attr('id') + "']").addClass("animate-label");
            });
            $('.input-group input').blur(function () {
                me = $(this);
                if (me.val() == "") {
                    $("label[for='" + me.attr('id') + "']").removeClass("animate-label");
                }
            });
        });
    </script>
    <script type="text/javascript">

    </script>

</body>

</html>