<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VIBES-homepage</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styleskk.css">
    
</head>

<body>
    <div class="ironman">
        <div class="spiderman">
            <img src="LOGO1.png" alt="" class="logo">
            <ul>
                <!-- <li><a href="">HOME</a></li> -->
                <li><a href="contndabt\cont.php">CONTACT</a></li>
                <li><a href="contndabt\About Us Page\Aboutus.php">ABOUT US</a></li>
                <li class = "perl"><a class= "" href="">SIGN IN/UP <i class="fas fa-caret-down"></i></a>
                <div class="dorp-down-menu">
                    <ul>
                        <li><a href="login.php">SIGN IN</a></li>
                        <li><a href="register.php">SIGN UP</a></li>
                    </ul>
                </div>
            </li>
            </ul>
        </div>
        <div class="joker">
            <div class="batman">
                <h1>“Where words fail,<br> 
                    music speaks ”</h1>
            </div>
            <div class="superman">
                <a class="butn" href="Final Project\index.php">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Explore
                </a>
                <img src="" alt="" id="icon">
            </div>
        </div>

    </div>
    <audio id="mysong">
        <source src="" type="audio/mp3">
    </audio>
    <footer>
        <ul class="deadpool">
            <li><a href="">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a></li>
            <li><a href="">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a></li>
            <li><a href="">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a></li>
        </ul>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <script src="" async defer>

    </script>
    <div class = "hello"></div>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
</body>

</html>