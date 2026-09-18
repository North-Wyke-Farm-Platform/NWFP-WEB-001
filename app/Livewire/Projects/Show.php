<?php

namespace App\Livewire\Projects;

use Livewire\Component;

class Show extends Component
{
    public $id;
    public function render()
    {
        return view('livewire.projects.show', [
            'id' => $this->id,

        ])->layout('layouts.guest');
    }
}

