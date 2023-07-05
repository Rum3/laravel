@foreach ($cars as $car)
    <h3>Car: {{ $car->make }} {{ $car->model }}</h3>
    <p>Owner: {{ $car->owner->name }}</p>
    <hr>
@endforeach