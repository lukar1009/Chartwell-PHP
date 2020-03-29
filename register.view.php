<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chartwell [ONLINE CLASS]</title>
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/tachyon_style.css">
    <link rel="stylesheet" href="./css/background_style.css">
    <link rel="stylesheet" href="./css/register_style.css">
    <link rel="stylesheet" href="./css/customAlertBox.css">
</head>

<body>
    <div id="dialogoverlay"></div>
    <div id="dialogbox">
    <div>
        <div id="dialogboxhead"></div>
        <div id="dialogboxbody"></div>
        <div id="dialogboxfoot"></div>
    </div>
    </div>
    <div class="title-div">
        <img src="https://chartwell.edu.rs/templates/chartwell/img/chartwell.png" alt="logo" height="80" width="80">
        <h1 id="title-text"><a class="link" href="welcome_page.php">Welcome to Chartwell ONLINE CLASSES!</a></h1>
        <img src="https://chartwell.edu.rs/templates/chartwell/img/chartwell.png" alt="logo" height="80" width="80">
    </div>

    <nav class="bt bb tc mw7 center mt4 b--white">
        <a class="f6 f5-l link bg-animate black-80 hover-bg-all-grey dib pa3 ph4-l white" href="./year_pages/year7.php">Year 7</a>
        <a class="f6 f5-l link bg-animate black-80 hover-bg-all-grey dib pa3 ph4-l white" href="./year_pages/year8.php">Year 8</a>
        <a class="f6 f5-l link bg-animate black-80 hover-bg-all-grey dib pa3 ph4-l white" href="./year_pages/year9.php">Year 9</a>
        <a class="f6 f5-l link bg-animate black-80 hover-bg-all-grey dib pa3 ph4-l white" href="./year_pages/year10.php">Year 10</a>
        <a class="f6 f5-l link bg-animate black-80 hover-bg-all-grey dib pa3 ph4-l white" href="./year_pages/year11.php">Year 11</a>
        <a class="f6 f5-l link bg-animate black-80 hover-bg-all-grey dib pa3 ph4-l white" href="./year_pages/year12.php">Year 12</a>
        <a class="f6 f5-l link bg-animate black-80 hover-bg-all-grey dib pa3 ph4-l white" href="./year_pages/year13.php">Year 13</a>
        
        <?php if(!isset($_SESSION['admin'])): ?>
            <a class="f6 f5-l link bg-animate black-80 hover-bg-all-grey dib pa3 ph4-l white" href="./logout.php">Sign Out</a>
        <?php endif; ?>
    </nav>

    <?php if(isset($_SESSION['admin'])): ?>
        <nav class="bt bb tc mw7 center mt4 b--white">
            <a class="f6 f5-l link bg-animate black-80 hover-bg-all-grey dib pa3 ph4-l white" href="./register.view.php">Add New User</a>
            <a class="f6 f5-l link bg-animate black-80 hover-bg-all-grey dib pa3 ph4-l white" href="./logout.php">Sign Out</a>
        </nav>
    <?php endif; ?>
    <form action="register.php" method="post">
        
        <div class="login-div">
            <div class="login-title-div">
                <h2 class="title-text"><?php if(isset($_GET['registered'])){
                    echo "SUCCESSFULL REGISTRATION!";
                }else{
                    echo "Please add new user";
                } ?></h2>
            </div>
            <div class="input-div">
                <input required class="textfield" type="text" name="new_firstname" placeholder="First Name"><br>
                <input required class="textfield" type="text" name="new_lastname" placeholder="Last Name"><br>
                <input required class="textfield" type="text" name="new_username" placeholder="Username"><br>
                <input required class="textfield" type="password" name="new_password" placeholder="Password"><br>

                <p>Is he/she a professor?</p>
                <input required class="radiobutton" type="radio" name="prof" value="1">Yes
                <input class="radiobutton" type="radio" name="prof" value="0">No<br><br>
                

            </div>
            <div class="button-div">
                <button type="submit">Register!</button>
            </div>
        </div>
    </form>

    <?php 
        if(isset($_GET['error'])){
            echo '<script type="text/javascript" src="./js/customAlertBox.js"></script>';
        }
    ?>
</body>
</html>