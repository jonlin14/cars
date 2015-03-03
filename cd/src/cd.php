<?php

    class CD
    {
        private $title;
        private $artist;
        private $cover_art;
        private $price;

        function __construct ($album_name, $artist, $cover_art, $price = 10.99)
        {

            $this->title = $album_name;
            $this->artist = $artist;
            $this->cover_art = $cover_art;
            $this->price = $price;
        }

        function setTitle($new_album){
            $this->title = $new_album;
        }

        function getTitle(){
            return $this->title;
        }

        function setArtist($new_artist)
        {
            $this->artist = $new_artist;
        }
        function getArtist()
        {
            return $this->artist;
        }
        function setCoverArt($img_path)
        {
            $this->cover_art = $img_path;
        }
        function getCoverArt()
        {
            return $this->cover_art;
        }

        function setPrice($new_price)
        {
            $this->price = $new_price;
        }
        function getPrice()
        {
            return $this->price;
        }
    }
?>
