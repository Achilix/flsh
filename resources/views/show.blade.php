@extends('layouts.app')

@section('content')
@php
    $eventTime = \Carbon\Carbon::parse($event->time);
@endphp

<div class="container mx-auto py-12 px-4">
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        @if($event->image)
        <div class="w-full h-auto">
            <img src="{{ asset('images/' . $event->image) }}" alt="{{ $event->name }}" class="w-full h-auto object-cover">
        </div>
                @else
            <img src="https://via.placeholder.com/800x400?text=No+Image+Available" alt="No image available" class="w-full h-64 object-cover">
        @endif

        <div class="p-6">
            <h1 class="text-2xl font-bold">{{ $event->name }}</h1>
            <p class="text-gray-700 mb-4">
                <span class="font-semibold">Hosted by:</span> {{ $event->host }}
            </p>
            <p class="text-gray-700 mb-4">
                <span class="font-semibold">Duration:</span> {{ $event->duration }}
            </p>
            <p class="text-gray-700 mb-4">
                <span class="font-semibold">Location:</span> {{ $event->location }}
            </p>
            <p class="text-gray-700 mb-4">
                <span class="font-semibold">Description:</span> {{ $event->description }}
            </p>

            <div class="mt-6">
                <a href="{{ route('events.index') }}" class="text-blue-500 hover:underline">← Back to Events</a>
            </div>
        </div>
    </div>
</div>
@endsection
