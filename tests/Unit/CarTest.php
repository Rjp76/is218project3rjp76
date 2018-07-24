<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarInsert()
    {
        $car = new Car();
        $car->Make='Subaru(TEST)';
        $car->Model ='Legacy(TEST)';
        $car->Year=0000;

        $this->assertTrue($car->save());
    }
    public function testCarDelete(){
        $car = new Car();
        $car->Make='Subaru(TEST)';
        $car->Model ='Legacy(TEST)';
        $car->Year=0000;
        $car->save();
        $this->assertTrue($car->delete());
    }
}
