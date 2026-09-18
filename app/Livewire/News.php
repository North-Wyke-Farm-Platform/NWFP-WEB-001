<?php
namespace App\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Publication;

class News extends Component
{
    public $ref_type;
    public string $searchRef = "";
    public $publications;
    public string $searchAuth = "";
    public $news;
    public $years;

    public function render()
    {

        $this -> news = Publication::where('ref_type', 'ilike', '%News%')
        ->when($this->searchRef !== '', fn(Builder $query) => $query->where('title', 'ilike', '%'. $this->searchRef .'%'))
        ->when($this->searchAuth !== '', fn(Builder $query) => $query->where('authors', 'ilike', '%'. $this->searchAuth .'%'))
        -> orderBy('issue_date','DESC')
          ->get();
        $this -> years = Publication::select('pub_year')->distinct('pub_year')->orderBy('pub_year', 'DESC')->get();
        return view('livewire.news', [
            'news' => $this->news
        ]);
    }
}
