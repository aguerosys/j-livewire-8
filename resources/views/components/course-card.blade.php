<div >   
    
    <form action="{{ route('courses.destroy', $course->id) }}" class="flex flex-row-reverse" method="POST">
        @method('DELETE')
        @csrf
        <input type="submit" value="X" class="bg-gray-300 hover:bg-gray-600 text-white px-1 rounded-sm cursor-pointer" onclick="return confirm('¿Desea eliminar?')">
    </form>
    <div class="bg-white shadow-lg rounded-lg px-4 py-6 " >
        <a href="{{ route('course', $course->slug) }}">
            <img src="{{ asset('storage').'/'. $course->image }}" class="rounded-md mb-2" style="height: 250px" >     
            <h2 class="text-lg text-gray-600 truncate uppercase">{{ $course->name }}</h2>
            <h3 class="text-md text-gray-500">{{ $course->get_excerpt }}</h2>
            {{-- <img src="{{ $course->user->avatar }}" class="rounded-full mx-auto h-16 w-16"> --}}
            <h4 src="" class="text-sm text-gray-500 text-center my-2">Profesor: {{ $course->user->name }}</h4>
        </a>
    </div>
</div>