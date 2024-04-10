<?php

namespace App\Http\Livewire\Facilities;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Facility;
use App\Models\FacilityType;

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
    public $str_filter = 'facilities.id';
    public $total = 0;
    public $time = 0;
    public $confirming = 0;
    public $item_id = 0;

    public $name;
    public $type_id;
    public $comments;
    public $contact_phone;

    public $types;

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

        $facilities = Facility::search("%{$this->search}%")
            ->orderBy($this->str_filter, $this->updown)
            ->paginate($this->perPage);

        $this->types = FacilityType::all();

        $end_time = microtime(true);
        $this->time = $end_time - $start_time;

        return view('livewire.facilities.index', ['facilities' => $facilities]);
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
        $this->type_id = 0;
        $this->comments = "";
        $this->contact_phone = "";
    }

    public function save()
    {
        $this->validate([
            'name' => ['required', 'max:255'],
            'type_id' => ['required', 'numeric'],
            'comments' => ['max:255'],
            'contact_phone' => ['max:11'],
        ]);

        if ($this->item_id) {
            $data = Facility::find($this->item_id);
            $message = "Actualizado";
        } else {
            $data = new Facility();
            $message = "Item creado";
        }

        $data->name = $this->name;
        $data->type_id = $this->type_id;
        $data->comments = $this->comments;
        $data->contact_phone = $this->contact_phone;

        $data->save();

        $this->clear();

        $this->dispatchBrowserEvent('action-modal', ['id' => 'facilityModal']);
        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => $message]);
    }

    public function edit($item_id)
    {
        $data = Facility::find($item_id);

        $this->item_id = $data->id;
        $this->name = $data->name;
        $this->type_id = $data->type_id;
        $this->comments = $data->comments;
        $this->contact_phone = $data->contact_phone;

        $this->dispatchBrowserEvent('action-modal', ['id' => 'facilityModal']);
    }
}
