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
     * Error: Illuminate\Encryption\MissingAppKeyException: No application encryption key has been specified.
     * Was solved using config:cache artisan command
     *
     * @return void
     */
    public function testHomeResponseStatus()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /**
     * Simple test to authentication
     * 
     * @return void
     */
    public function testAuthentication()
    {
        $user = User::factory()
            ->create();

        $response = $this->actingAs($user)
            ->get('/home');

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
