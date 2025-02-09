<?php 

    class Movie {

        public $id;
        public $title;
        public $description;
        public $image;
        public $trailer;
        public $category;
        public $lenght;
        public $users_id;

        public function imageGenerateName() {
            return bin2hex(random_bytes(60)) . ".jpg";
        }
    }


    interface MovieDAOInterface {

        public function buildMovie($data);
        public function findAll();
        public function getLatestMovies();
        public function getMoviesByCategory();
        public function getMoviesByUserId();
        public function findById();
        public function findByTitle();
        public function create(Movie $movie);
        public function update(Movie $movie);
        public function destroy($id);
    }
?>