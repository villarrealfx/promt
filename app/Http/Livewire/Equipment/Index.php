<?php

namespace App\Http\Livewire\Equipment;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Equipment;

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
    public $str_filter = 'equipment.id';
    public $total = 0;
    public $time = 0;
    public $confirming = 0;
    public $item_id = 0;

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

        $equipment = Equipment::search("%{$this->search}%")
            ->orderBy($this->str_filter, $this->updown)
            ->paginate($this->perPage);

        $end_time = microtime(true);
        $this->time = $end_time - $start_time;

        return view('livewire.equipment.index', ['equipment' => $equipment]);
    }

    public function cleanSearch()
    {
        $this->search = "";
        $this->perPage = 10;
    }
}
