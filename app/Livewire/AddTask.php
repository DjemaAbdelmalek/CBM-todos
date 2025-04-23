<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class AddTask extends Component
{

    public $description;


    public function addTask(){
        $validated = $this->validate([
            "description"=> "string|required|min:2|max:255",
        ]);

        Task::create([
            "description"=> $validated["description"],
            "user_id" => auth()->user()->id,
        ]);
        return redirect("/");
    }
    public function render()
    {
        return view('livewire.add-task');
    }
}
