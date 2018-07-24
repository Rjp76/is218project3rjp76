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
        $car->Make='Subaru(TEST)';
        $car->Model ='Legacy(TEST)';
        $car->Year=2015;

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
    public function testModelString(){
        $car = Car::inRandomOrder()->first();
        $this->assertInternalType('string',$car->Model);
    }
 //   public function testCarCount(){
    //    $cars=Car::All();
  //      $recordCount=$cars->count();
 //       $this->assertInternalType(isType::TYPE_INT,$recordCount);
  //  }
    //public function testYearInt(){
    //  $car = Car::inRandomOrder()->first();
    // dd($car);
    //$this->assertInternalType('string',$car->Year);
    //}
}
