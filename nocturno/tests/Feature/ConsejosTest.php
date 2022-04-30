<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConsejosTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_consejos()
    {
        $response = $this->get(route('consejos.create'));
        $response->assertRedirect(route('login'));
    }
}
