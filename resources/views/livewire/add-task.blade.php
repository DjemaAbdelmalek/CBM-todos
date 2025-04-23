<div class="mt-auto w-4/5 " x-data="{ focused: false }">
    <input @focus="focused = true" @blur="focused = false" wire:model.defer="description" wire:keydown.enter="addTask"
        class="py-2 pl-10 pr-4 rounded-sm border-title border-2 border-dashed focus:outline-none w-full" type="text"
        placeholder="Add a task" />
</div>
