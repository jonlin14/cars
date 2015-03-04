<?php

    class Car {
        private $model;
        private $price;
        private $miles;
        private $image;

        function __construct($model, $price, $miles, $image){
            $this->model = $model;
            $this->price = $price;
            $this->miles = $miles;
            $this->image = $image;

            function setModel($newModel){
                $this->model = $newModel;
            }
            function getModel(){
                return $this->model;
            }

            function setPrice($floatPrice){
                if ((float) $floatPrice)
                {
                    $this->price=$floatPrice;
                }
                else {
                    "This isn't working";
                }
            }

            function getPrice()
            {
                return $this->price;
            }

            function setMiles($newMiles)
            {
                $this->miles = $newMiles;
            }
            function getMiles()
            {
                return $this->miles;
            }

            function setImage($imagepath)
            {
                $this->image=$imagepath;
            }
            function getImage()
            {
                return $this->image;
            }
        }
    }

    $porsche = new Car ("Porsche", 45555, 9820, "images/porsche.jpg");
    $mercedes = new Car ("Mercedes", 35245, 3423, "images/mercedes.jpg");

    $cars = array ($porsche, $mercedes);
