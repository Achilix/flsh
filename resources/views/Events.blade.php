<x-app-layout>

    @php
        $events = DB::table('events')->get();
    @endphp

    @if($events->isEmpty())
        <p>No events available.</p>
    @else
    <div class="text-3xl font-bold text-center text-gray-800 bg-white py-4 px-6 rounded shadow">
        New Events
    </div>

        <ul>
            @foreach($events as $event)
                @php
                    $eventTime = \Carbon\Carbon::parse($event->time);
                    $currentTime = \Carbon\Carbon::now();
                @endphp

                @if ($currentTime->lessThanOrEqualTo($eventTime))
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900">
                                    <li class="mb-4">
                                        <h3 class="text-lg font-bold">{{ $event->name }}</h3>
                                        <p>Host: {{ $event->Host }}</p>
                                        <p>Duration: {{ $event->duration }}</p>
                                        <p>Location: {{ $event->location }}</p>
                                        <p>Time: {{ $eventTime->format('F j, Y, g:i a') }}</p>
                                        <a href="{{ route('events.show', $event->id) }}">View Details</a>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </ul>
        <div class="text-3xl font-bold text-center text-gray-800 bg-white py-4 px-7 rounded shadow">
            Past Events
        </div>

            <ul>
                @foreach($events as $event)
                    @php
                        $eventTime = \Carbon\Carbon::parse($event->time);
                        $currentTime = \Carbon\Carbon::now();
                    @endphp

                    @if ($currentTime->greaterThanOrEqualTo($eventTime))
                        <div class="py-12">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6 text-gray-900">
                                        <li class="mb-4">
                                            <h3 class="text-lg font-bold">{{ $event->name }}</h3>
                                            <p>Host: {{ $event->Host }}</p>
                                            <p>Duration: {{ $event->duration }}</p>
                                            <p>Location: {{ $event->location }}</p>
                                            <p>Time: {{ $eventTime->format('F j, Y, g:i a') }}</p>
                                            <a href="{{ route('events.show', $event->id) }}">View Details</a>

                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </ul>
    @endif

</x-app-layout>
