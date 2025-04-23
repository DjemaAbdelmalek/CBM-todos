<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class ShowTasks extends Component
{
    public function render()
    {
        $tasks = Task::where("user_id", auth()->user()->id)->latest()->paginate(10);
        return view('livewire.show-tasks',[
            'tasks' => $tasks,
        ]);
    }
}
