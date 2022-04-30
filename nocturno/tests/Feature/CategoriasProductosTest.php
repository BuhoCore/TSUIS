<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;



use App\Models\CategoriasProducto;
use Illuminate\Eloquent\Collection;
use App\CategoriasProductos;
use App\User;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Auth\AuthenticationException;


class CategoriasProductosTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_categoria_productos()
    {
        $response = $this->get(route('categoriasproductos.create'));
        $response->assertRedirect(route('login'));
    }
}
