<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/cars.php";

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
                    <button type='submit' class='btn'>'Submit'</button>
                </form>
            </div>



        </body>
        </html>";
    });

    $app->get('/car_list', function() {
        $output = "";
        $porsche = new Car ("Porsche", 45555, 9820, "images/porsche.jpg");
        $mercedes = new Car ("Mercedes", 35245, 3423, "images/mercedes.jpg");

        $cars = array ($porsche, $mercedes);
        $cars_matching_search = array();

        foreach($cars as $car)
        {
            if( $car->getPrice() < $_GET["price"])
            {
                array_push($cars_matching_search, $car);
            }
        }

        foreach($cars_matching_search as $car)
        {
          $output = $output . "
          <ul>
          <li>". $car->getModel() . "</li>
            <ul>
              <li>" . $car->getPrice() . "</li>
              <li>" . $car->getMiles() . "</li>
            </ul>
          </ul>";

        }
        return $output;
    });


    return $app;

?>
