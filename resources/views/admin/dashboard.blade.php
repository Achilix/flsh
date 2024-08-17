<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('events.store') }}" method="POST">
                        @csrf
                        <div>
                            <label for="name">Event Name</label>
                            <input type="text" id="name" name="name" class="mt-1 block w-full" required>
                        </div>
                        <div class="mt-4">
                            <label for="Host">Host</label>
                            <input type="text" id="Host" name="Host" class="mt-1 block w-full" required>
                        </div>
                        <div class="mt-4">
                            <label for="duration">Duration</label>
                            <input type="text" id="duration" name="duration" class="mt-1 block w-full" required>
                        </div>
                        <div class="mt-4">
                            <label for="location">Location</label>
                            <input type="text" id="location" name="location" class="mt-1 block w-full" required>
                        </div>
                        <div class="mt-4">
                            <label for="time">Time</label>
                            <input type="datetime-local" id="time" name="time" class="mt-1 block w-full" required>
                        </div>
                        <div class="mt-4">
                            <button type="submit" style="background-color: black; color: white; padding: 10px; display: block;">
                                Create Event
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
