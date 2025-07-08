@extends('filament::page')

@section('content')
    <h2 class="mb-4 text-xl font-bold">Tree Jaringan: {{ $record->name }}</h2>
    <div>
        @if ($tree->isEmpty())
            <p>User ini belum memiliki downline.</p>
        @else
            <ul>
                @foreach ($tree as $downline)
                    @include('filament.pages.partials.user-downline-tree', ['user' => $downline])
                @endforeach
            </ul>
        @endif
    </div>
@endsection
