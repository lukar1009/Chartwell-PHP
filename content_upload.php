<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chartwell [Year 13]</title>
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/tachyon_style.css">
    <link rel="stylesheet" href="./css/background_style.css">
    <link rel="stylesheet" href="./css/register_style.css">
</head>
<body>
    <div class="title-div">
        <img src="https://chartwell.edu.rs/templates/chartwell/img/chartwell.png" alt="logo" height="80" width="80">
        <h1 id="title-text"><a class="link" href="./welcome_page.php">Welcome to Chartwell ONLINE CLASSES!</a></h1>
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
    </nav>

    
    <form action="upload.php" method="post" enctype="multipart/form-data">
        
        <div class="login-div">
            <div class="login-title-div">
                <h2 class="title-text"><?php if(isset($_GET['uploaded'])){
                    echo "SUCCESSFULL UPLOADING!";
                }elseif(isset($_GET['error'])){
                    echo "Something went wrong, try again or contact admin!";
                }else{
                    echo "Insert new class content";
                } ?></h2>
            </div>
            <div class="input-div">
                <input required class="textfield" type="text" name="content_title" placeholder="Content title"><br>
                <input required class="textfield" type="text" name="content_subtitle" placeholder="Content subtitle"><br>
                <input required class="textfield" type="file" name="file"><br>
                <textarea name="content_description" class="textfield" cols="30" rows="10" placeholder="Content description..."></textarea>

                <p>Where do you want to upload?</p>
                <select id="year" name="year">
                    <option name="year7" value="7">Year 7</option>
                    <option name="year8" value="8">Year 8</option>
                    <option name="year9" value="9">Year 9</option>
                    <option name="year10" value="10">Year 10</option>
                    <option name="year11" value="11">Year 11</option>
                    <option name="year12" value="12">Year 12</option>
                    <option name="year13" value="13">Year 13</option>
                </select>

                <select  id="subject" name="subject">
                    <option name="year7" value="English">English</option>
                    <option name="year8" value="Maths">Maths</option>
                    <option name="year9" value="Science">Science</option>
                </select>

            </div>
            <div class="button-div">
                <button type="submit">Upload!</button>
            </div>
        </div>
    </form>
</body>
</html>