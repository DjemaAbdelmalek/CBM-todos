<?php

namespace App\Livewire;

use App\Models\SubTask;
use App\Models\Task;
use Livewire\Component;

class ShowDetails extends Component
{
    public function render()
    {
        $tasks = Task::where("user_id", auth()->user()->id)->latest()->paginate(10);
        return view('livewire.show-details',[
            'tasks' => $tasks,
        ]);
    }
}
