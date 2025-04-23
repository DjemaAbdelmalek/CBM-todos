<div class="flex flex-col justify-start items-start space-y-20 py-20 px-4 min-w-60 h-screen bg-task" x-show="details">
    @foreach ($tasks as $task)
        <p x-show="details === {{ $task->id }}">{{ $task->description }}</p>
        <div x-show="details === {{ $task->id }}" class="-mt-20"><livewire:sub-task :taskId="$task->id" /></div>
        <p x-show="details === {{ $task->id }}">{{ $task->created_at->diffForHumans() }}</p>
    @endforeach
</div>
