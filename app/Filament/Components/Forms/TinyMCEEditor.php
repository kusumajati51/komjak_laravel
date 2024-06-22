<?php

namespace App\Filament\Components\Forms;

use Filament\Forms\Components\Field;
use Filament\Forms\Components\RichEditor;

class TinyMCEEditor extends RichEditor
{
    protected string $view = 'components.tinymce-editor';

    public static function make(string $name): static
    {
        return parent::make($name);
    }
}