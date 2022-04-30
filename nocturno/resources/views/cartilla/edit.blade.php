@extends('layouts.app', ['page' => __('AnimalCreate23'), 'pageSlug' => 'animalcreate23'])

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Cartilla</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cartillas.update', $cartilla->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('cartilla.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
