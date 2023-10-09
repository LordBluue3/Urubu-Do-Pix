<?php

namespace Tests\Feature;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    /**
     * Test if users were created.
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }
    public function testCreateUsers()
    {
        $this->assertEquals(7, User::count());
    }

    /**
     * Test if users have money equal to zero.
     */
    public function testUsersHaveMoneyZero()
    {

        $users = User::all();
        foreach ($users as $user) {
            $this->assertEquals(0, $user->money);
        }
    }
    public function testMoneyUpdate()
    {

        $user = User::factory()->create();
        $this->actingAs($user);


        parent::setUp();


        Admin::factory()->create(['id' => 1]);
        $admin = Admin::find(1);


        $moneyToAdd = 100;


        $response = $this->put(route('dashboard.user.deposit.update'), [
            'money' => $moneyToAdd,
        ]);


        $response->assertRedirect(route('dashboard.user'));


        $user->refresh();
        $admin->refresh();


        $this->assertEquals($user->money, $moneyToAdd);
        $this->assertEquals($admin->money, $moneyToAdd);
    }

    public function testUpdateInformation()
    {

        $this->seed();
        $user = User::first();
        $this->actingAs($user);


        $newName = 'Novo Nome';
        $newPhone = '123-456-7890';
        $newEmail = 'novonome@example.com';


        $response = $this->put(route('dashboard.user.information.update', ['user' => $user->id]), [
            'name' => $newName,
            'phone' => $newPhone,
            'email' => $newEmail,
        ]);


        $response->assertRedirect(route('dashboard.user.information'));


        $user->refresh();


        $this->assertEquals($newName, $user->name);
        $this->assertEquals($newPhone, $user->phone);
        $this->assertEquals($newEmail, $user->email);
    }

    public function testStoreUser()
    {

        $userData = [
            'name' => 'Novo Usuário',
            'email' => 'novousuario@example.com',
            'phone' => '(11) 99999-9999',
            'password' => 'password123',
        ];


        $response = $this->post(route('register.store'), $userData);


        $response->assertRedirect(route('home'));


        $this->assertDatabaseHas('users', [
            'name' => 'Novo Usuário',
            'email' => 'novousuario@example.com',
        ]);
    }
}