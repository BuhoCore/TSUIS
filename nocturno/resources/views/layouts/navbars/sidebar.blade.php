<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('BD') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('Black Dashboard') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Laravel Examples') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('User Profile') }}</p>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </li>
        

            <li @if ($pageSlug == 'Pots') class="active " @endif>
                <a href="{{ route('posts.index') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Post nuevo') }}</p>
                </a>
            </li>

            <li @if ($pageSlug == 'Categoria') class="active " @endif>
                <a href="{{ route('categorias.index') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Categoria de Mascotas') }}</p>

                </a>
            </li>

            
            <li @if ($pageSlug == 'Consejo Mascota') class="active " @endif>
                <a href="{{ route('consejos.index') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Consejo Mascota') }}</p>

                </a>
            </li>

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

            <li @if ($pageSlug == 'animales') class="active " @endif>
                <a href="{{ route('animales.index') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Animales ') }}</p>

                </a>
            </li>
            
            <li @if ($pageSlug == 'cartillas') class="active " @endif>
                <a href="{{ route('cartillas.index') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Cartillas ') }}</p>

                </a>
            </li>
            
        
       
            <li @if ($pageSlug == 'tables') class="active " @endif>
                <a href="{{ route('pages.tables') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
          
      
         
        </ul>
    </div>
</div>
