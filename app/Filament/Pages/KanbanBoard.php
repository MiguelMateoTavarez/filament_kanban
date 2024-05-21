<?php

namespace App\Filament\Pages;

use App\Models\Column;
use Filament\Pages\Page;

class KanbanBoard extends Page
{
    public $columns;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static string $view = 'filament.pages.kanban-board';
}
