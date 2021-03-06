<x-app-layout>
    <x-slot name="header">
        <div class="container d-flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight mr-lg-4">
                {{ __('Home') }}
            </h2>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight mr-lg-4">
                {{ __('Dashboard') }}
            </h2>                  
            <h2 class="font-semibold text-xl text-gray-800 leading-tight mr-lg-4">
                {{ __('Create product') }}
            </h2>
        </div>        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               @yield('containerDinamic')
            </div>
        </div>
    </div>
</x-app-layout>
