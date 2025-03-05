<x-filament-panels::page>
    {{-- <div class="grid grid-cols-1 gap-6">
        <div class="p-6 bg-white rounded-lg shadow-md">
            <h2 class="mb-4 text-2xl font-semibold">Detail Penjualan {{ $user->name }}</h2>
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-sm leading-4 text-left text-gray-600 uppercase border-b-2 border-gray-300">ID Penjualan</th>
                        <th class="px-6 py-3 text-sm leading-4 text-left text-gray-600 uppercase border-b-2 border-gray-300">Jumlah</th>
                        <th class="px-6 py-3 text-sm leading-4 text-left text-gray-600 uppercase border-b-2 border-gray-300">Poin Diperoleh</th>
                        <th class="px-6 py-3 text-sm leading-4 text-left text-gray-600 uppercase border-b-2 border-gray-300">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sales as $sale)
                        <tr>
                            <td class="px-6 py-4 border-b border-gray-300">{{ $sale->id }}</td>
                            <td class="px-6 py-4 border-b border-gray-300">{{ $sale->quantity }}</td>
                            <td class="px-6 py-4 border-b border-gray-300">{{ $sale->points_earned }}</td>
                            <td class="px-6 py-4 border-b border-gray-300">{{ $sale->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> --}}

    {{ $this->table }}
</x-filament-panels::page>
