@extends('layouts.app', ['page' => __('ConsejoShow'), 'pageSlug' => 'consejoshow'])

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Consejo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('consejos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Animal:</strong>
                            {{ $consejo->animal }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $consejo->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Consejo:</strong>
                            {{ $consejo->consejo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
