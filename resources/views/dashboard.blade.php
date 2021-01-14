<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:create-post />
            </div>

            <h3 class="text-xl font-bold mt-4">Postingan</h3>
            <a href="{{route('post.export')}}">Download Post Excel</a>

            <livewire:list-post />
        </div>
    </div>
</x-app-layout>
