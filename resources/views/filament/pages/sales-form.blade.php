<x-filament::page>
    <form wire:submit.prevent="submit" class="space-y-6">
        {{ $this->form }}
        <x-filament::button type="submit" wire:loading.attr="disabled">
            <span wire:loading.remove>Simpan Penjualan</span>
            <span wire:loading>Menyimpan...</span>
        </x-filament::button>
    </form>
</x-filament::page>
