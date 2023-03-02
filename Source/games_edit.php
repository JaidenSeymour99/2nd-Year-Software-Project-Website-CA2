    <?php
require_once 'utils/functions.php';
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
            throw new Exception("Invalid game id: " . $errors['id']);
        }

        $id = $validated_data['id'];
        $game = Game::find($id);
    
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
                        <form method="POST" action="games_update.php" role="form" class="form-horizontal" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $game->id ?>" />
                            <!--Form title-->
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <h3>
                                        <p class="paddingTop">Edit game form</p>
                                    </h3>
                                </div>
                            </div>
                            <!--end of form title-->

                            <!--game name-->
                            <div class="form-group">
                                <label for="gameName" class="col-md-3 control-label">
                                    <p>Game Name</p>
                                </label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control formBg formBoarder" id="gameName" name="gameName" value="<?= old('gameName', $game->gameName) ?>" />
                                </div>
                                <div class="col-md-3 error">
                                    <?php error('gameName'); ?>
                                </div>
                            </div>
                            <!--end of game name-->

                            <!--Short Description-->
                            <div class="form-group">
                                <label for="descriptionShort" class="col-md-3 control-label">
                                    <p>Short Description</p>
                                </label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control formBg formBoarder" id="descriptionShort" name="descriptionShort" value="<?= old('descriptionShort', $game->descriptionShort) ?>" />
                                </div>
                                <div class="col-md-3 error">
                                    <?php error('descriptionShort'); ?>
                                </div>
                            </div>
                            <!--end of short description-->

                            <!--price-->
                            <div class="form-group">
                                <label for="price" class="col-md-3 control-label">
                                    <p>Price</p>
                                </label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control formBg formBoarder" id="price" name="price" value="<?= old('price', $game->price) ?>" />
                                </div>
                                <div class="col-md-3 error">
                                    <?php error('price'); ?>
                                </div>
                            </div>
                            <!--end of price-->

                            <!--discount-->
                            <div class="form-group">
                                <label for="discount" class="col-md-3 control-label">
                                    <p>Discount</p>
                                </label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control formBg formBoarder" id="discount" name="discount" value="<?= old('discount', $game->discount) ?>" />
                                </div>
                                <div class="col-md-3 error">
                                    <?php error('discount'); ?>
                                </div>
                            </div>
                            <!--end of discount-->

                            <!--poster image-->
                            <div class="form-group">
                                <label for="posterImage" class="col-md-3 control-label">
                                    <p>Poster Image</p>
                                </label>
                                <div class="col-md-12">
                                    <input type="file" class="form-control formBg formBoarder" id="posterImage" name="posterImage" value="<?= old('posterImage', $game->posterImage) ?>" />
                                </div>

                                <div class="col-md-3 error">
                                    <?php error('posterImage'); ?>
                                </div>
                            </div>
                            <!--end of poster image-->

                            <!--about this game-->
                            <div class="form-group">
                                <label for="aboutThisGame" class="col-md-3 control-label">
                                    <p>About This Game</p>
                                </label>
                                <div class="col-md-12">
                                    <input type="textarea" class="form-control formBg formBoarder" id="aboutThisGame" name="aboutThisGame" value="<?= old('aboutThisGame', $game->aboutThisGame) ?>" />
                                </div>
                                <div class="col-md-3 error">
                                    <?php error('aboutThisGame'); ?>
                                </div>
                            </div><!-- end of about this game-->

                            <!--cancel / submit buttons-->
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <a href="games.php" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                </div>
                            </div>
                        </form>
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
