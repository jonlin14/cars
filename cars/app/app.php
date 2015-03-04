<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/car.php";

    $app = new Silex\Application();

    $app->get("/", function(){
        return
        "<!DOCTYPE html>
        <html>
        <head>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
        <title>Car Store</title>
        </head>
        <body>
            <div class ='container'>
                <form action = '/car_list'>
                    <div class = 'form-group'>
                        <label for ='price'>Enter your price</label>
                        <input id ='price' name ='price' class='form-control' type = number>
                    </div>
                    <div class = 'form-group'>
                        <label for ='miles'>Enter miles here</label>
                        <input id='miles' name='miles' class='form-control' type=number>
                    </div>
                </form>
            </div>
            <button type='submit' class='btn'>'Submit'</button>


        </body>
        </html>";
    });

    $app->get('/car_list', function() {
        $porsche = new Car ("Porsche", 45555, 9820, "images/porsche.jpg");
        $mercedes = new Car ("Mercedes", 35245, 3423, "images/mercedes.jpg");

        $cars = array ($porsche, $mercedes);
        $cars_matching_search = array();

        foreach($cars as $car)
        {
            if($this->price < $_GET["price"])
            {
                array_push($cars_matching_search, $car);
            }
        }
        return $cars_matching_search[0];

    });


    return $app;

?>
