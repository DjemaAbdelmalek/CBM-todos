<div class="w-2/3 min-h-125 flex items-center justify-center" x-show="!registerOpen">
    <form class="space-y-4 flex flex-col items-center" wire:submit="login">
        <div class="flex flex-col space-y-2">
            <label for="email"> Email : </label>
            <input type="email" id="email" name="email" placeholder = "Please enter your email"
                wire:model.defer = "email"
                class="@error('email') border-red-500 @else border-title @enderror  border-2 border-dashed py-2 px-4 rounded-lg" />
            @error('email')
                <p class="text-sm text-red-500"> {{ $message }} </p>
            @enderror
        </div>
        <div class="flex flex-col space-y-2">
            <label for="password"> Enter your password : </label>
            <input type="password" id="password" name="password" placeholder = "Please enter your password"
                wire:model.defer = "password"
                class="@error('password') border-red-500 @else border-title @enderror  border-2 border-dashed py-2 px-4 rounded-lg" />
            @error('password')
                <p class="text-sm text-red-500"> {{ $message }} </p>
            @enderror
        </div>
        <button type="submit" class="py-2 px-4 text-background bg-blue-400 rounded-lg mt-2">Login</button>
    </form>
</div>
