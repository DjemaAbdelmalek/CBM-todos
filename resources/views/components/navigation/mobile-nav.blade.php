<div x-data="{ open: false }" class="sm:hidden">
    {{-- lets toggle the button --}}
    <button @click="open = !open" class="">
        <svg x-show="!open" class="w-6 h-6" fill="none" :stroke="darkMode ? 'white' : 'currentColor'" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
            </path>
        </svg>
        <svg x-show="open" x-cloak class="w-6 h-6" fill="none" :stroke="darkMode ? 'white' : 'currentColor'"
            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
    {{-- let's toggle the menu --}}
    <div x-show="open" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="transform -translate-x-full" x-transition:enter-end="transform translate-x-0"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="transform translate-x-0"
        x-transition:leave-end="transform -translate-x-full"
        class="fixed top-0 left-0 w-72 h-full bg-background shadow-lg dark:shadow-lg">
        <!-- Your navigation links -->
        <ul class="flex flex-col justify-around items-start h-full px-6 py-2 space-y-40">
            <div>
                <li><a href="/" class="font-bold text-xl">CBM TODOS</a></li>
            </div>
            <div class="mt-auto space-y-10 border-t-1 border-title/20 py-10 w-full">
                <div>
                    <a href="#" @click.prevent="toggleDarkMode()" x-text=" darkMode ? '🔆' : '🌑'"
                        class="text-2xl"></a>
                </div>
                @auth
                    <div class="flex flex-col space-y-10">

                        <div class="flex flex-row justify-between items-center w-4/5 space-x-2">
                            <div class="bg-red-500 w-1/5 aspect-square rounded-full flex items-center justify-center">
                                <p class="text-lg uppercase text-background">{{ substr(Auth::user()->name, 0, 1) }}</p>
                            </div>
                            <div class="w-4/5">
                                <p class="text-lg">{{ Auth::user()->name }}</p>
                                <p class="text-xs -mt-1">{{ Auth::user()->email }}</p>
                            </div>
                        </div>

                        <livewire:logout />
                    </div>
                @endauth


            </div>
        </ul>
    </div>

</div>
{{-- End of mobile menu --}}
