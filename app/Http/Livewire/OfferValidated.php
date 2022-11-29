<?php

namespace App\Http\Livewire;

use App\Models\Offer;
use Filament\Notifications\Notification;
use Livewire\Component;
use Illuminate\Http\Request;
use Spatie\Mailcoach\Domain\Audience\Models\EmailList;

class OfferValidated extends Component 
{
    public Offer $offer;

    public function submit()
    {
        $emailList = EmailList::where('uuid', env('MAILCOACH_LIST_USERS'))->first();

        $subscriber = $emailList->subscribeskippingConfirmation($this->offer->email, [
            'first_name' => $this->offer->contact_name, 
        ]);

        Notification::make() 
            ->title('Has sido suscrito correctamente.')
            ->success()
            ->send(); 

       return redirect()->to(route('homepage'));

    }


    public function render()
    {
        return view('livewire.validate-offer')->layout('layouts.min');
    }
}
