<?php

namespace App\Filament\Admin\Resources\ProjectSectionResource\Pages;

use App\Filament\Admin\Resources\ProjectSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProjectSection extends EditRecord
{
    protected static string $resource = ProjectSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
