    <?php
require_once 'utils/functions.php';
require_once 'classes/Review.php';
require_once 'classes/Game.php';
require_once 'classes/Gump.php';

try {
 
        $validator = new GUMP();

        $validation_rules = array(
            'id' => 'required|integer|min_numeric,1'
        );
        $filter_rules = array(
        	'id' => 'trim'
        );

        $validator->validation_rules($validation_rules);
        $validator->filter_rules($filter_rules);

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $_GET = $validator->sanitize($_GET);
        $validated_data = $validator->run($_GET);
    } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_POST = $validator->sanitize($_POST);
        $validated_data = $validator->run($_POST);
    }

        if($validated_data === false) {
            $errors = $validator->get_errors_array();
            throw new Exception("Invalid review id: " . $errors['id']);
        }

    $id = $validated_data['id'];
    $review = Review::find($id);
    $reviews = Review::all();
        
    $games = Game::all();
    
}
catch (Exception $ex) {
    die($ex->getMessage());
}
?>
    <!DOCTYPE html>
    <html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!--My CSS-->
        <link rel="stylesheet" href="css/myStyles.css">
        <title>Edit</title>

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
            <div class="container">
                <div class="row">
                    <div class="col">

                        <!--START OF FORM-->
                        <form method="POST" action="reviews_update.php" role="form" class="form-horizontal" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $review->id ?>" />

                            <!--Form title-->
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <h3>
                                        <p class="paddingTop">Edit review form</p>
                                    </h3>
                                </div>
                            </div>
                            <!--end of form title-->

                            <!--positivity-->
                            <div class="form-group">
                                <label for="positivity" class="col-md-3 control-label">
                                    <p>Positivity</p>
                                </label>
                                <div class="col-md-12">

                                    <select class="form-control formBg formBoarder" id="positivity" name="positivity">
                                        <option>
                                            <p></p>
                                        </option>
                                        <option>
                                            <p>Overwhelmingly Positive</p>
                                        </option>
                                        <option>
                                            <p>Mainly Positive</p>
                                        </option>
                                        <option>
                                            <p>Mainly Negitive</p>
                                        </option>
                                        <option>
                                            <p>Overwhelmingly Negitive</p>
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-3 error">
                                    <?php error('positivity'); ?>
                                </div>
                            </div>
                            <!--end of positivity-->

                            <!--user name-->
                            <div class="form-group">
                                <label for="userName" class="col-md-3 control-label">
                                    <p>User Name</p>
                                </label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control formBg formBoarder" id="userName" name="userName" value="<?= old('userName', $review->userName) ?>" />
                                </div>
                                <div class="col-md-3 error">
                                    <?php error('userName'); ?>
                                </div>
                            </div>
                            <!--end of user Name-->

                            <!--review-->
                            <div class="form-group">
                                <label for="review" class="col-md-3 control-label">
                                    <p>Review</p>
                                </label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control formBg formBoarder" id="review" name="review" value="<?= old('review', $review->review) ?>" />
                                </div>
                                <div class="col-md-3 error">
                                    <?php error('review'); ?>
                                </div>
                            </div>
                            <!--end of review-->

                            <!--posted-->
                            <div class="form-group">
                                <label for="posted" class="col-md-3 control-label">
                                    <p>Posted</p>
                                </label>
                                <div class="col-md-12">
                                    <input type="date" class="form-control formBg formBoarder" id="discopostedunt" name="posted" value="<?= old('posted', $review->posted) ?>" />
                                </div>
                                <div class="col-md-3 error">
                                    <?php error('posted'); ?>
                                </div>
                            </div>
                            <!--end of posted-->

                            <!--poster gameId-->
                            <div class="form-group">
                                <label for="gameId" class="col-md-3 control-label">
                                    <p>Game ID</p>
                                </label>
                                <div class="col-md-12">
                                    <select class="form-control formBg formBoarder" id="gameId" name="gameId">

                                        <?php foreach ($games as $game) { ?>
                                        <option value="<?= $game->id ?>"><?= $game->gameName ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="col-md-3 error">
                                    <?php error('gameId'); ?>
                                </div>
                            </div>
                            <!--end of gameId-->

                            <!--cancel / submit buttons-->
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3 paddingTop">
                                    <a href="reviews.php" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                </div>
                            </div>
                            <!--end of buttons-->
                        </form>
                        <!--end of form-->
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
            <!--End of footer-->
        </div>
    </body>

    </html>
