<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="POST" action="{{ route('orders.stote') }}">
                        @carf
                        <select name="zones_id">
                        @foreach($zones as @zone)
                        <option value="{{$zone->id}}">{{ zone -> name }}</option>
                        @endforeach
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>