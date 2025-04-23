<div class="flex flex-col justify-between items-center py-20 min-w-60 h-screen bg-task" x-show="details">
    @foreach ($tasks as $task)
        <p>{{ $task->description }}</p>
    @endforeach
</div>
