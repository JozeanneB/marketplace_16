@extends('layouts.app')

@section('content')
    <h1>Atualizar Categoria</h1>
    <form action="{{route('admin.categories.update', ['category' => $category->id])}}" method="post">
        @csrf
        @method("PUT")

        <div class="form-group">
            <label>Nome Categoria</label>
            <input type="text" name="name" class="form-control" value="{{$category->name}}">
        </div>
        
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description" class="form-control" value="{{$category->description}}">
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-lg btn-success">Atualizar Categoria</button>
        </div>
    </form>
@endsection