<?php

namespace App\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
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
    public $types= [
        'rf1'=>'Journal Article',
        'rf2'=>'Conference',
        'rf4'=>'Dataset',
        'rf5'=>'Report',
        'rf7'=>'Computer Program',
        'rf9'=>'RPubs',
        'rf10'  =>'Book', // because we will look for 'Book' in the ref_type, the smaller of Book or Book Chapter, we will use the ref_type to filter for books and book chapters
    ];
    public Collection $ref_types;

    public array$data = array();
    public string $view = 'livewire.publications';
    //`public $style; // a variable to choose the kind of display


    public function mount() {


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
        $this -> ref_types = Publication::select('ref_type')->distinct('ref_type')->orderBy('ref_type', 'ASC')->get();
        $this-> view = 'livewire.publications';
        if ($this->keyref == 'KeyRefUserGuide') {
            $this->view = 'livewire.publications.nw_guides';
        }
        $this-> data=  [
            'publications' => $this->publications,
            'years' => $this->years,
            'types' => $this->types,
            'ref_types' => $this->ref_types,
            'hasButton' => $this->hasButtons,
            'hasSearch' => $this->hasSearch,

        ];


        return view (
            $this -> view, $this
        -> data );
    }

}
