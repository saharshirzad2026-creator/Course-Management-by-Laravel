<?php

namespace App\Livewire\Student;

use App\Models\Student;
use Filament\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Notifications\Notification;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class ListStudents extends Component implements HasActions, HasSchemas, HasTable
{
    use InteractsWithActions;
    use InteractsWithTable;
    use InteractsWithSchemas;

    public function table(Table $table): Table
    {
        return $table
            ->query(fn (): Builder => Student::query())
            ->columns([
                //
                TextColumn::make('user.name')->label('Name')->searchable(),
                TextColumn::make('user.email')->label('Email'),
                TextColumn::make("last_name"),
                TextColumn::make('payment.sinf.title')->listWithLineBreaks()->badge(),
                TextColumn::make("tazkira_no")->toggleable(isToggledHiddenByDefault:true),
                TextColumn::make("phone_number")->toggleable(isToggledHiddenByDefault:false),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                //
            ])
            ->recordActions([
                //
                Action::make('delete')
    ->requiresConfirmation()
    ->action(fn (Student $record) => $record->delete($record->id))->successNotification(
        Notification::make()->title('deleted successfully'),
    ),

            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    //
                ]),
            ]);
    }

    public function render(): View
    {
        return view('livewire.student.list-students');
    }
}
