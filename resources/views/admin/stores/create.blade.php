@extends('layouts.app')

@section('content')
    <h1>Criar Loja</h1>
    <form action="{{route('admin.stores.store')}}" method="post">
        @csrf
        
        <div class="form-group">
            <label>Nome Loja</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">

            @error('name')
                <dir class="invalid-feedback">
                    {{$message}}
                </dir>
            @enderror
        </div>
        
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror">
        
            @error('description')
                <dir class="invalid-feedback">
                    {{$message}}
                </dir>
            @enderror
        </div>
        
        <div class="form-group">
            <label>Telefone</label>
            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror">
        
            @error('phone')
                <dir class="invalid-feedback">
                    {{$message}}
                </dir>
            @enderror
        </div>
        
        <div class="form-group">
            <label>Celular / Whatsapp</label>
            <input type="text" name="mobile_phone" class="form-control @error('mobile_phone') is-invalid @enderror">
        
            @error('mobile_phone')
                <dir class="invalid-feedback">
                    {{$message}}
                </dir>
            @enderror
        </div>
        
        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control">
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-lg btn-success">Criar Loja</button>
        </div>
    </form>
@endsection