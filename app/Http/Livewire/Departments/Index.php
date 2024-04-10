<?php

namespace App\Http\Livewire\Departments;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Department;
use App\Models\Management;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => '10'],
        'updown' => ['except' => ''],
    ];
    public $search = "";
    public $perPage = '10';
    public $updown = 'asc';
    public $str_filter = 'departments.id';
    public $total = 0;
    public $time = 0;
    public $confirming = 0;
    public $item_id = 0;

    public $name;
    public $management_id;
    public $management;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        if ($this->perPage > 100) {
            $this->perPage = 100;
        }
        $start_time = microtime(true);

        $departments = Department::search("%{$this->search}%")
            ->orderBy($this->str_filter, $this->updown)
            ->paginate($this->perPage);

        $this->management = Management::all();

        $end_time = microtime(true);
        $this->time = $end_time - $start_time;

        return view('livewire.departments.index', ['departments' => $departments]);
    }

    public function cleanSearch()
    {
        $this->search = "";
        $this->perPage = 10;
    }

    public function clear()
    {
        $this->name = "";
        $this->item_id = 0;
    }

    public function save()
    {
        if ($this->item_id) {
            $this->validate([
                'name' => ['required', 'max:255'],
            ]);
            $data = Department::find($this->item_id);
            $message = "Actualizado";
        } else {
            $this->validate([
                'name' => ['required', 'max:255', 'unique:management,name'],
            ]);
            $data = new Department();
            $message = "Item creado";
        }

        $data->name = $this->name;
        $data->management_id = $this->management_id;

        $data->save();

        $this->clear();

        $this->dispatchBrowserEvent('action-modal', ['id' => 'departmentModal']);
        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => $message]);
    }

    public function edit($item_id)
    {
        $data = Department::find($item_id);

        $this->item_id = $data->id;
        $this->name = $data->name;
        $this->management_id = $data->management_id;

        $this->dispatchBrowserEvent('action-modal', ['id' => 'departmentModal']);
    }
}
