<?php

namespace App\Http\Livewire;

use App\Http\Concerns\AskFormSchema;
use App\Mail\Admin\NewOffer;
use App\Models\Offer;
use Livewire\Component;
use Filament\Forms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AskFormEdit extends Component implements Forms\Contracts\HasForms
{

    use AskFormSchema;

    public Offer $offer;
    public $edit = true;

    public function mount(Request $request)
    {
        if (! $request->hasValidSignature()) {
            abort(401);
        }

        if($this->offer->status !== 'draft') {
            return redirect(route('homepage'));
        }

        $this->form->fill($this->offer->toArray());
    }

    public function submit()
    {
        $this->offer->update(
            $this->form->getState(),
        );

        $this->offer->status = 'to verify';
        $this->offer->save();

        Mail::to('joseleon@linkform.io')->send(new NewOffer($this->offer));

        return redirect()->to(route('offer-validated', ['offer' => $this->offer]));

    }

    protected function getOfferModel(): Offer
    {
        return $this->offer;
    }


    public function render()
    {
        return view('livewire.ask-form-edit')->layout('layouts.min');
    }
}
