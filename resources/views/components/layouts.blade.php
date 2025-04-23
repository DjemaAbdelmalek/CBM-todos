<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CBM - Task Manager</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body x-data="{
    darkMode: JSON.parse(localStorage.getItem('darkMode')) || false,
    toggleDarkMode() {
        this.darkMode = !this.darkMode;
        localStorage.setItem('darkMode', JSON.stringify(this.darkMode));
    }
}" class="bg-background text-title font-playwire" x-bind:class="{ 'dark': darkMode }">
    <div class="w-full m-0 p-0">
        <nav class="w-full fixed top-0 left-0 flex flex-row bg-nav justify-between items-center py-2 px-4">
            <x-navigation.navigation />
            <x-navigation.mobile-nav />
        </nav>
        {{ $slot }}
        @livewireScripts
</body>

</html>
