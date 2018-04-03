<!DOCTYPE html>
<html>
  <head>
    <title>Car {{ $car->id }}</title>
  </head>
  <body>
    <h1>Car {{ $car->id }}</h1>
    <h2>{{ $bazarName }}</h2>
    <ul>
      <li>Make: {{ $car->make }}</li>
      <li>Model: {{ $car->model }}</li>
      <li>Produced on: {{ $car->produced_on }}</li>
    </ul>
  </body>
</html>