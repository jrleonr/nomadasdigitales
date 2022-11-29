<?php

namespace App\Http\Livewire;

use App\Models\Offer;
use Livewire\Component;

class ShowOffer extends Component
{

    public Offer $offer;

    public function render()
    {
        return view('livewire.show-offer');
    }
}
