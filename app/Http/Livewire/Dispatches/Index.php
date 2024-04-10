<?php

namespace App\Http\Livewire\Dispatches;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Dispatch;

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
    public $str_filter = 'dispatches.id';
    public $total = 0;
    public $time = 0;
    public $confirming = 0;
    public $item_id = 0;

    public $name;
    public $parent_id;
    public $parents;

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

        $dispatches = Dispatch::search("%{$this->search}%")
            ->orderBy($this->str_filter, $this->updown)
            ->paginate($this->perPage);

        $this->parents = Dispatch::all();

        $end_time = microtime(true);
        $this->time = $end_time - $start_time;

        return view('livewire.dispatches.index', ['dispatches' => $dispatches]);
    }

    public function cleanSearch()
    {
        $this->search = "";
        $this->perPage = 10;
    }

    public function clear()
    {
        $this->name = "";
        $this->parent_id = 0;
        $this->item_id = 0;
    }

    public function save()
    {
        if ($this->item_id) {
            $this->validate([
                'parent_id' => ['numeric'],
                'name' => ['required', 'max:255'],
            ]);
            $data = Dispatch::find($this->item_id);
            $message = "Actualizado";
        } else {
            $this->validate([
                'parent_id' => ['numeric'],
                'name' => ['required', 'max:255', 'unique:management,name'],
            ]);
            $data = new Dispatch();
            $message = "Item creado";
        }

        $data->name = $this->name;
        $data->parent_id = $this->parent_id;

        $data->save();

        $this->clear();

        $this->dispatchBrowserEvent('action-modal', ['id' => 'dispatchModal']);
        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => $message]);
    }

    public function edit($item_id)
    {
        $data = Dispatch::find($item_id);

        $this->item_id = $data->id;
        $this->name = $data->name;
        $this->parent_id = $data->parent_id;

        $this->dispatchBrowserEvent('action-modal', ['id' => 'dispatchModal']);
    }
}
