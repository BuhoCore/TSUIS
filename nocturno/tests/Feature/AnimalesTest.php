<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AnimalesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_animales()
    {
        $response = $this->get(route('animales.create'));
        $response->assertRedirect(route('login'));
    }
}
