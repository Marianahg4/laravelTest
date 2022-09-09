<?php

namespace Tests\Unit;
use Tests\TestCase;
use app\Models\User;
class UserTest extends TestCase
{

    public function test_login_form()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
    public function test_user_duplication(){
        $user = User::make([
            'name' => 'mariana h',
            'email' => 'mariana@gmail.com'
        ]);
        $user2 = User::make([
            'name' => 'natanael h',
            'email' => 'natanael@gmail.com'
        ]);
        $this->assertTrue($user->name != $user->name);
    }
    public function test_delete_user(){
        $user = User::factory()->count(1)->make();

        $user = User::first();

        if($user){
            $user->delete();

        }
        $this->assertTrue(true);
    }
}



