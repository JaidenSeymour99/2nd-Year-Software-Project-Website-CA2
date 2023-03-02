<?php
require_once 'classes/Game.php';
require_once 'classes/Gump.php';

try {
    $game01 = Game::find(1);
    $game02 = Game::find(2);
    $game05 = Game::find(5);
    $game06 = Game::find(6);
    $game07 = Game::find(7);
    $game08 = Game::find(8);
    $game09 = Game::find(9);
    $game10 = Game::find(10);
    $game11 = Game::find(11);
    $game12 = Game::find(12);
    $game13 = Game::find(13);
    $game14 = Game::find(14);
}
catch (Exception $ex) {
    die($ex->getMessage());
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--My CSS-->
    <link rel="stylesheet" href="css/myStyles.css">

    <title>Home Store</title>
</head>

<body>


    <!--This is the header-->

    <!--**************TOP NAV**************-->
    <div class="container-fluid TopNavBackground background">
        <div class="row">
            <div class="col-lg-1 col-sm-12 offset-lg-3 offset-sm-2">
                <a href="index.php">
                    <div class="row">
                        <img src="../images/LogoCut.png" class="NavPadding">
                        <h3 class="textYAM noUnderline">YAM</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-12 paddingTopNavbar">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">

                            <li class="nav-item paddingNav">
                                <a class="nav-link" href="index.php">Store</a>
                            </li>
                            <li class="nav-item paddingNav">
                                <a class="nav-link" href="allGames.php">Games</a>
                            </li>
                            <li class="nav-item paddingNav">
                                <a class="nav-link" href="allReviews.php">Reviews</a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
            <!--Main Nav-->
            <!--            <div class="col-1 offset-1">
                <a href="index.php">
                    <h3 class="NavLink">Store</h3>
                </a>
            </div>
            <div class="col-1">
                <a href="allGames.php">
                    <h3 class="NavLink">Library</h3>
                </a>
            </div>
            <div class="col-1">
                <a href="allReviews.php">
                    <h3 class="NavLink">Reviews</h3>
                </a>
            </div>-->
            <!--End main Nav-->

            <!--Login Buttons-->
            <div class="col-lg-1 col-sm-12">
                <div class="row">
                    <?php
        require_once 'utils/functions.php';
        require_once 'classes/User.php';

        if (!is_logged_in()) {
            echo '<div class=col-lg-7 col-sm-6 RegisterPadding">';
            echo '<a class="btn btn-secondary btn-sm" href="registerForm.php"><h3 class="Login">Register</h3></a>';
            echo '</div>';
            echo '<div class=col-lg-5 col-sm-6 LoginPadding>';
            echo '<a class="btn btn-success btn-sm" href="loginForm.php"><h3 class="Login">Login</h3></a>';
            echo '</div>';
        }
        else {
            $user = $_SESSION['user'];
            if ($user->role_id == 1) {
                $home = 'admin_home.php';
            }
            else if ($user->role_id == 2) {
                $home = 'manager_home.php';
            }
            else if ($user->role_id == 3) {
                $home = 'user_home.php';
            }
            echo '<div class=col-lg-7 col-sm-6RegisterPadding">';
            echo '<a class="btn btn-secondary btn-sm" href="'.$home.'"><h3 class="Login">Home</h3></a>';
            echo '</div>';
            echo '<div class=col-lg-5 col-sm-6 LoginPadding>';
            echo '<a class="btn btn-success btn-sm" href="logout.php"><h3 class="Login">Logout</h3></a>';
            echo '</div>';
        }
        ?>
                </div>
            </div>
            <!--End Login Buttons-->

        </div>
    </div>

    <!--Header ends here-->


    <div class="container-fluid ">
        <div class="row background">
            <div class="col-3 bgTop"></div>
            <!--Making Second nav-->
            <div class="col-4 offset-1 paddingTop">

                <nav class="navbar navbar-dark bg-dark">
                    <ul class="navbar-nav">
                        <div class="row">
                            <li class="nav-item paddingNav">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item paddingNav">
                                <a class="nav-link" href="games.php">Games</a>
                            </li>
                            <li class="nav-item paddingNav">
                                <a class="nav-link" href="reviews.php">Reviews</a>
                            </li>
                        </div>
                    </ul>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search the Store" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </nav>

            </div>
            <div class="col-3 bgTop offset-1"></div>
        </div>
        <div class="row">
            <div class="col bgTop"></div>

            <div class="col-6 paddingTop bgTop">
                <a href="singleGamePage.php?id=<?= $game02->id ?>">
                    <div class="topImageHolder">
                        <img src="<?= $game02->posterImage ?>" height="540" width="940">
                    </div>
                </a>
            </div>
            <div class="col bgTop"></div>
        </div>
    </div>
    <div class="container-fluid GradientBg">
        <div class="row">
            <div class="col-3 offset-3">
                <h3 class="TitleText TitleMainPadding">Featured And Recommended</h3>
            </div>

        </div>

        <!--********FEATURED AND RECOMMENDED**********-->
        <div class="row">
            <div class="col-4 offset-3 paddingLeft">
                <a href="singleGamePage.php?id=<?= $game01->id ?>">
                    <div>
                        <img src="<?= $game01->posterImage ?>" height="420" width="620">
                    </div>
                </a>
            </div>
            <div class="col-2 BoxBg">
                <a href="singleGamePage.php?id=<?= $game01->id ?>">
                    <h3 class="posterHomeGame"><?= $game01->gameName ?></h3>
                </a>
                <h3 class="posterDescription">Description:</h3>
                <h3 class="posterDescription topPadding"><?= $game01->descriptionShort ?></h3>
                <div class="position">
                    <h3 class="nowAvailable">Now Available</h3>
                    <!--Not sure if i want to have tags or not-->

                    <!--                                        <div class="row paddingleft">
                                            <div class="col-9">
                                                <div class="row">

                                                    <div class="col-3 offset-1 TagBg">
                                                        <a href="#">
                                                            <h3 class="Tag">tag1</h3>
                                                        </a>
                                                    </div>
                                                    <div class="col-3 offset-1 paddingleft TagBg">
                                                        <a href="#">
                                                            <h3 class="Tag">tag2</h3>
                                                        </a>

                                                    </div>
                                                    <div class="col-3 offset-1 paddingleft TagBg">
                                                        <a href="#">
                                                            <h3 class="Tag">tag3</h3>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                    <div class="row paddingTop">
                        <div class="col-4 paddingleft">
                            <h3 class="nowAvailable">Price</h3>
                        </div>
                        <div class="col-8">
                            <a href="singleGamePage.php?id=<?= $game01->id ?>">
                                <div class="row">
                                    <div class="col-4 DiscountBg paddingtop">
                                        <h3 class="DiscountText"><?= $game01->discount ?>%</h3>

                                    </div>

                                    <div class="col-6 TagBg paddingtop">
                                        <h3 class="DiscountText">$<?= $game01->price?></h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--*******END OF FEATURED AND RECOMMENDED********-->

        <!--***********SPECIAL OFFERS************-->
        <div class="row">
            <div class="col-3 offset-3">
                <h3 class="TitleText TitlePadding">Special Offers</h3>
            </div>
        </div>
        <div class="row bigBotPadding">

            <!--            CARD 1 ON THE LEFT-->

            <div class="col-2 offset-3 ">
                <div class="row paddingLeft">
                    <a href="singleGamePage.php?id=<?= $game05->id ?>">
                        <div>
                            <img src="<?= $game05->posterImage ?>" height="260" width="300">
                        </div>

                    </a>
                </div>
                <div class="row specialOffer01Bg">

                    <h3 class="MidweekMadnessText">MIDWEEK MADNESS</h3>
                    <h3 class="MidweekMadnessSmall">Offer ends 30th Mar @6pm</h3>

                </div>
                <div class="row specialOffer01Bg">
                    <div class="col-1"></div>
                    <div class="col-5 DiscountBg ">
                        <a href="allGames.php">
                            <h3 class="altDiscountText">10~70%</h3>
                        </a>
                    </div>
                </div>
            </div>

            <!--            END OF CARD 1-->

            <!--            CARD 2-->
            <div class="col-2">
                <div class="row paddingLeft">

                    <a href="singleGamePage.php?id=<?= $game10->id ?>">
                        <div>
                            <img src="<?= $game10->posterImage ?>" height="295" width="300">
                        </div>

                    </a>

                </div>
                <div class="row ">
                    <div class="col paddingLeft specialOffer01Bg">
                        <!--////////////////////////WHERE the bug might be/////////////////////////-->
                        <h3 class="MidweekMadnessText">MIDWEEK MADNESS</h3>
                        <h3 class="MidweekMadnessSmall">Offer ends 30th Mar @6pm</h3>
                    </div>
                </div>
            </div>
            <!--            END OF CARD 2-->

            <!--            CARD 3 AND 4-->
            <div class="col-2 BoxBg paddingLeft paddingRight">

                <div class="specialOffer01Bg">
                    <a href="singleGamePage.php?id=<?= $game06->id ?>">
                        <div>
                            <img src="<?= $game06->posterImage ?>" height="131" width="317">
                        </div>
                    </a>
                    <div class="row">
                        <div class="col-5">
                            <h3 class="altMidweekMadnessSmall">Todays Deal!</h3>
                            <h3 class="altAltMidweekMadnessSmall">2 Day(s) left</h3>
                        </div>

                        <div class="col-3 paddingtop paddingRight">
                            <a href="singleGamePage.php?id=<?= $game06->id ?>">
                                <div class="DiscountBg paddingtop paddingbot">

                                    <h3 class="DiscountTextSmall"><?= $game06->discount?>%</h3>

                                </div>
                            </a>

                        </div>

                        <div class="col-4 paddingtop">
                            <a href="singleGamePage.php?id=<?= $game06->id ?>">
                                <div class="TagBg paddingtop paddingbot">

                                    <h3 class="DiscountTextSmall">$<?= $game06->price?></h3>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!--                END OF CARD 3-->


                <div class="specialOffer01Bg">
                    <a href="singleGamePage.php?id=<?= $game07->id ?>">
                        <div>
                            <img src="<?= $game07->posterImage ?>" height="131" width="317">
                        </div>
                    </a>
                    <div class="row">
                        <div class="col-5">
                            <h3 class="altMidweekMadnessSmall">Todays Deal!</h3>
                            <h3 class="altAltMidweekMadnessSmall">2 Day(s) left</h3>
                        </div>

                        <div class="col-3 paddingtop paddingRight">
                            <a href="singleGamePage.php?id=<?= $game07->id ?>">
                                <div class="DiscountBg paddingtop paddingbot">

                                    <h3 class="DiscountTextSmall"><?= $game07->discount?>%</h3>

                                </div>
                            </a>

                        </div>

                        <div class="col-4 paddingtop">
                            <a href="singleGamePage.php?id=<?= $game07->id ?>">
                                <div class="TagBg paddingtop paddingbot">

                                    <h3 class="DiscountTextSmall">$<?= $game07->price?></h3>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!--                END OF CARD 4-->

            </div>


        </div>
    </div>
    <div class="container-fluid background">
        <!--TOP SELLING-->

        <div class="row">
            <div class="col-3 offset-3">
                <h3 class="TitleText TitleMainPadding">Top Selling</h3>
            </div>
        </div>
        <!--        CARD 1-->
        <div class="row">
            <div class="col-2 offset-3 paddingLeft">
                <a href="singleGamePage.php?id=<?= $game14->id ?>">
                    <div class="TopSellingImage">
                        <img src="<?= $game14->posterImage ?>" height="92" width="303">
                    </div>
                </a>
            </div>
            <div class="col-2 topSellingBg">
                <a href="singleGamePage.php?id=<?= $game14->id ?>">
                    <h3 class="topSellingCardText "><?= $game14->gameName ?></h3>
                </a>
                <h3 class="altTopSellingCardText">Windowns</h3>
                <h3 class="altTopSellingCardText">Simulator, Remake</h3>

            </div>
            <div class="col-2 topSellingBg">
                <div class="row paddingTop">
                    <div class="col-4 paddingleft paddingtop">
                        <h3 class="nowAvailable">Price</h3>
                    </div>
                    <div class="col-8">
                        <a href="singleGamePage.php?id=<?= $game14->id ?>">
                            <div class="row">

                                <div class="col-4 DiscountBg paddingToP">
                                    <h3 class="DiscountText"><?= $game14->discount?>%</h3>

                                </div>

                                <div class="col-6 TagBg paddingToP">
                                    <h3 class="DiscountText">$<?= $game14->price?></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!--        CARD 2-->
        <div class="row paddingTopSellingCards">
            <div class="col-2 offset-3 paddingLeft">
                <a href="singleGamePage.php?id=<?= $game12->id ?>">
                    <div class="TopSellingImage"><img src="<?= $game12->posterImage ?>" height="92" width="303"></div>
                </a>
            </div>
            <div class="col-2 topSellingBg">
                <a href="singleGamePage.php?id=<?= $game12->id ?>">
                    <h3 class="topSellingCardText "><?= $game12->gameName ?></h3>
                </a>
                <h3 class="altTopSellingCardText">Windowns, IOS, Android</h3>
                <h3 class="altTopSellingCardText">Sport Manager</h3>

            </div>
            <div class="col-2 topSellingBg">
                <div class="row paddingTop">
                    <div class="col-4 paddingleft paddingtop">
                        <h3 class="nowAvailable">Price</h3>
                    </div>
                    <div class="col-8">
                        <a href="singleGamePage.php?id=<?= $game12->id ?>">
                            <div class="row">

                                <div class="col-4 DiscountBg paddingToP">
                                    <h3 class="DiscountText"><?= $game12->discount?>%</h3>

                                </div>

                                <div class="col-6 TagBg paddingToP">
                                    <h3 class="DiscountText">$<?= $game12->price?></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!--        CARD 3-->
        <div class="row paddingTopSellingCards">
            <div class="col-2 offset-3 paddingLeft">
                <a href="singleGamePage.php?id=<?= $game08->id ?>">
                    <div class="TopSellingImage"><img src="<?= $game08->posterImage ?>" height="92" width="303"></div>
                </a>
            </div>
            <div class="col-2 topSellingBg">
                <a href="singleGamePage.php?id=<?= $game08->id ?>">
                    <h3 class="topSellingCardText "><?= $game08->gameName ?></h3>
                </a>
                <h3 class="altTopSellingCardText">Windowns</h3>
                <h3 class="altTopSellingCardText">Open World, Adventure</h3>

            </div>
            <div class="col-2 topSellingBg">
                <div class="row paddingTop">
                    <div class="col-4 paddingleft paddingtop">
                        <h3 class="nowAvailable">Price</h3>
                    </div>
                    <div class="col-8">
                        <a href="singleGamePage.php?id=<?= $game08->id ?>">
                            <div class="row">

                                <div class="col-4 DiscountBg paddingToP">
                                    <h3 class="DiscountText"><?= $game08->discount?>%</h3>

                                </div>

                                <div class="col-6 TagBg paddingToP">
                                    <h3 class="DiscountText">$<?= $game08->price?></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!--        CARD 4-->
        <div class="row paddingTopSellingCards">
            <div class="col-2 offset-3 paddingLeft">
                <a href="singleGamePage.php?id=<?= $game10->id ?>">
                    <div><img src="<?= $game10->posterImage ?>" height="92" width="303"></div>
                </a>
            </div>
            <div class="col-2 topSellingBg">
                <a href="singleGamePage.php?id=<?= $game10->id ?>">
                    <h3 class="topSellingCardText "><?= $game10->gameName ?></h3>
                </a>
                <h3 class="altTopSellingCardText">Windowns, Playstation, Xbox</h3>
                <h3 class="altTopSellingCardText">Action, Adventure</h3>

            </div>
            <div class="col-2 topSellingBg">
                <div class="row paddingTop">
                    <div class="col-4 paddingleft paddingtop">
                        <h3 class="nowAvailable">Price</h3>
                    </div>
                    <div class="col-8">
                        <a href="singleGamePage.php?id=<?= $game10->id ?>">
                            <div class="row">

                                <div class="col-4 DiscountBg paddingToP">
                                    <h3 class="DiscountText"><?= $game10->discount?>%</h3>

                                </div>

                                <div class="col-6 TagBg paddingToP">
                                    <h3 class="DiscountText">$<?= $game10->price?></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!--        CARD 5-->
        <div class="row paddingTopSellingCards">
            <div class="col-2 offset-3 paddingLeft">
                <a href="singleGamePage.php?id=<?= $game13->id ?>">
                    <div class="TopSellingImage"><img src="<?= $game13->posterImage ?>" height="92" width="303"></div>
                </a>
            </div>
            <div class="col-2 topSellingBg">
                <a href="singleGamePage.php?id=<?= $game13->id ?>">
                    <h3 class="topSellingCardText "><?= $game13->gameName ?></h3>
                </a>
                <h3 class="altTopSellingCardText">Windowns, Playstation, Xbox</h3>
                <h3 class="altTopSellingCardText">Open world, RPG</h3>

            </div>
            <div class="col-2 topSellingBg">
                <div class="row paddingTop">
                    <div class="col-4 paddingleft paddingtop">
                        <h3 class="nowAvailable">Price</h3>
                    </div>
                    <div class="col-8">
                        <a href="singleGamePage.php?id=<?= $game13->id ?>">
                            <div class="row">

                                <div class="col-4 DiscountBg paddingToP">
                                    <h3 class="DiscountText"><?= $game13->discount?>%</h3>

                                </div>

                                <div class="col-6 TagBg paddingToP">
                                    <h3 class="DiscountText">$<?= $game13->price?></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!--        FOOTER-->
        <div class="row bigTopPadding">
            <div class="col-4 offset-4">
                <h3 class="FooterText"><a href="#">YAM.NET EULA</a> | <a href="#">PRIVACY</a> | <a href="#">TERMS </a>| <a href="#">COPYRIGHT INFRINGMENT</a></h3>
            </div>
        </div>
        <div class="row footerPadding">
            <div class="col-2 offset-5">
                <h3 class="FooterTextSmall">©2020 YAM ENTERTAINMENT, INC. ALL RIGHTS RESERVED</h3>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
