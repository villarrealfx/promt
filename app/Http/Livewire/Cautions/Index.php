<?php

namespace App\Http\Livewire\Cautions;

use App\Models\Caution;
use Livewire\Component;
use Livewire\WithPagination;

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
    public $str_filter = 'cautions.id';
    public $total = 0;
    public $time = 0;
    public $confirming = 0;
    public $item_id = 0;

    public $name;

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

        $cautions = Caution::search("%{$this->search}%")
            ->orderBy($this->str_filter, $this->updown)
            ->paginate($this->perPage);

        $end_time = microtime(true);
        $this->time = $end_time - $start_time;

        return view('livewire.cautions.index', ['cautions' => $cautions]);
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
            $data = Caution::find($this->item_id);
            $message = "Actualizado";
        } else {
            $this->validate([
                'name' => ['required', 'max:255'],
            ]);
            $data = new Caution();
            $message = "Item creado";
        }

        $data->name = $this->name;

        $data->save();

        $this->clear();

        $this->dispatchBrowserEvent('action-modal', ['id' => 'cautionModal']);
        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => $message]);
    }

    public function edit($item_id)
    {
        $data = Caution::find($item_id);

        $this->item_id = $data->id;
        $this->name = $data->name;

        $this->dispatchBrowserEvent('action-modal', ['id' => 'cautionModal']);
    }
}
