<?php

namespace App\Livewire;

use App\Models\Task;
use App\Models\SubTask as SubTaskModel;
use Livewire\Component;

class SubTask extends Component
{
    public $description;
    public $taskId;
    public function mount($taskId)
    {
        $this->taskId = $taskId;
    }
    public function addSubTask()
    {
        $validated = $this->validate([
            "description"=> "required|min:2|string|max:20",
        ]);

        $task = SubTaskModel::create([
            "description"=> $validated["description"],
            "task_id" => $this->taskId,
        ]);

        $this->description = "";



    }
    public function render()
    {
        $tasks = Task::where("user_id", auth()->user()->id)->latest()->paginate(10);
        $Subtasks = SubTaskModel::where("task_id",$this->taskId)->latest()->paginate(10);
        return view('livewire.sub-task',[
            'tasks' => $tasks,
            'subTasks' => $Subtasks,
        ]);
    }
}
