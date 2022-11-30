<?php

namespace App\Http\Livewire;

use App\Http\Concerns\AskFormSchema;
use App\Mail\VerifyOffer;
use App\Models\Offer;
use Livewire\Component;

use Filament\Forms;

use Illuminate\Support\Facades\Mail;


class AskForm extends Component implements Forms\Contracts\HasForms
{
    use AskFormSchema; 

    public Offer $offer;
    public $edit = false;

    public function mount(): void
    {
        $this->form->fill([
            'status' => 'draft',
        ]);
    }

    public function submit()
    {
        $offer = Offer::create($this->form->getState());

        Mail::to($offer->email)->send(new VerifyOffer($offer));

        return redirect()->to(route('validate-offer'));

    }

    public function render()
    {
        return view('livewire.ask-form')->layout('layouts.min');
    }
}
