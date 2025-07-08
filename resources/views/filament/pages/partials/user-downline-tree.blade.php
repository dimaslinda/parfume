<li>
    <span>{{ $user->name }} ({{ $user->email }}) - Total Poin: {{ $user->total_points }}</span>
    @if ($user->downline_tree && $user->downline_tree->isNotEmpty())
        <ul>
            @foreach ($user->downline_tree as $downline)
                @include('filament.pages.partials.user-downline-tree', ['user' => $downline])
            @endforeach
        </ul>
    @endif
</li>
