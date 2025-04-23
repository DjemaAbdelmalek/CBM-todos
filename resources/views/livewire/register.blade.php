<x-layouts>
    <div class="flex justify-center items-center min-h-screen w-full" x-data="{ registerOpen: true }">
        <div class="sm:w-3/5 w-4/5 min-h-140 shadow-2xl rounded-lg dark:shadow-gray/90 ">
            <div class="flex flex-row justify-between
            items-center">
                <button @click=" registerOpen = true"
                    class=" w-1/2 min-h-14 hover:cursor-pointer transition-all duration-300 shadow-lg rounded-tl-lg"
                    :class="registerOpen ? 'bg-nav' : 'bg-task'">
                    Register
                </button>
                <button @click="registerOpen = false"
                    class="w-1/2 min-h-14 hover:cursor-pointer transition-all duration-300 shadow-lg rounded-tr-lg"
                    :class="registerOpen ? 'bg-task' : 'bg-nav'">
                    Login
                </button>
            </div>
            <div class="w-full h-full  flex items-center justify-center">
                <div class="w-2/3 min-h-125 flex items-center justify-center" x-show="registerOpen">
                    <form class="space-y-4 flex flex-col items-center" wire:submit.prevent="register">
                        @csrf
                        <div class="flex flex-col space-y-2">
                            <label for="name"> Name : </label>
                            <input type="text" id="name" name="name" placeholder="Please enter your name"
                                wire:model.defer="name"
                                class="@error('name') border-red-500 @else border-title @enderror  border-2 border-dashed py-2 px-4 rounded-lg" />
                            @error('name')
                                <p class="text-sm text-red-500"> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="email"> Email : </label>
                            <input type="email" id="email" name="email" placeholder = "Please enter your email"
                                wire:model.defer="email"
                                class="@error('email') border-red-500 @else border-title @enderror  border-2 border-dashed py-2 px-4 rounded-lg" />
                            @error('email')
                                <p class="text-sm text-red-500"> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="password"> Enter your password : </label>
                            <input type="password" id="password" name="password"
                                placeholder = "Please enter your password" wire:model.defer="password"
                                class="@error('password') border-red-500 @else border-title @enderror  border-2 border-dashed py-2 px-4 rounded-lg" />
                            @error('password')
                                <p class="text-sm text-red-500"> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="password_confirmation"> Confirm your password : </label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                placeholder = "Please confirm your password" wire:model.defer="password_confirmation"
                                class="@error('password_confirmation') border-red-500 @else border-title @enderror  border-2 border-dashed py-2 px-4 rounded-lg" />
                            @error('password_confirmation')
                                <p class="text-sm text-red-500"> {{ $message }} </p>
                            @enderror
                        </div>
                        <button type="submit"
                            class="py-2 px-4 text-background bg-blue-400 rounded-lg mt-2">Register</button>
                    </form>
                </div>

                <livewire:login>
            </div>
        </div>
    </div>
</x-layouts>
