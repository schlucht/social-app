<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>   
    <div class="flex">
    <nav class="bg-white w-30vw m-8 sm:px-6 lg:px-8">
        <div class="mt-5">
            <h3 class="text-xl font-semibold uppercase">
                {{ __("User Profil") }}
            </h3>
            <ul>
                <li>
                    <a href="{{ route('home')}}">
                        {{ __("Startseite")}}
                    </a>
                </li>
            </ul>
        </div>
    </nav>   
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    </div>
    
</x-app-layout>
