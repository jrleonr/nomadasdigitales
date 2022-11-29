<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\URL;
use Livewire\Component;

class VerifyOfferByEmail extends Component 
{
     public function render()
    {
        return view('livewire.verify-offer-email')->layout('layouts.min');
    }
}
