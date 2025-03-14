<!DOCTYPE html>
<html lang="en">

<head>
    <title>Explore Japan - background information about Japan - Homepage</title>
    <meta name="description" content="background information about Japan">
    <meta name="keywords" content="Japan, Travel, Culture">
    <?php include("includes/head_html.php"); ?>
</head>

<body>
<?php include("includes/header.php"); ?>
<?php include ('includes/navigation.php'); ?>
<nav class="orientation">Homepage</nav>
<div id="slider" class="u-full-width">
    <img id="left" src="/projects/exploreJapan/img/slider_nav_left.png" alt="left-arrow-slider"/>
    <img id="right" src="/projects/exploreJapan/img/slider_nav_right.png" alt="right-arrow-slider"/>
    <ul>
        <li>
            <a href="/projects/exploreJapan/cultural_background_religion.php#shingon">
            <h1>Shingon Buddhism</h1>
            <p>Learn more about one of Japan´s biggest monastic traditions...</p>
            <img src="/projects/exploreJapan/img/Kongokai_81son_mandala_slider_img_web.jpg" alt="buddhist mandala, photography provieded by Wikipedia Commons: https://commons.wikimedia.org/wiki/File:Kongokai_81son_mandala.jpg"/>
            </a>
        </li>
        <li>
            <a href="/projects/exploreJapan/locations_landscapes.php#shikoku">
            <h1>Shikoku Islands</h1>
            <p>Discover a both holy and scenic landscape on the Shikoku islands through pilgrimage...</p>
            <img src="/projects/exploreJapan/img/shikoku_slider_img_web.jpg" alt="birthplace of Kukai, photograph of author"/>
            </a>
        </li>
        <li>
            <a href="#">
            <h1>Tokyo Nightlife</h1>
            <p>Strolling through Shibuya and Shinjuku at night...</p>
            <img src="/projects/exploreJapan/img/tokyo_slider_img_web.jpg" alt="tokyo night scene, photograph of author"/>
            </a>
        </li>
    </ul>

</div>

<div class="container">

    <p>The goal of the site is to provide knowledge about Japan, that covers on the one hand some practical informations about Japan (such as tourist spots and travel routes, etiquette & language information, etc), on the other hand more in-depth articles about Japanese culture & history. </p>


    <div class="row">
        <div class="eight columns panel_group">
            <div class="row">
                <a href="#">
                <div class="six columns homepage_panel" id="panel_language">
                    <h1>Language</h1>
                    <p>Learn more about the Japanese Language, its writing systems, as well as some useful phrases for the traveler.</p>
                </div>
                </a>
                <a href="./exploreJapan/cultural_background_religion.php">
                <div class="six columns homepage_panel" id="panel_religion">
                    <h1>Religion</h1>
                    <p>For those interested in the religious background of Japan, mainly Shintoism and Buddhism.</p>
                </div>
                </a>
            </div>
            <div class="row">
                <a href="#">
                <div class="six columns homepage_panel" id="panel_history">
                    <h1>History</h1>
                    <p>Some background information about the Japanese history, reaching from the first settlements, through the Heian and Kamaura periods, to modern day Japan.</p>
                </div>
                </a>
                <a href="#">
                <div class="six columns homepage_panel" id="panel_pop">
                    <h1>Pop Culture</h1>
                    <p>Japan´s fascinating nishe cultures, that can be found in Tokyo´s quarters like Akihabara, Harajuku or Shibuya.</p>
                </div>
                </a>
            </div>
        </div>
        <div class="four columns right_panel">
            <ul>
                <li>Basics about Japan
                    <ul>
                        <li><a href="#">Facts</a></li>
                            <li><a href="#">Travel Information</a></li>
                                <li><a href="#">Etiquette</a></li>
                    </ul>
                </li>
                <li>Locations
                    <ul>
                        <li>Cities
                            <ul>
                                <li> <a href="#">Tokyo</a></li>
                                <li><a href="#">Kyoto</a></li>
                               <li> <a href="#">Osaka</a></li>
                            </ul>
                        </li>
                        <li>Landscapes
                            <ul>
                                <li>S<a href="/projects/exploreJapan/locations_landscapes.php#shikoku">hikoku</a></li>
                                <li><a href="/projects/exploreJapan/locations_landscapes.php#miyajima">Miyajima</a></li>
                                <li><a href="/projects/exploreJapan/locations_landscapes.php#amanohashidate">Amanohashidate</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

</div>
<script type="text/javascript">

    if($(window).width() < 750){
        $(".panel_group").removeClass("eight");
        $(".panel_group").addClass("twelve");
    }
    else if($(window).width() >= 750){
        $(".panel_group").addClass("eight");
        $(".panel_group").removeClass("twelve");
    }

    $(window).resize(function () {
        if($(window).width() < 750){
            $(".panel_group").removeClass("eight");
            $(".panel_group").addClass("twelve");
        }
        else if($(window).width() >= 750){
            $(".panel_group").addClass("eight");
            $(".panel_group").removeClass("twelve");
        }
    });
</script>
<script type="text/javascript" src="/projects/exploreJapan/js/functions.js"></script>
<script type="text/javascript" src="/projects/exploreJapan/js/content_slider.js"></script>
<?php include("includes/footer.php"); ?>

</body>

</html>
