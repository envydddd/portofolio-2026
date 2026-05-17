<?php

namespace App\Filament\Admin\Resources\ProjectSectionResource\Pages;

use App\Filament\Admin\Resources\ProjectSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProjectSections extends ListRecords
{
    protected static string $resource = ProjectSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
