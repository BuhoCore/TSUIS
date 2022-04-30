@extends('layouts.app', ['page' => __('ProductoEdit'), 'pageSlug' => 'productoedit'])

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Categoriasproducto</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('categoriasproductos.update', $categoriasproducto->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('categoriasproducto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
