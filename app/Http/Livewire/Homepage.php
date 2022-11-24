<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Mailcoach\Domain\Audience\Models\EmailList;


class Homepage extends Component
{

    public function render()
    {
        return view('livewire.homepage');
    }
}
