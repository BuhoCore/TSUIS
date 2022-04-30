## creacion projecto
composer create-project laravel/laravel “nombre de BD “ 8.x. (la mia es nocturno)
Creamos base de datos con el mismo nombre del proyecto en Mysql.
Creamos la conexión a nuestra base de datos en .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nocturno
DB_USERNAME=root
DB_PASSWORD=corazondecerdo651


## Creamos migraciones con comandos 

php artisan make:migration categoriasproductos
php artisan make:migration productos

php artisan make:migration consejos

php artisan make:migrationanimales
php artisan make:migrationcartillas

## Creamos las tablas con nuestros atributos(en mi caso son relacionales las primeras tablas)

Con estas variables nos ayuda la conexión de dos tablas 

  $table->engine="InnoDB";

  $table->bigInteger('categoriasproductos_id')->unsigned(); (nuestra llave FK)

 $table->foreign('categoriasproductos_id')->references('id')->on('categoriasproductos')->onDelete("cascade"); (conexión de nuestra tabla con la llave fk y borrado en cascada )



Schema::create('categoriasproductos', function (Blueprint $table) {

        $table->engine="InnoDB";
        $table->bigIncrements('id');
        $table->string('nombre');
        $table->timestamps();
        
    });
    

Schema::create('productos', function (Blueprint $table) {

$table->engine="InnoDB";
$table->bigIncrements('id');

$table->bigInteger('categoriasproductos_id')->unsigned();
$table->string('nombre');
$table->string('descripcion');
$table->string('precio');


$table->timestamps();
$table->foreign('categoriasproductos_id')->references('id')->on('categoriasproductos')->onDelete("cascade");

});

## migracion 
migramos las tablas con el comando:

php artisan migrate

## Creamos Dashboard con comandos:

composer require laravel/ui
php artisan ui vue --auth
composer require laravel-frontend-presets/black-dashboard
php artisan ui black
composer dump-autoload
php artisan migrate --seed

## Generamos crud de nuestras tablas con comandos:

Instalación de paquetes del crud

composer require ibex/crud-generator --dev
php artisan vendor:publish --tag=crud

Creamos Crud por cada tabla
php artisan make:crud categoriasproductos
php artisan make:crud productos

php artisan make:crud consejos

php artisan make:crud animales
php artisan make:crud cartillas

crea los index,edit etc y los modelos y controladores, (laravel cambia los nombres de plural a singular y otras cosas para que tengan cuidado como escriben el nombre de las tablas, yo las puse juntos los nombres y en plural ya que si lo pongo en singular me crea nombres que no existen) en mi caso(productos me lo convirtió a producto).

## Creamos las rutas de nuestros controladores (Route)

Route::group(['middleware' => 'auth'], function () {
    Route::resource('categoriasproductos', 'App\Http\Controllers\CategoriasproductoController', ['except' => ['show']]);
    Route::get('categoriaproducto/{id}/show', ['as' => 'categoriasproductos.show', 'uses' => 'App\Http\Controllers\CategoriasproductoController@show']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::resource('productos', 'App\Http\Controllers\ProductoController', ['except' => ['show']]);
    Route::get('producto/{id}/show', ['as' => 'productos.show', 'uses' => 'App\Http\Controllers\ProductoController@show']);
});



Creamos las rutas de nuestros controladores

## después vamos a nuestra vista que tiene la barra lateral(layaout)

opiamos y pegamos una vista del usuario y la modificamos con nuestras rutas y nombres

     <li @if ($pageSlug == 'CP') class="active " @endif>
                <a href="{{ route('categoriasproductos.index') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Categoria Productos ') }}</p>

                </a>
            </li>

            <li @if ($pageSlug == 'Productos') class="active " @endif>
                <a href="{{ route('productos.index') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Productos ') }}</p>

                </a>
            </li>

Ahora vamos a nuestras vistas de nuestras tablas para que las reconozca nuestra barra lateral

## llamamos a nuestro layaout para visualizar nuestras tablas (con todas es lo mismo)
@extends('layouts.app', ['page' => __('ProductoCreate'), 'pageSlug' => 'productocreate'])
@extends('layouts.app', ['page' => __('ProductoEdit'), 'pageSlug' => 'productoedit'])
@extends('layouts.app', ['page' => __('ProductoIndex'), 'pageSlug' => 'productoindex'])
@extends('layouts.app', ['page' => __('ProductoShow'), 'pageSlug' => 'productoshow'])

y las de categoria productos

@extends('layouts.app', ['page' => __('PostCreate1'), 'pageSlug' => 'postcreate52'])
@extends('layouts.app', ['page' => __('PostCreate3'), 'pageSlug' => 'postcreate4'])
@extends('layouts.app', ['page' => __('PostCreate5'), 'pageSlug' => 'postcreate6'])
@extends('layouts.app', ['page' => __('PostCreate57'), 'pageSlug' => 'postcreate8'])

y ya con eso reconoce nuestros crud relacionales

## Exportamos Documentos de excel con estos comandos:

composer require maatwebsite/excel

Importante ver las versiones de todos los paquetes por la compatibilidad 

PHP: ^7.2\|^8.0

Laravel: ^5.8

PhpSpreadsheet: ^1.21

psr/simple-cache: ^1.0

PHP extension php_zip enabled

PHP extension php_xml enabled

PHP extension php_gd2 enabled

PHP extension php_iconv enabled

PHP extension php_simplexml enabled

PHP extension php_xmlreader enabled

Configuramos estructuras de config/.app

'providers' => [
   
    Maatwebsite\Excel\ExcelServiceProvider::class,
]

'aliases' => [

    'Excel' => Maatwebsite\Excel\Facades\Excel::class,
]

Corremos 

php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider" --tag=config

Creamos clase export de Excel con el mismo nombre de nuestra tabla

php artisan make:export PostExport --model=Post

## Configuramos el controlador que quiero que se exporten las tablas e importamos clases excel

Creamos funcion de export 

    public function export() 
    {
        return Excel::download(new PostExport, 'post.xlsx');
    }


Declaro rutas del export de excel

    Route::group(['middleware' => 'auth'], function () {
Route::get('post/export/', ['as' => 'post.export', 'uses' => 'App\Http\Controllers\PostController@export']);
    });

Y en mi index declaro el botón de export

<a class="btn btn-sm btn-Dark" href="{{ route('post.export',$post->id) }}"><i class="fa fa-fw fa-trash"></i>export</a>

checamos nuestra pagina

## Encriptación de contraseñas
 se encriptan solas al momento de crear el projecto en laravel y se referza con el dashboard y los test que hice 

 ## Pruebas Unitarias con PhpUnit Testing: Getting Started , comandos:

Crear test:

php artisan make:test “nombre del test “UserTest

Correr test:

.vendor/bin/phpunit

seleccionar test:

vendor\bin\phpunit --filter AnimalesTest