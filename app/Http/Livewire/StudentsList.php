<?php

namespace App\Http\Livewire;
use App\Student;
use Livewire\Component;
use Livewire\WithPagination;

class StudentsList extends Component
{
    use WithPagination;

    public $perPage = 5;

    public $query;

    protected $paginationTheme = 'bootstrap';

    public function updatingQuery()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.students-list', [
            'students'=> Student::where('name', 'like', '%'.$this->query.'%')->paginate($this->perPage),
        ]);
    }
}
