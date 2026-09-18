<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Project;
use App\Models\Theme;
use Filament\Schemas\Schema;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Components\Select;


/**
 * I have started trying to use the filament hasform to have a multislect and I am struggling putting the data in there.,
 * Getting there, but I am still not getting the information to get through
 */
class Projects extends Component implements HasForms
{
    use InteractsWithForms;

    public $data = array();
    public $projects;
    public $project;
    public string $searchProj = "";
    public array $themes = [];
    public array $listThemes ;
    public $id;
    public $layout = 'layouts.guest';

    public $view = 'livewire.projects';
    public $style; // a variable to choose the kind of display


    public function mount(): void
    {
        $themes = Theme::all();
        $this->form->fill($themes->toArray());

        if ($this -> id == 0 ) {
            // there is no specific ID, so the view is the defaut list for the moment
                   $this -> projects = Project::where('name', 'ilike', '% %')
        ->where('is_available', TRUE)
        ->when($this->searchProj !== '', fn(Builder $query) => $query->where('name', 'ilike', '%'. $this->searchProj .'%'))
        ->get();

            $this -> data = [
                'id'=> 0,
                'projects' => $this->projects,
                'themes' => $this->themes,
                //'students' => $this->students,
                //'projects' => $this->projects,
            ];
            $this -> view= 'livewire.projects';
        }
        elseif ($this -> id != 0 )
        // this is one testimony so the view is "show" for the moment
        {
            //If you only need a single record, using first() will return an Eloquent
            //model instance instead of a Collection. This method is faster and more efficient
            //when you know you're only fetching one record.
            $id = $this->id;
            $this -> project = Project::where('id', $id)->first();
            $this -> view = 'livewire.projects.show';
            $this -> data = [
                'id'=> $this->id,
                'project' => $this -> project,
            ];

        }
    }

   public function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Select::make('theme_id')
                ->label('Themes')
                ->options(Theme::all()->pluck('name', 'id'))
                ->columnSpanFull()
                ->preload()
                ->multiple()
                ->searchable(),
                Select::make('technologies')
                ->multiple()
                ->options([
                    'tailwind' => 'Tailwind CSS',
                    'alpine' => 'Alpine.js',
                    'laravel' => 'Laravel',
                    'livewire' => 'Laravel Livewire',
                ])
    ]);

    }


    public function render()
    {
//         $this -> projects = Project::where('name', 'ilike', '% %')
//         ->where('is_available', TRUE)
//         ->when($this->searchProj !== '', fn(Builder $query) => $query->where('name', 'ilike', '%'. $this->searchProj .'%'))
//         ->get();

//         return view('livewire.projects', [
//             'projects' => $this->projects,
//             'themes' => $this->themes,

//         ]);

return view (
            $this -> view, $this
        -> data )
        ;
    }
}
