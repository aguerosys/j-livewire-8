@extends('layouts.web')

@section('content')
<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    
    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
    
    <div class="">
        <div class="">
            <select name="course_id" id="">
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->name }}</option>    
                @endforeach 
            </select>   
        </div>

        <div class="">
            <input type="text" name="name" class="" placeholder="Contenido" value="">
        </div>

        <div class="">
            <input type="text" name="free" class="" placeholder="El contenido es gratis? 0 no o 1 si" value="">
        </div>

        

        <div class="">
            @csrf
            <button type="submit" class="">Enviar</button>
        </div>
    </div>
    
</form>
@endsection