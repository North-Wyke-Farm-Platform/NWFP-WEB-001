<?php

namespace App\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use App\Models\Publication;


class Publications extends Component
{


    public string $keyref;
    public string $hasButtons;
    public string $hasSearch;
    public string $order = 'ASC';
    public string $searchRef = "";
    public $layout = 'layouts.guest';
    public string $searchAuth = "";
    public $guides = 1;
    public Collection $years;
    public Collection $publications;
    public Array  $types = array();
    public Collection $ref_types;

    public array$data = array();
    public string $view = 'livewire.publications';
    //`public $style; // a variable to choose the kind of display


    public function mount() {
        // we what the types to be short and unique, so we will explode the string and take the first word of each type


       $this->types = Publication::pluck('ref_type')
        ->map(fn ($refType) => explode(' ', $refType)[0])
        ->unique()
        ->sort()
        ->toArray();


    }
    public function render()
    {

        $this -> publications = Publication::where('keywords', 'ilike', '%'. $this->keyref .'%')
        ->when($this->guides === 0, fn(Builder $query) => $query->where('keywords', 'not like', '%KeyRefUserGuide%'))
        ->when($this->searchRef !== '', fn(Builder $query) => $query->where('title', 'ilike', '%'. $this->searchRef .'%'))
        ->when($this->searchAuth !== '', fn(Builder $query) => $query->where('authors', 'ilike', '%'. $this->searchAuth .'%'))
        ->orderBy('authors')
        ->get();
        $this -> years = Publication::select('pub_year')->distinct('pub_year')->orderBy('pub_year', 'DESC')->get();

        $this-> view = 'livewire.publications';
        if ($this->keyref == 'KeyRefUserGuide') {
            $this->view = 'livewire.publications.nw_guides';
        }
        $this-> data=  [
            'publications' => $this->publications,
            'years' => $this->years,
            'types' => $this->types,
            'hasButton' => $this->hasButtons,
            'hasSearch' => $this->hasSearch,

        ];


        return view (
            $this -> view, $this
        -> data );
    }

}
