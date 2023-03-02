<?php
require_once 'classes/Game.php';
require_once 'classes/Review.php';
require_once 'classes/Gump.php';

try {
    $validator = new GUMP();

    $_GET = $validator->sanitize($_GET);

    $validation_rules = array(
        'id' => 'required|integer|min_numeric,1'
    );
    $filter_rules = array(
    	'id' => 'trim|sanitize_numbers'
    );

    $validator->validation_rules($validation_rules);
    $validator->filter_rules($filter_rules);

    $validated_data = $validator->run($_GET);

    if($validated_data === false) {
        $errors = $validator->get_errors_array();
        throw new Exception("Invalid game id: " . $errors['id']);
    }

    $id = $validated_data['id'];
    $game = Game::find($id);
    $reviews = Review::all();
    $review = Review::find($game->id);
    
    $review01 = Review::find(1);
    
    
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
    <title><?= $game->gameName?></title>
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

    <div class="container-fluid GradientBg">
        <div class="row">
            <div class="col-3 offset-3">
                <h3 class="TitleText TitleMainPadding">
                    <?= $game->gameName ?>
                </h3>

            </div>
        </div>

        <!--********FEATURED AND RECOMMENDED**********-->
        <div class="row">
            <div class="col-4 offset-3 paddingLeft">
                <a href="singleGamePage.php?id=<?= $game->id ?>">
                    <div class=""><img src="<?= $game->posterImage?> " height="420px" width="620px"></div>
                </a>
            </div>
            <div class="col-2 BoxBg">
                <a href="singleGamePage.php">
                    <h3 class="posterHomeGame"><?= $game->gameName?></h3>
                </a>
                <h3 class="posterDescription">Description:</h3>
                <h3 class="posterDescription topPadding"><?= $game->descriptionShort?></h3>
                <div>
                    <h3 class="nowAvailable">Now Available</h3>
                    <!--<div class="row paddingleft">
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
                    <div class="row ">
                        <!--paddingTop-->
                        <div class="col-4 paddingleft">
                            <h3 class="nowAvailable">Price</h3>
                        </div>
                        <div class="col-8">
                            <a href="#">
                                <div class="row">

                                    <div class="col-4 DiscountBg paddingtop">
                                        <h3 class="DiscountText"><?= $game->discount?>%</h3>

                                    </div>

                                    <div class="col-6 TagBg paddingtop">
                                        <h3 class="DiscountText">$<?= $game->price?></h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--*******END OF FEATURED AND RECOMMENDED********-->

        <!--        BUY NOW GAME NAME-->
        <div class="row">
            <div class="col-6 offset-3 paddingTitle paddingbottom">
                <div class="row BuyGameNameNow ">

                    <div class="col-6">
                        <h3 class="BuyGameNameNowText reviewPaddingBot">Buy <?= $game->gameName?> for just $<?= $game->price?></h3>

                    </div>
                    <div class="col-2 offset-4 paddingTop">
                        <a class="btn btn-block btn-success" href="areYouSureYouWantToBuyPage.php?id=<?= $game->id ?>" role="button">Buy</a>
                    </div>
                </div>


            </div>

        </div>
        <!--END OF BUY NOW GAME NAME-->



    </div>
    <div class="container-fluid bg">
        <div class="row ">
            <div class="col-2 offset-3">
                <h3 class="TitleText paddingTopBig">
                    About this game
                </h3>

            </div>

        </div>
        <div class="row">
            <div class="col-4 offset-4">
                <!--BgText-->
                <p>
                    <?= $game->aboutThisGame?>
                </p>

            </div>

        </div>
        <div class="row ">
            <div class="col-3 offset-3">
                <h3 class="TitleText paddingTopBig">
                    Most Helpful Reviews
                </h3>

            </div>

        </div>

        <!--Review 1-->
        <div class="row paddingTop">
            <div class="col-4 offset-4 BgText">
                <div class="row altFormPadding">
                    <div class="col-3">

                        <div class="col-4">
                            <div class="row">
                                <a href="#">
                                    <div class="profileImg"></div>
                                </a>
                            </div>
                        </div>
                        <h3 class="User_Name">Zoner</h3>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-2 thumbsupImg"></div>
                            <div class="col thumbsupBg">
                                <h3 class="Recommended">Recommended</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-5">
                                <h3 class="Posted">Posted 24, Feb, 2020</h3>
                            </div>
                        </div>
                        <div class="row altFormPadding reviewPaddingBot">
                            <div class="col">
                                <p class=’ReviewText’>Pros: Extremely good graphics, Very intelligent AI, Very realistic.Cons: Too much dlcs with way too high prices</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--review 2-->
        <div class="row paddingTop">
            <div class="col-4 offset-4 BgText">
                <div class="row altFormPadding">
                    <div class="col-3">

                        <div class="col-4">
                            <div class="row">
                                <a href="#">
                                    <div class="profileImg"></div>
                                </a>
                            </div>
                        </div>
                        <h3 class="User_Name">R_</h3>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-2 thumbsupImg"></div>
                            <div class="col thumbsupBg">
                                <h3 class="Recommended">Recommended</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-5">
                                <h3 class="Posted">Posted 24, Feb, 2020</h3>
                            </div>
                        </div>
                        <div class="row altFormPadding reviewPaddingBot">
                            <div class="col">
                                <p class=’ReviewText’>
                                    True RPG where you can actually role-play as many things</p>
                                <p class=’ReviewText’>

                                    Pro</p>
                                <p class=’ReviewText’>

                                    - Interesting Story and World Lore
                                    - Interesting Companion/Origin character
                                    - Deep Customization system from class, skill, talent, race, etc.
                                    - Offer Freedom to Gameplay mechanic where you can exploit it in anyway you see fit
                                    - 5 Different Difficulty, from Story mode until Hard mode with Perma-death
                                    - Smart AI that offer challenging Gameplay
                                    - Tons of decision can affect the game world from early until the end
                                    - NPC react depends on lots of thing and make the world feel believable
                                    - Great Soundtrack and Voice acting
                                    - Rewarding Exploration
                                    - High Replay Value
                                    - Character Design
                                    - Beautiful Graphics
                                    - Steam Workshop</p>
                                <p class=’ReviewText’>
                                    Cons</p>
                                <p class=’ReviewText’>

                                    - Confusing Inventory & Journal System</p>
                                <p class=’ReviewText’>
                                    Best Role Playing Games to date, Larian outdid themselves in this Games
                                    Personal 2017 Game of the Year</p>
                                <p class=’ReviewText’>

                                    Score 95</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Review 3-->
        <div class="row paddingTop">
            <div class="col-4 offset-4 BgText">
                <div class="row altFormPadding">
                    <div class="col-3">

                        <div class="col-4">
                            <div class="row">
                                <a href="#">
                                    <div class="profileImg"></div>
                                </a>
                            </div>
                        </div>
                        <h3 class="User_Name">Lolozaur</h3>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-2 thumbsdownImg"></div>
                            <div class="col thumbsupBg">
                                <h3 class="Recommended">Not Recommended</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-5">
                                <h3 class="Posted">Posted 30, Sep, 2017</h3>
                            </div>
                        </div>
                        <div class="row altFormPadding reviewPaddingBot">
                            <div class="col">
                                <p class=’ReviewText’>
                                    Game is good overall, but at launch it’s a bugfest, I cant even finish it because of a gamebreaker near the end. Wait a few months or EE.
                                </p>

                            </div>
                        </div>
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
