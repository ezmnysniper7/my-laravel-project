@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <!-- Success Message -->
    @if (session('success'))
    <div class="mb-6 p-4 bg-green-100 border border-green-500 text-green-700 rounded-lg">
        {{ session('success') }}
    </div>
    @endif

    <!-- Grid of Sentences -->
    <div class="grid grid-cols-4 gap-4">
        @for ($row = 1; $row <= 4; $row++)
            @for ($col = 1; $col <= 4; $col++)
                @php
                    // Find the sentence for the current row and column
                    $sentence = $sentences->first(function ($s) use ($row, $col) {
                        return $s->row == $row && $s->column == $col;
                    });
                @endphp

                @if ($sentence)
                <div class="p-4 bg-white border rounded-lg shadow text-center" style="color: {{ $sentence->color }}; {{ $sentence->styling }}">
                    {{ $sentence->text }}
                </div>
                @else
                <div class="p-4 bg-gray-100 border rounded-lg"></div>
                @endif
            @endfor
        @endfor
    </div>

    <!-- Navigation -->
    <div class="mt-6 flex justify-end">
        <a href="{{ route('manage') }}" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
            Manage Sentences
        </a>
    </div>
</div>
@endsection
