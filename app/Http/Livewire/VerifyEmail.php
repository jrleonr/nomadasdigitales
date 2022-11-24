<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\URL;
use Livewire\Component;

class VerifyEmail extends Component 
{
     public function render()
    {
        return view('livewire.verify-email')->layout('layouts.min');
    }
}
