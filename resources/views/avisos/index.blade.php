@extends('admin')
@section('title')

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Avisos</div>
                    <div class="card-body">
                        <a href="{{ url('/avisos/create') }}" class="btn btn-success btn-sm" title="Add New aviso">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nuevo aviso
                        </a>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>#</th rowspan=2><th>Foto</th><th>Titulo<th>Contenido</th></th><th>Categoria</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($avisos as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                        <img  src={{ asset("storage/$item->foto")}} width="140" height="100">    
                                        </td><td >{{ $item->titulo }}</td><BR><td>{{ $item->content }}</td><td>{{ $item->category}}</td>
                                        <td>
   
                                            <a href="{{ url('avisos/' . $item->id . '/edit') }}" title="Edit aviso"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/avisos' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete aviso" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            
                            <div class="pagination-wrapper"> {!! $avisos->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endsection
