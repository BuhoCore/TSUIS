@extends('layouts.app', ['page' => __('ConsejoIndex'), 'pageSlug' => ' consejosindex'])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Consejo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('consejos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Animal</th>
										<th>Titulo</th>
										<th>Consejo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consejos as $consejo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $consejo->animal }}</td>
											<td>{{ $consejo->titulo }}</td>
											<td>{{ $consejo->consejo }}</td>

                                            <td>
                                                <form action="{{ route('consejos.destroy',$consejo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('consejos.show',$consejo->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('consejos.edit',$consejo->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    <a class="btn btn-sm btn-Dark" href="{{ route('consejos.export',$consejo->id) }}"><i class="fa fa-fw fa-trash"></i>export</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $consejos->links() !!}
            </div>
        </div>
    </div>
@endsection
