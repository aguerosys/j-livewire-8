<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Course;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class CourseList extends Component
{
    
    public function render()
    {
        
        return view('livewire.course-list', [
            'courses' => Course::latest()->with('user')->take(6)->get()
            
        ]);
    }
}
