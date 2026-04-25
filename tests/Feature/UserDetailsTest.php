<?php

namespace Tests\Feature;

use Tests\TestCase;

class UserDetailsTest extends TestCase
{
    public function test_users_api_returns_users_list(): void
    {
        $response = $this->getJson('/api/users');

        $response
            ->assertOk()
            ->assertJsonStructure([
                'users' => [
                    '*' => ['id', 'name', 'email', 'role'],
                ],
            ]);
    }
}
