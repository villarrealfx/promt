<?php

namespace App\Http\Livewire\Equipment;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\EquipmentClass as EC;

class EquipmentClass extends Component
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
    public $str_filter = 'equipment_classes.id';
    public $total = 0;
    public $time = 0;
    public $confirming = 0;
    public $item_id = 0;

    public $name;
    public $has_brand;
    public $has_serial;
    public $has_lenght;
    public $has_towers;
    public $has_vain;

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

        $classes = EC::search("%{$this->search}%")
            ->orderBy($this->str_filter, $this->updown)
            ->paginate($this->perPage);

        $end_time = microtime(true);
        $this->time = $end_time - $start_time;

        return view('livewire.equipment.equipment-class', ['classes' => $classes]);
    }

    public function cleanSearch()
    {
        $this->search = "";
        $this->perPage = 10;
    }

    public function clear()
    {
        $this->name = "";
        $this->has_brand = false;
        $this->has_serial = false;
        $this->has_lenght = false;
        $this->has_towers = false;
        $this->has_vain = false;
        $this->item_id = 0;
    }

    public function save()
    {
        if ($this->item_id) {
            $this->validate([
                'name' => ['required', 'max:255'],
            ]);
            $data = EC::find($this->item_id);
            $message = "Actualizado";
        } else {
            $this->validate([
                'name' => ['required', 'max:255', 'unique:equipment_classes,name'],
            ]);
            $data = new EC();
            $message = "Item creado";
        }

        $data->name = $this->name;
        $data->has_brand = $this->has_brand;
        $data->has_serial = $this->has_serial;
        $data->has_lenght = $this->has_lenght;
        $data->has_towers = $this->has_towers;
        $data->has_vain = $this->has_vain;

        $data->save();

        $this->clear();

        $this->dispatchBrowserEvent('action-modal', ['id' => 'classModal']);
        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => $message]);
    }

    public function edit($item_id)
    {
        $data = EC::find($item_id);

        $this->item_id = $data->id;
        $this->name = $data->name;
        $this->has_brand = $data->has_brand;
        $this->has_serial = $data->has_serial;
        $this->has_lenght = $data->has_lenght;
        $this->has_towers = $data->has_towers;
        $this->has_vain = $data->has_vain;

        $this->dispatchBrowserEvent('action-modal', ['id' => 'classModal']);
    }

    public function toogleBrand($item_id)
    {
        $class = EC::find($item_id);
        $class->has_brand = !$class->has_brand;
        $class->save();
    }

    public function toogleSerial($item_id)
    {
        $class = EC::find($item_id);
        $class->has_serial = !$class->has_serial;
        $class->save();
    }

    public function toogleLenght($item_id)
    {
        $class = EC::find($item_id);
        $class->has_lenght = !$class->has_lenght;
        $class->save();
    }

    public function toogleTowers($item_id)
    {
        $class = EC::find($item_id);
        $class->has_towers = !$class->has_towers;
        $class->save();
    }

    public function toogleVain($item_id)
    {
        $class = EC::find($item_id);
        $class->has_vain = !$class->has_vain;
        $class->save();
    }
}
