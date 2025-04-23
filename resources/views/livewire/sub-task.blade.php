<div>
    @foreach ($subTasks as $subTask)
        <div x-data="{
            done: false,
        }" class="flex items-center space-x-2 shadow-xs"
            :class="done ? 'border-subtitle bg-task/40' : 'border-title/20'">
            <!-- The circle checkbox -->
            <div @click="done = !done"
                class="w-3 h-3 rounded-full border-2 cursor-pointer flex items-center justify-center"
                :class="done ? 'bg-green-500 border-green-500' : 'border-title'">
                <svg x-show="done" xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-white" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <!-- The task text -->
            <p :class="done ? 'line-through text-subtitle' : 'text-title'" class="transition-all duration-300 text-sm">
                {{ $subTask->description }}
            </p>
        </div>
    @endforeach
    <input type="text" wire:model.defer="description" wire:keydown.enter="addSubTask({{ $taskId }})"
        class="w-full bg-task border-dashed border-1 border-task px-2 rounded-lg shadow-xs" />
</div>
