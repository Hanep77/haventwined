<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContentResource\Pages;
use App\Filament\Resources\ContentResource\RelationManagers;
use App\Models\Content;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContentResource extends Resource
{
    protected static ?string $model = Content::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Banner')
                    ->schema([
                        Forms\Components\TextInput::make('text_banner')
                            ->label('Teks Banner')
                            ->required(),
                        Repeater::make("images")
                            ->columnSpan(2)
                            ->relationship("heroImages")
                            ->schema([
                                FileUpload::make("image")
                                    ->image()
                                    ->directory("room-images")
                                    ->required()
                            ]),
                    ]),


                Forms\Components\Section::make('About Us')
                    ->schema([
                        Forms\Components\RichEditor::make('about')
                            ->label('Deskripsi'),
                    ]),

                Forms\Components\Section::make('Why Choose Us')
                    ->schema([
                        Forms\Components\Repeater::make('why_choose_us')
                            ->label('Keunggulan')
                            ->relationship("whyChooseUs")
                            ->schema([
                                Forms\Components\TextInput::make('title')->label('Judul')->required(),
                                Forms\Components\Textarea::make('description')->label('Deskripsi')->required(),
                            ])
                            ->addable()
                            ->deletable()
                            ->reorderable(),
                    ]),

                Forms\Components\Section::make('FAQ')
                    ->schema([
                        Forms\Components\Repeater::make('faq')
                            ->label('Daftar FAQ')
                            ->relationship("faqs")
                            ->schema([
                                Forms\Components\TextInput::make('question')->label('Pertanyaan')->required(),
                                Forms\Components\Textarea::make('answer')->label('Jawaban')->required(),
                            ])
                            ->addable()
                            ->deletable()
                            ->reorderable(),
                    ]),

                Forms\Components\Section::make('Contact')
                    ->schema([
                        Forms\Components\Repeater::make('contacts')
                            ->label('Contact')
                            ->relationship("contacts")
                            ->schema([
                                Forms\Components\TextInput::make('platform')->label('Platform')->required(),
                                Forms\Components\TextInput::make('text')->label('text')->required(),
                                Forms\Components\Textarea::make('link')->label('link'),
                            ])
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("text_banner"),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContents::route('/'),
            'create' => Pages\CreateContent::route('/create'),
            'edit' => Pages\EditContent::route('/{record}/edit'),
        ];
    }
}
