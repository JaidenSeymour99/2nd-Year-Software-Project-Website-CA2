<?php
require_once 'utils/functions.php';
require_once 'classes/User.php';
require_once 'classes/Gump.php';

start_session();

try {
    $validator = new GUMP();

    $sanitized_data = $validator->sanitize($_POST);

    $validation_rules = array(
        'username' => 'required|alpha_numeric|max_len,50|min_len,3',
	    'password' => 'required|min_len,3',
        'country' => 'required',
        'fullName' => 'required',
        'birthDay' => 'required|numeric|min_numeric,1|max_numeric,31',
        'month' => 'required',
        'year' => 'required|numeric|min_numeric,1900',
        'email' => 'required|valid_email'
        

    );
    $filter_rules = array(
    	'username' => 'trim|sanitize_string',
    	'password' => 'trim',
        'country' => 'trim',
        'fullName' => 'trim|sanitize_string',
        'birthDay' => 'trim',
        'month' => 'trim',
        'year' => 'trim',
        'email' => 'trim|sanitize_string'
    );

    $validator->validation_rules($validation_rules);
    $validator->filter_rules($filter_rules);

    $validated_data = $validator->run($sanitized_data);

    if ($validated_data === false) {
        $errors = $validator->get_errors_array();
    }
    else {
        $errors = array();

        $username = $validated_data['username'];
        $password = $validated_data['password'];
        $country = $validated_data['country'];
        $fullName = $validated_data['fullName'];
        $birthDay = $validated_data['birthDay'];
        $month = $validated_data['month'];
        $year = $validated_data['year'];
        $email = $validated_data['email'];
        $password_confirmation = $validated_data['password_confirmation'];

        if ($password !== $password_confirmation) {
            $errors['password_confirmation'] = "Password confirmation does not match";
        }
        else {
            $user = User::findByUsername($username);
            if ($user !== false) {
                $errors['username'] = "Username already registered";
            }
            else {
                $user = new User();
                $user->username = $username;
                $user->password = password_hash($password, PASSWORD_DEFAULT);
                $user->country = $country;
                $user->fullName = $fullName;
                $user->birthDay = $birthDay;
                $user->month = $month;
                $user->year = $year;
                $user->email = $email;
                $user->role_id = 3;
                $user->save();
            }
        }
    }

    if (!empty($errors)) {
        throw new Exception("There were errors. Please fix them.");
    }

    $home = 'user_home.php';

    $_SESSION['user'] = $user;

    header('Location: ' . $home);
}
catch (Exception $ex) {
    require 'registerForm.php';
}
?>
