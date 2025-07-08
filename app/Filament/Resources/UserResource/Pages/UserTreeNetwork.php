<?php

namespace App\Filament\Resources\UserResource\Pages;

use Filament\Resources\Pages\Page;
use App\Filament\Resources\UserResource;
use App\Models\User;

class UserTreeNetwork extends Page
{
    protected static string $resource = UserResource::class;
    protected static string $view = 'filament.pages.user-tree-network';

    public $record;
    public $tree;

    public function mount($record): void
    {
        $this->record = User::findOrFail($record);
        $this->tree = $this->record->downlineTree();
    }

    public function getTitle(): string
    {
        return 'Tree Jaringan: ' . $this->record->name;
    }
}
