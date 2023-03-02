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

    <title>Login</title>
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

    <div class="container-fluid RegisterBg">
        <div class="row">
            <div class="col-1 offset-5">

                <img src="../images/LogoCut.png" class="TitlePadding floatRight">
            </div>
            <div class="col-1 YamPadding">
                <h3 class="textYAM paddingTitle noUnderline paddingLeft">YAM</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-2 offset-5">
                <form action="login.php" method="POST" role="form" class="form-horizontal">
                    <div class="form-group">
                        <div class="form-row formPadding">
                            <div class="col">
                                <input type="text" class="form-control formBg formBoarder" placeholder="Username" id="username" name="username" value="<?php old('username'); ?>">
                            </div>
                        </div>
                        <div class="col-md-12 error">
                            <?php error('username'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <input type="password" class="form-control formBg formBoarder" placeholder="Password" id="password" name="password" value="<?php old('password'); ?>">
                            </div>
                        </div>
                        <div class="col-md-12 error">
                            <?php error('password'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-sm btn-block">
                                    <h3 class="CreateFreeAccount">Login</h3>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row topPad ">
                    <div class="col-2 offset-5">
                        <div class="row">

                            <h3 class="altOR">OR LOGIN WITH</h3>

                        </div>
                    </div>

                </div>
                <div class="row topPad">
                    <div class="col-6 fbpadding">

                        <a href="#" class="btn btn-primary btn-block btn-sm" role="button">

                            <h3 class="CreateFreeAccount">Facebook</h3>
                        </a>
                    </div>
                    <div class="col-6 googlepadding">
                        <a href="#" class="btn btn-primary btn-block btn-sm" role="button">

                            <h3 class="CreateFreeAccount">Google</h3>
                        </a>
                    </div>

                </div>
                <div class="row paddingTopSellingCards ">
                    <div class="col">
                        <a href="registerForm.php">
                            <h3 class="CreateFreeYamAcc">Create a Free Yam Account</h3>
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
