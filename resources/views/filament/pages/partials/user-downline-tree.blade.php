<li x-data="{ open: {{ $user->downline_tree && $user->downline_tree->isNotEmpty() ? 'false' : 'true' }} }" style="margin-left: 16px; position: relative;">
    <span class="flex gap-1 items-center">
        @if ($user->downline_tree && $user->downline_tree->isNotEmpty())
            <button @click="open = !open" type="button"
                class="flex justify-center items-center mr-1 w-6 h-6 bg-white rounded-full border border-gray-300 transition-colors duration-200 dark:border-gray-600 dark:bg-gray-800 hover:bg-blue-100 dark:hover:bg-blue-900 focus:outline-none">
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600 dark:text-blue-400"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600 dark:text-blue-400"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                </svg>
            </button>
        @endif
        <span style="font-weight:bold;">&#128100; {{ $user->name }}</span>
        <span style="color: #888;">({{ $user->email }})</span>
        <span style="color: #666;">- Total Poin: {{ $user->total_points }}</span>
        <span style="color: #007bff;">| Tier: {{ $user->getTier() }}</span>
        <span style="color: #28a745;">| Downline: {{ $user->downlines->count() }}</span>
    </span>
    @if ($user->downline_tree && $user->downline_tree->isNotEmpty())
        <ul x-show="open" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-96"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 max-h-96"
            x-transition:leave-end="opacity-0 max-h-0"
            style="border-left: 1px solid #ccc; margin-left: 12px; padding-left: 16px; overflow: hidden;">
            @foreach ($user->downline_tree as $downline)
                @include('filament.pages.partials.user-downline-tree', ['user' => $downline])
            @endforeach
        </ul>
    @endif
</li>
