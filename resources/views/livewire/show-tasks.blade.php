<div class="space-y-4 w-4/5">
    @if ($tasks->isNotEmpty())
        @foreach ($tasks as $task)
            <x-tasks.task :taskId="$task->id">
                <x-slot:title>{{ $task->description }}</x-slot:title>
            </x-tasks.task>
        @endforeach
    @else
        <p> There is no todos , Create your First One.</p>
    @endif
</div>
