<x-layouts>
    <div class="flex flex-row justify-between items-start" x-data="{ details: null }">
        <x-aside.aside />
        <x-tasks.tasks />
        <livewire:show-details />
    </div>
</x-layouts>
