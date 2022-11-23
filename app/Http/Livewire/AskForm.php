<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Offer;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Placeholder;
use Livewire\Component;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Wizard;
use Illuminate\Support\HtmlString;

class AskForm extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public Offer $offer;

    public $companyName = '';
    public $email = '';
    public $categories = [];


    public function mount(): void
    {
        $this->form->fill();
    }

    protected function getFormSchema(): array
    {
        return [

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

                        ]),

                    Radio::make('type')
                        ->label('¿Trabajo puntual o mensual?')
                        ->required()
                        ->options([
                            'once' => 'Puntual',
                            'monthly' => 'Mensual',
                        ]),

                    RichEditor::make('content')
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
                        ->label('¿Prefieres que te contacten profesionales, agencias o ambos?')
                        ->required()
                        ->options([
                            'both' => 'Ambos',
                            'freelancers' => 'Solo profesionales',
                            'agencies' => 'Solo agencias',
                        ]),

                    TextInput::make('contact')
                        ->required()
                        ->label('¿Cómo quieres que te contacten?')
                        ->helperText('Deja un correo electrónico o una dirección web
                        a un formulario online, Google Form, TypeForm, Calendly o similares.'),




                ]),




            Section::make('Sobre tu empresa')
                ->description('Queremos saber quién eres')
                ->schema([
                    TextInput::make('email')->email()->required()->helperText('Este correo no lo compartimos con nadie, eso solo para verificar tu identidad.'),
                    TextInput::make('name')->label('Tu Nombre')->required(),
                    TextInput::make('company_name')->label('Nombre de la empresa')->required(),
                    TextInput::make('website')->required(),
                ]),

        ];
    }

    public function submit(): void
    {
        Offer::create($this->form->getState());
    }

    protected function getOfferModel(): string
    {
        return Offer::class;
    }

    public function render()
    {
        return view('livewire.ask-form');
    }
}
