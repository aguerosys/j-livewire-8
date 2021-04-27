<?php

namespace App\Http\Livewire;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use App\Models\Course;

use Livewire\Component;

class PostUsers extends Component
{
    public function render()
    {
        $id = Auth::id();
        
        return view('livewire.post-users',[
            'courses' => Course::where('user_id', $id )->with('user')->take(10)->get()
        ]);
    }
}
