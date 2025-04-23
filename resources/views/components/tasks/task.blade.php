<div x-data="{
    done: false,
    taskId: {{ $taskId }}
}"
    class="flex items-center space-x-2 py-2 px-4 rounded-sm border-1 shadow-xs hover:cursor-pointer bg-task"
    :class="done ? 'border-subtitle bg-task/40' : 'border-title/20'"
    @click=" details === taskId  ? details = null : details = taskId ">
    <!-- The circle checkbox -->
    <div @click.stop="done = !done" class="w-5 h-5 rounded-full border-2 cursor-pointer flex items-center justify-center"
        :class="done ? 'bg-green-500 border-green-500' : 'border-title'">
        <svg x-show="done" xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-white" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
        </svg>
    </div>
    <!-- The task text -->
    <p :class="done ? 'line-through text-subtitle' : 'text-title'" class="transition-all duration-300">
        {{ $title }}
    </p>
</div>
