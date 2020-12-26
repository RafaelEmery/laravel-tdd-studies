<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Use RefreshDatabase trait instead of DatabaseMigrations trait
     */
    use RefreshDatabase;

    /**
     * A basic test example.
     * 
     * Illuminate\Encryption\MissingAppKeyException: No application encryption key has been specified.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * A basic test to verify a user on 'users' table.
     * 
     * @return void
     */
    public function testDatabaseUsers()
    {   
        User::factory()->create([
            'email' => 'example@test.com'
        ]);

        $this->assertDatabaseHas('users', [
            'email' => 'example@test.com'
        ]);
    }
}
