<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    {{ __("Selamat datang di ToDoList!!") }}
                </div>
                <img  class="p-10 mb-3 h-auto  max-w-lg mx-auto rounded-lg" src="/tugas2Magang/public/images/gif.gif" alt="image description">
            </div>
        </div>
    </div>
</x-app-layout>
