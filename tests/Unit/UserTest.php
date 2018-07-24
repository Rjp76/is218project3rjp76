<?php

namespace Tests\Unit;
use App\User;


use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserInsert()
    {
        $user = new User();
        $user->name='Jane Doe';
        $user->email = str_random(10).'@gmail.com';
        $user-> password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user -> remember_token = str_random(10);
        $this->assertTrue($user->save());

       // $this->assertTrue(true);
       // $user = User::inRandomOrder()->first();
        //dump($user);
        //$this->assertInternalType('int',$user->id);
        //$this->assertInstanceOf('User',$user);

    }
    public function testUserDelete(){
        $user = new User();
        $user->name='Jane Doe';
        $user->email = str_random(10).'@gmail.com';
        $user-> password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user -> remember_token = str_random(10);
        $user->save();
        $this->assertTrue($user->delete());
    }
   /* public function testUserSeederNum(){
       $users= $this->seed('UsersTableSeeder');
        this->assert
    } */
   public function testNameChange(){
       $user = User::inRandomOrder()->first();
       $oldName=$user->name;
       $user->name='Steve Smith';
       $this->assertNotSame($oldName,$user->name);

   }
   /* public function testUserSeeder(){
   I'm unable to work out how to do this one
   } */

}
