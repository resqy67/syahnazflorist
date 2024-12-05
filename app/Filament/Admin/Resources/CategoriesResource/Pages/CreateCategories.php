<?php

namespace App\Filament\Admin\Resources\CategoriesResource\Pages;

use App\Filament\Admin\Resources\CategoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;

class CreateCategories extends CreateRecord
{
    protected static string $resource = CategoriesResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['slug'] = Str::slug($data['name']);
        return $data;
    }
}
