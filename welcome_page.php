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
</head>

<body>
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
    
    <div id="article-div">
        <article id="article-true" class="fl" data-name="article-full-bleed-background">
            <div class="cf">
                <div class="fl pa3 pa4-ns bg-white black-70 measure-narrow f3 times">
                    <header class="bb b--black-70 pv4">
                        <h3 class="f2 fw7 ttu tracked lh-title mt0 mb3 avenir">How to use online classes?</h3>
                        <h4 class="f3 fw4 i lh-title mt0">Chartwell International School, Belgrade</h4>
                    </header>
                    <section class="pt5 pb4">
                        <p class="times lh-copy measure f4 mt0">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione, quibusdam minima? Cupiditate perferendis velit harum? Repellat, iure fuga. Corrupti quos doloribus voluptatem saepe expedita molestiae, incidunt aspernatur veritatis mollitia porro.
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui numquam aperiam illo dignissimos eaque accusamus minus sunt. Tenetur nihil est inventore, repellat maiores temporibus aspernatur nesciunt unde sequi cupiditate consequatur!
                        </p>
                    </section>
                </div>
            </div>
        </article>
        <div class="cff fr" id="image-article">
        </div>
    </div>
    
    
</body>

</html>