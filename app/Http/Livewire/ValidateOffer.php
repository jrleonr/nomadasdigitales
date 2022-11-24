<?php

namespace App\Http\Livewire;

use App\Models\Offer;
use Filament\Notifications\Notification;
use Livewire\Component;
use Illuminate\Http\Request;
use Spatie\Mailcoach\Domain\Audience\Models\EmailList;

class ValidateOffer extends Component 
{
    public $email;

    public function mount(Request $request)
    {
        if (! $request->hasValidSignature()) {
            abort(401);
        }

        $this->email = $request->email;

        $this->offer = Offer::where('email', $this->email)->where('id', $request->offer)->first();
        $this->offer->status = 'to verify';
        $this->offer->save();



    }

    public function submit()
    {
        $emailList = EmailList::where('uuid', env('MAILCOACH_LIST_USERS'))->first();

        $subscriber = $emailList->subscribeskippingConfirmation($this->email, [
            'first_name' => $this->offer->name, 
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
