@extends('layouts.web')

@section('content')
<form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
    
    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
    
    <div class="">
        <div class="">
            <input type="text" name="name" class="" placeholder="Nombre del curso" value="">
            
        </div>

        <div class="">
            <input type="text" name="description" class="" placeholder="Descripción del curso" value="">
        </div>

        <div class="">
            <input type="text" name="category_id" class="" placeholder="Categoria del curso del 1 al 3" value="">
        </div>

        <div class="">
            <input type="file" name="image" class="" autofocus >
        </div>

        <div class="">
            @csrf
            <button type="submit" class="">Enviar</button>
        </div>
    </div>
    
</form>
@endsection