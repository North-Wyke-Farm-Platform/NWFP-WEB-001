<?php

namespace App\Livewire\Testimonies;

use Livewire\Component;

class Show extends Component
{
    public $id;

    public function render()
    {
        return view('livewire.testimonies.show', [
            'id' => $this->id,

        ])->layout('layouts.guest');
    }
}
