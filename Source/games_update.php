<?php
require_once 'classes/Game.php';
require_once 'classes/Gump.php';
require_once 'utils/functions.php';



try {
    $validator = new GUMP();
    $_POST = $validator->sanitize($_POST);

    $validation_rules = array(
        'id' => 'required|integer|min_numeric,1',
        'gameName' => 'required|min_len,1|max_len,255',
        'descriptionShort' => 'required|min_len,4|max_len,270',
        'price' => 'required|float|min_numeric,0',
        'discount' => 'required|numeric|min_numeric,0',
        'aboutThisGame' => 'required'

    );
    $filter_rules = array(
    	'id' => 'trim',
        'gameName' => 'trim|sanitize_string',
        'descriptionShort' => 'trim|sanitize_string',
        'price' => 'trim',
        'discount' => 'trim',
        'aboutThisGame' => 'trim|sanitize_string'

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
        
        try {
            $posterImageFile = imageFileUpload('posterImage', false, 1000000, array('jpg', 'jpeg', 'png', 'gif'));
        }
        catch (Exception $e) {
            $errors['posterImage'] = $e->getMessage();
        }

    if (!empty($errors)) {
        throw new Exception("There were errors. Please fix them.");
    }

    $id = $validated_data['id'];
    $game = Game::find($id);
    $game->gameName = $validated_data['gameName'];
    $game->descriptionShort = $validated_data['descriptionShort'];
    $game->price = $validated_data['price'];
    $game->discount = $validated_data['discount'];
    $game->aboutThisGame = $validated_data['aboutThisGame'];
    $game->posterImage = $posterImageFile;
    
    $game->save();

    header("Location: games.php");
}
catch (Exception $ex) {

    require 'games_edit.php';
    
}
?>
