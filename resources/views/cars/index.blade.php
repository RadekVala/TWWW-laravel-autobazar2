<!DOCTYPE html>
<html>
  <head>
    <title>All cars</title>
  </head>
  <body>
    <h1>All cars</h1>
   
    <ul>
        @foreach ($arrCars as $car)
            <li>
                <a href="
                {{ 
                    action('CarController@show',
                    ['id' => $car->id]) 
                }}
                ">
                    {{ $car->make }} - {{ $car->model }}
                </a>
            </li>
        @endforeach
    </ul>
  </body>
</html>