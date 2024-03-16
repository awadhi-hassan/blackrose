<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 flex">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg w-full justigfy-end">
                <x-welcome />
                <x-about/>
                <x-services/>
                {{-- <x-capacity/>
                <x-contact/> --}}
            </div>
        </div>
    </div>
</x-app-layout>
