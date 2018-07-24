<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;
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
        $car->Make='Honda';
        $car->Model ='Odyssey';
        $car->Year=2015;

        $this->assertTrue($car->save());
    }
    public function testCarDelete(){
        $car = new Car();
        $car->Make='Honda';
        $car->Model ='CR-V';
        $car->Year=0000;
        $car->save();
        $this->assertTrue($car->delete());
    }
    public function testModelString(){
        $car = Car::inRandomOrder()->first();
        $this->assertInternalType('string',$car->Model);
    }
    public function testMakeFHT(){
        $car=Car::inRandomOrder()->first();
        if (strcmp($car->Make,"Ford")|| strcmp($car->Make,"Honda") || strcmp($car->Make,"Toyota")) {
            $this->assertTrue(true);
        }else{
            $this->assertTrue(false);
        }

    }
   // public function testCarCount(){
    // can't figure this test out
    //}
    public function testYearInt(){
      $car = Car::inRandomOrder()->first();
    $this->assertInternalType(isType::TYPE_INT, $car->Year);
    }
    public function testYearUpdate(){
        $car = Car::inRandomOrder()->first();
        $oldYear=$car->Year;
        $car->Year=2000;
        $this->assertNotEmpty($oldYear,$car);

    }

}
