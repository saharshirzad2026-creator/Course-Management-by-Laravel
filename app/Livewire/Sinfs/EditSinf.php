<?php

namespace App\Livewire\Sinfs;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Schemas\Schema;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use App\Models\Sinf;

class EditSinf extends Component implements HasActions, HasSchemas
{
    use InteractsWithActions;
    use InteractsWithSchemas;

    public Sinf $record;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill($this->record->attributesToArray());
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Edit classes')
                ->description('Now you can edit the data of specific Classes')
                ->columns(2)
                ->schema([
                    TextInput::make('title')->required()->label('Course Name'),
                    DatePicker::make('start_date')->format('Y-m-d')->timeZone('Asia/Kabul'),
                    DatePicker::make('end_date')->format('Y-m-d')->timeZone('Asia/Kabul'),
                    TextArea::make('description'),
                ])
            ])
            ->statePath('data')
            ->model($this->record);
    }

    public function save(): void
    {
        $data = $this->form->getState();

        $this->record->update($data);
    }

    public function render(): View
    {
        return view('livewire.sinfs.edit-sinf');
    }
}
