<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Producto;
use Illuminate\Eloquent\Collection;
use App\Productos;
use App\User;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Auth\AuthenticationException;

class ProductosTest extends TestCase
{
    /**

     * @return void
     */
     /**@test*/
    public function test_productos()
    {

        $response = $this->get(route('productos.index'));
        $response->assertRedirect(route('login'));
        
    }
}
