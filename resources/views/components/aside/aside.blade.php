<aside
    class="hidden sm:flex flex-col justify-start items-center min-h-screen bg-background w-1/5 shadow-xs dark:shadow-white/40 space-y-10 pt-20">
    @auth
        <div class="flex flex-row justify-between items-center w-4/5 space-x-2">
            <div class="bg-red-500 w-1/5 aspect-square rounded-full flex items-center justify-center">
                <p class="text-lg uppercase text-background">{{ substr(Auth::user()->name, 0, 1) }}</p>
            </div>
            <div class="w-4/5">
                <p class="text-lg">{{ Auth::user()->name }}</p>
                <p class="text-xs -mt-1 block w-fit">{{ \Illuminate\Support\Str::limit(Auth::user()->email, 20, '...') }}</p>
            </div>
        </div>
    @endauth
    <input type="text" placeholder="Search" class="w-9/10 h-10 px-4 border-1  border-dashed rounded-md self-center" />
    <ul
        class="flex flex-col justify-center space-y-10 items-start h-full px-8 self-start border-r-2 w-full min-h-120 border-task">
        <li>All</li>
        <li>Work</li>
        <li>Important</li>
        <li>Familly</li>
        <li>Week-End</li>
    </ul>
    @auth
        <div class="self-start px-8">
            <livewire:logout />
        </div>
    @endauth
</aside>
