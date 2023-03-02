<?php
require_once 'classes/Connection.php';

class Game {
    public $id;
    public $gameName;
    public $descriptionShort;
    public $price;
    public $discount;
    public $posterImage;
    public $aboutThisGame;

    public function __construct() {
    }

    public function save() {
        $params = array(
            'gameName' => $this->gameName,
            'descriptionShort' => $this->descriptionShort,
            'price' => $this->price,
            'discount' => $this->discount,
            'posterImage' => $this->posterImage,
            'aboutThisGame' => $this->aboutThisGame
            
        );

        if ($this->id === NULL) {
            $sql = "INSERT INTO games(
                        gameName, descriptionShort, price, discount, posterImage, aboutThisGame
                    ) VALUES (
                        :gameName, :descriptionShort, :price, :discount, :posterImage, :aboutThisGame
                    )";
        }
        else if ($this->id !== NULL) {
            $params["id"] = $this->id;

            $sql = "UPDATE games SET
                        gameName = :gameName,
                        descriptionShort = :descriptionShort,
                        price = :price,
                        discount = :discount,
                        posterImage = :posterImage,
                        aboutThisGame = :aboutThisGame
                    WHERE id = :id";
        }

        $conn = Connection::getInstance();
        $stmt = $conn->prepare($sql);
        $success = $stmt->execute($params);
        if (!$success) {
            throw new Exception("Failed to save game");
        }
        else {
            $rowCount = $stmt->rowCount();
            if ($rowCount !== 1) {
                throw new Exception("Error saving game");
            }
            if ($this->id === NULL) {
                $this->id = $conn->lastInsertId('games');
            }
        }
    }

    public function delete() {
        if (empty($this->id)) {
            throw new Exception("Unsaved game cannot be deleted");
        }
        $params = array(
            'id' => $this->id
        );
        $sql = 'DELETE FROM games WHERE id = :id';
        $connection = Connection::getInstance();
        $stmt = $connection->prepare($sql);
        $success = $stmt->execute($params);
        if (!$success) {
            throw new Exception("Failed to delete game");
        }
        else {
            $rowCount = $stmt->rowCount();
            if ($rowCount !== 1) {
                throw new Exception("Error deleting games");
            }
        }
    }

    public static function all() {
        $sql = 'SELECT * FROM games';
        $connection = Connection::getInstance();
        $stmt = $connection->prepare($sql);
        $success = $stmt->execute();
        if (!$success) {
            throw new Exception("Failed to retrieve games");
        }
        else {
            $games = $stmt->fetchAll(PDO::FETCH_CLASS, 'Game');
            return $games;
        }
    }

    public static function find($id) {
        $params = array(
            'id' => $id
        );
        $sql = 'SELECT * FROM games WHERE id = :id';
        $connection = Connection::getInstance();
        $stmt = $connection->prepare($sql);
        $success = $stmt->execute($params);
        if (!$success) {
            throw new Exception("Failed to retrieve game");
        }
        else {
            $game = $stmt->fetchObject('Game');
            return $game;
        }
    }
}
?>
