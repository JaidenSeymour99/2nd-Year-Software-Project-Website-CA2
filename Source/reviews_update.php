<?php
require_once 'classes/Review.php';
require_once 'classes/Game.php';
require_once 'classes/Gump.php';
require_once 'utils/functions.php';



try {
    $validator = new GUMP();
    $_POST = $validator->sanitize($_POST);

    $validation_rules = array(
        'id' => 'required|integer|min_numeric,1',
        'positivity' => 'required',
        'userName' => 'required|min_len,1|max_len,60',
        'review' => 'required',
        'posted' => 'required',
        'id' => 'required'

    );
    $filter_rules = array(
    	'id' => 'trim',
        'positivity' => 'trim|sanitize_string',
        'userName' => 'trim|sanitize_string',
        'review' => 'trim',
        'posted' => 'trim',
        'id' => 'trim'
    );
    

    $validator->validation_rules($validation_rules);
    $validator->filter_rules($filter_rules);

    $validated_data = $validator->run($_POST);
   
    if($validated_data === false) {
        $errors = $validator->get_errors_array();
    }
    else {
        $errors = array();        
    }

    if (!empty($errors)) {
        throw new Exception("There were errors. Please fix them.");
    }

    $id = $validated_data['id'];
    $review = Review::find($id);
    $review->positivity = $validated_data['positivity'];
    $review->userName = $validated_data['userName'];
    $review->review = $validated_data['review'];
    $review->posted = $validated_data['posted'];
    $game->id = $validated_data['gameId'];
    /*$review->gameId = $validated_data['gameId'];*/
    
    $review->save();

    header("Location: reviews.php");
}
catch (Exception $ex) {

    require 'reviews_edit.php';
    
}
?>
