<?php
require_once 'classes/Connection.php';

class Review {
    public $id;
    public $positivity;
    public $userName;
    public $review;
    public $posted;
    public $gameId;

    public function __construct() {
    }

    public function save() {
        $params = array(
            'positivity' => $this->positivity,
            'userName' => $this->userName,
            'review' => $this->review,
            'posted' => $this->posted,
            'gameId' => $this->gameId
        );

        if ($this->id === NULL) {
            $sql = "INSERT INTO reviews(
                        positivity, userName, review, posted, gameId
                    ) VALUES (
                        :positivity, :userName, :review, posted, gameId
                    )";
        }
        else if ($this->id !== NULL) {
            $params["id"] = $this->id;

            $sql = "UPDATE reviews SET
                        positivity = :positivity,
                        userName = :userName,
                        review = :review,
                        posted = :posted,
                        gameId = :gameId
                    WHERE id = :id";
        }

        $conn = Connection::getInstance();
        $stmt = $conn->prepare($sql);
        $success = $stmt->execute($params);
        if (!$success) {
            throw new Exception("Failed to save review");
        }
        else {
            $rowCount = $stmt->rowCount();
            if ($rowCount !== 1) {
                throw new Exception("Error saving review");
            }
            if ($this->id === NULL) {
                $this->id = $conn->lastInsertId('reviews');
            }
        }
    }

    public function delete() {
        if (empty($this->id)) {
            throw new Exception("Unsaved review cannot be deleted");
        }
        $params = array(
            'id' => $this->id
        );
        $sql = 'DELETE FROM reviews WHERE id = :id';
        $connection = Connection::getInstance();
        $stmt = $connection->prepare($sql);
        $success = $stmt->execute($params);
        if (!$success) {
            throw new Exception("Failed to delete review");
        }
        else {
            $rowCount = $stmt->rowCount();
            if ($rowCount !== 1) {
                throw new Exception("Error deleting review");
            }
        }
    }

    public static function all() {
        $sql = 'SELECT * FROM reviews';
        $connection = Connection::getInstance();
        $stmt = $connection->prepare($sql);
        $success = $stmt->execute();
        if (!$success) {
            throw new Exception("Failed to retrieve reviews");
        }
        else {
            $reviews = $stmt->fetchAll(PDO::FETCH_CLASS, 'Review');
            return $reviews;
        }
    }

    public static function find($id) {
        $params = array(
            'id' => $id
        ); 
        $sql = 'SELECT * FROM reviews WHERE id = :id';
        $connection = Connection::getInstance();
        $stmt = $connection->prepare($sql);
        $success = $stmt->execute($params);
        if (!$success) {
            throw new Exception("Failed to retrieve review");
        }
        else {
            $review = $stmt->fetchObject('Review');
            return $review;
        }
    }
    public static function some($gameId){
        $sql = 'SELECT * FROM reviews WHERE gameId = :gameid';
        $connection = Connection::getInstance();
        $stmt = $connection->prepare($sql);
        $success = $stmt->execute($params);
        if (!$success){
            throw new Exception("Failed to retrieve game id");
        }
        else {
            $review = $stmt->fetchAll(PDO::FETCH_CLASS, 'Review');
            return $reviews;
            
        }
    }
}
?>
