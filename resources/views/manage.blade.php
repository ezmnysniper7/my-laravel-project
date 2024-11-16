@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <!-- Header with Title and Back Button -->
    <div class="flex justify-between items-center mt-6 mb-6">
        <h1 class="text-2xl font-bold">Manage Sentences</h1>
        <a href="{{ route('home') }}" class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">Back</a>
    </div>

    <!-- Display Validation Errors -->
    @if ($errors->any())
        <div class="p-4 mb-4 bg-red-100 border border-red-500 rounded-lg">
            @foreach ($errors->all() as $error)
                <p class="text-red-700">{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <!-- Form to Update Sentences -->
    <form action="{{ route('update') }}" method="POST" class="space-y-6">
        @csrf
        @foreach ($sentences as $sentence)
            <div class="p-6 border border-gray-300 rounded-lg shadow">
                <h2 class="text-lg font-semibold mb-4">{{ $sentence->text }}</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Color Picker -->
                    <div>
                        <label for="color-{{ $sentence->id }}" class="block text-sm font-medium text-gray-700">Color</label>
                        <input type="color" id="color-{{ $sentence->id }}" name="sentences[{{ $sentence->id }}][color]" value="{{ $sentence->color }}" class="mt-1 p-2 border rounded-lg w-full">
                    </div>
                    <!-- Styling Selector -->
                    <div>
                        <label for="styling-{{ $sentence->id }}" class="block text-sm font-medium text-gray-700">Styling</label>
                        <select id="styling-{{ $sentence->id }}" name="sentences[{{ $sentence->id }}][styling]" class="mt-1 p-2 border rounded-lg w-full">
                            <option value="">None</option>
                            <option value="font-weight: bold;" {{ $sentence->styling == 'font-weight: bold;' ? 'selected' : '' }}>Bold</option>
                            <option value="font-style: italic;" {{ $sentence->styling == 'font-style: italic;' ? 'selected' : '' }}>Italic</option>
                            <option value="text-decoration: underline;" {{ $sentence->styling == 'text-decoration: underline;' ? 'selected' : '' }}>Underline</option>
                            <option value="text-transform: uppercase;" {{ $sentence->styling == 'text-transform: uppercase;' ? 'selected' : '' }}>Uppercase</option>
                        </select>
                    </div>
                    <!-- Row Input -->
                    <div>
                        <label for="row-{{ $sentence->id }}" class="block text-sm font-medium text-gray-700">Row</label>
                        <input type="number" id="row-{{ $sentence->id }}" name="sentences[{{ $sentence->id }}][row]" value="{{ $sentence->row }}" min="1" max="4" class="mt-1 p-2 border rounded-lg w-full">
                    </div>
                    <!-- Column Input -->
                    <div>
                        <label for="column-{{ $sentence->id }}" class="block text-sm font-medium text-gray-700">Column</label>
                        <input type="number" id="column-{{ $sentence->id }}" name="sentences[{{ $sentence->id }}][column]" value="{{ $sentence->column }}" min="1" max="4" class="mt-1 p-2 border rounded-lg w-full">
                    </div>
                </div>
            </div>
        @endforeach
        <!-- Update Button -->
        <div class="flex justify-end mt-6">
            <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Update</button>
        </div>
    </form>
</div>
@endsection
