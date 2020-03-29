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
    <link rel="stylesheet" href="./css/loginstyle.css">
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
    <form action="form_validation.php" method="post">
        
        <div class="login-div">
            <div class="login-title-div">
                <h2 class="title-text">Sign In</h2>
            </div>
            <div class="input-div">
                <input type="text" name="username" placeholder="Enter Your Username"><br>
                <input type="password" name="password" placeholder="Enter Your Password"><br>
            </div>
            <div class="button-div">
                <button type="submit">SIGN IN!</button>
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