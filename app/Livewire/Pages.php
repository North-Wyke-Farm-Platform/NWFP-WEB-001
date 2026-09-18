<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Page;
use App\Models\Tag;
use Filament\Forms\Form;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Components\Select;


class Pages extends Component
{   public $pages;
    public $pinned;

    public function render()
    {
        $this -> pages = Page::where('is_focus', TRUE)
        ->where('is_pinned', FALSE)
        ->where('status',  'Published')
        ->orderBy('rank_focus', 'asc')
        ->get();

        $this -> pinned = Page::where('is_pinned', TRUE)
        ->where('status',  'Published')
        ->orderBy('rank_pinned', 'asc')
        ->get();


        return view('livewire.pages', [
            'pinned'=> $this->pinned,
            'pages' => $this->pages,
        ]);
    }
}
