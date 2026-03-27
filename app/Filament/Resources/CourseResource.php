<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Models\Course;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    // --- FORM (Create/Edit) ---
    public static function form(Form $form): Form
    {

        return $form->schema([
            TextInput::make('name')->required(),

            Select::make('teacher_id')
                ->relationship('teacher', 'name')
                ->required(),

            Textarea::make('info')->columnSpanFull(),

            TextInput::make('price')->numeric()->required(),

            FileUpload::make('image')
                ->image()
                ->directory('courses')
                ->nullable(),

            // Many-to-many: categories
            Select::make('categories')
                ->relationship('categories', 'category')
                ->multiple()
                ->preload(),

            // One-to-many: skills
            Repeater::make('skills')
                ->relationship('skills')
                ->schema([
                    TextInput::make('skill') // <-- совпадает с полем в БД
                    ->required(),
                ])
                ->columnSpanFull()
        ]);
    }

    // --- TABLE (List) ---
    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('id')->sortable(),
            TextColumn::make('name')->searchable(),
            TextColumn::make('teacher.name')->label('Teacher'),
            TextColumn::make('price')->money('cmn'),
        ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // можно добавить Relation Managers
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}
