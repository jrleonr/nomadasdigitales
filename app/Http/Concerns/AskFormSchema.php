<?php

namespace App\Http\Concerns;

use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Concerns\InteractsWithForms;
use App\Models\Category;
use Closure;


trait AskFormSchema 
{
    use InteractsWithForms;

    protected function getFormSchema(): array
    {
        return [

            Hidden::make('status')->required()->in(['draft']),

            Section::make('¿Con qué te gustaría que te ayudasen?')
                ->description('Explica qué necesitas, qué servicio estás buscando y qué retos enfrentas para que los profesionales y agencias puedan valorar si te pueden ayudar.')
                ->schema([

                    Select::make('category_id')
                        ->label('¿Qué servicio necesitas?')
                        ->options(Category::all()->pluck('name', 'id'))
                        ->required()
                        ->searchable(),

                    Radio::make('budget')
                        ->label('¿Qué prespuesto tienes?')
                        ->required()
                        ->helperText('El presupuesto es orientativo y no te compromete a nada.')
                        ->options([
                            '<500' => 'Menos de 500€',
                            '500-1000' => 'Entre 500€ y 1000€',
                            '1000-2000' => 'Entre 1000€ y 3000€',
                            '3000-2000' => 'Entre 3000€ y 5000€',
                            '5000-10000' => 'Entre 5000€ y 10000€',
                            '10000-25000' => 'Entre 10.000€ y 25.000€',
                            '25000-50000' => 'Entre 25.000€ y 50.000€',
                            '>50000' => 'Más de 50.000 €',
                            'unassigned' => 'No tenemos un presupueto asginado todavía',
                        ]),

                    Radio::make('frequency')
                        ->in(['once', 'monthly'])
                        ->label('¿Trabajo puntual o mensual?')
                        ->required()
                        ->options([
                            'once' => 'Puntual',
                            'monthly' => 'Mensual',
                        ]),

                    RichEditor::make('details')
                        ->label('Detalles de lo que buscas')
                        ->required()
                        ->toolbarButtons([
                            'blockquote',
                            'bold',
                            'bulletList',
                            'codeBlock',
                            'h2',
                            'h3',
                            'italic',
                            'link',
                            'orderedList',
                            'redo',
                            'strike',
                            'undo',
                        ]),

                    Radio::make('type')
                        ->label('¿Prefieres que te contacten freelancers, agencias o ambos?')
                        ->in(['both', 'freelancers', 'agencies'])
                        ->required()
                        ->options([
                            'both' => 'Ambos',
                            'freelancers' => 'Solo freelancers',
                            'agencies' => 'Solo agencias',
                        ]),

                    TextInput::make('contact')
                        ->rules([
                            function () {
                                return function (string $attribute, $value, Closure $fail) {
                                    if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
                                        return true;
                                    } elseif(preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$value)) {
                                       return true;
                                    }

                                    $fail("Para que puedan contactarte tienes que facilitar un correo o una dirección web.");
                                };
                            },
                        ])
                        ->required()
                        ->label('¿Cómo quieres que te contacten?')
                        ->helperText('Deja un correo electrónico o una dirección web
                        a un formulario online, Google Form, TypeForm, Calendly o similares.'),




                ]),




            Section::make('Sobre tu empresa')
                ->description('Queremos saber quién eres')
                ->schema([

                    (!$this->edit) ?
                    TextInput::make('email')
                    ->email()
                    ->required()
                    ->helperText('Este correo no lo compartimos con nadie, eso solo para verificar tu identidad.') : 
                        
                    TextInput::make('email')
                    ->hidden()
                    ->disabled()
                    ->required()
                    ->email(),
                    
                    
                    TextInput::make('contact_name')->label('Tu Nombre')->required(),
                    TextInput::make('company_name')->label('Nombre de la empresa')->required(),
                    TextInput::make('website')->required()->url(),
                ]),

        ];
    }
}