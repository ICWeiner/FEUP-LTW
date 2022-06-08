<?php 
    declare(strict_types = 1);

    class Review{
        public int $id;
        public string $text;
        public int $score;
        public int $restaurant;
        public int $user;


        public function __construct(int $id, string $text, int $score, int $restaurant, int $user){
            $this->id = $id;
            $this->text = $text;
            $this->score = $score;
            $this->restaurant = $restaurant;
            $this->user = $user;
        }

        static function getRestaurantReviews(PDO $db, int $id) : array {
            $stmt = $db->prepare('SELECT ReviewText, ReviewScore FROM Review WHERE RestaurantId = ?');
            $stmt->execute(array($id));

            $reviews = array();

            while ($review = $stmt->fetch()) {
                $reviews[] = array(
                    'text' => $review['ReviewText'],
                    'score' =>  $review['ReviewScore']
                );
            }
            return $reviews;
        }



    }
?>