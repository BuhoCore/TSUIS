<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class cartillasTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_cartillas()
    {
        $response = $this->get(route('cartillas.create'));
        $response->assertRedirect(route('login'));
    }
}
