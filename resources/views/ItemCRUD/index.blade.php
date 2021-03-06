@extends('layouts.default')
 
@section('content')

    <div class="row"style="margin-top:10px">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Objetos CRUD</h2>
            </div>
            <div class="pull-right" >
                <a class="btn btn-success" href="{{ route('itemCRUD.create') }}">Crear nuevo objeto</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($items as $key => $item)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $item->title }}</td>
        <td>{{ $item->description }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('itemCRUD.show',$item->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('itemCRUD.edit',$item->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['itemCRUD.destroy', $item->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>

    {!! $items->render() !!}

@endsection