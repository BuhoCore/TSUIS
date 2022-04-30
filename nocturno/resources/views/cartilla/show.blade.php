@extends('layouts.app', ['page' => __('AnimalCreate4'), 'pageSlug' => 'animalcreate4'])
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cartilla</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cartillas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Animales Id:</strong>
                            {{ $cartilla->animales_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cartilla->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Nacimiento:</strong>
                            {{ $cartilla->nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Peso:</strong>
                            {{ $cartilla->peso }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
