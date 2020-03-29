<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chartwell [Year 8]</title>
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/tachyon_style.css">
    <link rel="stylesheet" href="../css/background_style.css">
</head>
<body>
    <div class="title-div">
        <img src="https://chartwell.edu.rs/templates/chartwell/img/chartwell.png" alt="logo" height="80" width="80">
        <h1 id="title-text"><a class="link" href="../welcome_page.php">Welcome to Chartwell ONLINE CLASSES!</a></h1>
        <img src="https://chartwell.edu.rs/templates/chartwell/img/chartwell.png" alt="logo" height="80" width="80">
    </div>

    <nav class="bt bb tc mw7 center mt4 b--white">
        <a class="f6 f5-l link bg-animate black-80 hover-bg-all-grey dib pa3 ph4-l white" href="year7.php">Year 7</a>
        <a class="f6 f5-l link bg-animate black-80 hover-bg-all-grey dib pa3 ph4-l white" href="year8.php">Year 8</a>
        <a class="f6 f5-l link bg-animate black-80 hover-bg-all-grey dib pa3 ph4-l white" href="year9.php">Year 9</a>
        <a class="f6 f5-l link bg-animate black-80 hover-bg-all-grey dib pa3 ph4-l white" href="year10.php">Year 10</a>
        <a class="f6 f5-l link bg-animate black-80 hover-bg-all-grey dib pa3 ph4-l white" href="year11.php">Year 11</a>
        <a class="f6 f5-l link bg-animate black-80 hover-bg-all-grey dib pa3 ph4-l white" href="year12.php">Year 12</a>
        <a class="f6 f5-l link bg-animate black-80 hover-bg-all-grey dib pa3 ph4-l white" href="year13.php">Year 13</a>
    
        <?php if(isset($_SESSION['admin'])): ?>
            <a class="f6 f5-l link bg-animate black-80 hover-bg-all-grey dib pa3 ph4-l white" href="../content_upload.php">Insert Content</a>
        <?php endif; ?>
    </nav>

    <?php
    
    require "../connection.php";
    $sql = "select * from lessons";
    // while($row = mysqli_fetch_assoc($query)):
    //     if($row['year'] == "8"):
    ?>


    <!--   ENGLISH LANGUAGE SECTION     -->

    <div class="subjects-container">
        <h1 class="f3 fw7 ttu tracked lh-title mt0 mb3 avenir white">English language</h1>

        <div class="posts-container">
        <?php 
        $query = mysqli_query($db, $sql);
        while($row = mysqli_fetch_assoc($query)):
            if($row['year'] == "8"):
                if($row['subject'] == "English"): 
        ?>
            <div class="post-div mw7 center">
                <h3 class="f3 fw7 ttu tracked lh-title mt0 mb3 avenir white"><?php echo $row['title']; ?></h3>
                <h4 class="dib f3 fw4 i lh-title mt0 white"><?php echo $row['subtitle'] ?></h4>
                <video controls>
                    <source src="../upload/<?php echo $row['video_name'] ?>" type="video/webm">
                    Your browser does not support this type of video.
                </video>
                <p class="post-text"><?php echo $row['description']; ?></p>
            </div>
        <?php
                endif;
            endif;
        endwhile;
        ?>
        </div>
    </div>

    <!-- MATHS LANGUAGE SECTTION -->

    <div class="subjects-container">
        <h1 class="f3 fw7 ttu tracked lh-title mt0 mb3 avenir white">Mathematics</h1>

        <div class="posts-container">
        <?php 
        $query = mysqli_query($db, $sql);
        while($row = mysqli_fetch_assoc($query)):
            if($row['year'] == "8"):
                if($row['subject'] == "Maths"): 
        ?>
            <div class="post-div mw7 center">
                <h3 class="f3 fw7 ttu tracked lh-title mt0 mb3 avenir white"><?php echo $row['title']; ?></h3>
                <h4 class="dib f3 fw4 i lh-title mt0 white"><?php echo $row['subtitle'] ?></h4>
                <video controls>
                    <source src="../upload/<?php echo $row['video_name'] ?>" type="video/webm">
                    Your browser does not support this type of video.
                </video>
                <p class="post-text"><?php echo $row['description']; ?></p>
            </div>
        <?php
                endif;
            endif;
        endwhile;
        ?>
        </div>
    </div>

    <!-- SCIENCE SECTION -->

    <div class="subjects-container">
        <h1 class="f3 fw7 ttu tracked lh-title mt0 mb3 avenir white">Science</h1>

        <div class="posts-container">
        <?php 
        $query = mysqli_query($db, $sql);
        while($row = mysqli_fetch_assoc($query)):
            if($row['year'] == "8"):
                if($row['subject'] == "Science"): 
        ?>
            <div class="post-div mw7 center">
                <h3 class="f3 fw7 ttu tracked lh-title mt0 mb3 avenir white"><?php echo $row['title']; ?></h3>
                <h4 class="dib f3 fw4 i lh-title mt0 white"><?php echo $row['subtitle'] ?></h4>
                <video controls>
                    <source src="../upload/<?php echo $row['video_name'] ?>" type="video/webm">
                    Your browser does not support this type of video.
                </video>
                <p class="post-text"><?php echo $row['description']; ?></p>
            </div>
        <?php
                endif;
            endif;
        endwhile;
        ?>
        </div>
    </div>
    <?php 
    //     endif;
    // endwhile;
    ?>

</body>
</html>