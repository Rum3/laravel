<?php

namespace App\Http\Controllers;

use App\Models\Car;

use App\Models\Owner;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with('owner')->get();

        return view('cars.index', compact('cars'));
    }
    public function testIndex()
    {
        // Създаване на примерни данни
        $owner = Owner::factory()->create();
        $car1 = Car::factory()->create([
            'make' => 'Make 1',
            'model' => 'Model 1',
            'owner_id' => $owner->id,
        ]);
        $car2 = Car::factory()->create([
            'make' => 'Make 2',
            'model' => 'Model 2',
            'owner_id' => $owner->id,
        ]);

        // Извикване на метода index() на CarController
        $response = $this->get(route('cars.index'));

        // Проверка за успешен HTTP отговор
        $response->assertOk();

        // Проверка за присъствие на данните в шаблона
        $response->assertSee($car1->make);
        $response->assertSee($car1->model);
        $response->assertSee($car1->owner->name);
        $response->assertSee($car2->make);
        $response->assertSee($car2->model);
        $response->assertSee($car2->owner->name);
    }
}

