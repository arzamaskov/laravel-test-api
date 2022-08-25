<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\RandomNumber;

class RandomNumbersTest extends TestCase
{
    public function test_generate()
    {
        $response = $this->post('api/generate');

        $response->assertStatus(201);
    }

    public function test_retrieve()
    {
        $number = RandomNumber::factory()->create();
        $response = $this->getJson('api/retrieve/' . $number->id);
        $response->assertOk();
        $response->assertJson([
            'id' => $number->id,
            'number' => $number->number,
        ]);
    }
}
