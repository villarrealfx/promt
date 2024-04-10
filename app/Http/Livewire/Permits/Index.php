<?php

namespace App\Http\Livewire\Permits;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Permit;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => '10'],
        'updown' => ['except' => ''],
    ];

    //Pagination Data
    public $search = "";
    public $perPage = '10';
    public $updown = 'asc';
    public $str_filter = 'permits.id';
    public $total = 0;
    public $time = 0;
    public $confirming = 0;
    public $item_id = 0;

    //Fillable Fields
    public $requested_for;
    public $approved_for;
    public $duration;
    public $ends_on;
    public $emergency_availability;
    public $work_to_do;
    public $consequence;
    public $precautions;
    public $starting_note;
    public $closing_note;
    public $equipment_giving;
    public $consequences;
    public $emergency;
    public $out_of_time;
    public $load;
    public $reason;
    public $status;
    public $department_id;


    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        //Pagination limited to 100 per page max
        if ($this->perPage > 100) {
            $this->perPage = 100;
        }

        $start_time = microtime(true);

        //Database Query
        $permits = Permit::search("%{$this->search}%")
                ->orderBy($this->str_filter, $this->updown)
                ->paginate($this->perPage);

        $this->total = $permits->count();

        $end_time = microtime(true);
        $this->time = $end_time - $start_time;

        return view('livewire.permits.index', ['permits' => $permits]);
    }

    public function sortData($str_filter, $updown)
    {
        $this->str_filter = $str_filter;
        $this->updown = $updown;
    }

    public function cleanSearch()
    {
        $this->search = "";
        $this->perPage = 10;
    }

    public function clear()
    {
        $this->search = "";
        $this->perPage = '10';

        $this->requested_for = '';
        $this->approved_for = '';
        $this->duration = '';
        $this->ends_on = '';
        $this->emergency_availability = '';
        $this->work_to_do = '';
        $this->consequence = '';
        $this->precautions = '';
        $this->starting_note = '';
        $this->closing_note = '';
        $this->equipment_giving = '';
        $this->consequences = '';
        $this->emergency = '';
        $this->out_of_time = '';
        $this->load = 0.0;
        $this->reason = '';
        $this->status = '';
    }

    public function save()
    {
        $this->validate([
            'requested_for' => 'required|datetime',
            'approved_for' => 'required|datetime',
            'duration' => 'required|time',
            'ends_on' => 'datetime',
            'emergency_availability' => 'time',
            'work_todo_do' => 'required|min:5',
            'consequence' => 'required|min:5',
            'consequences' => 'boolean',
            'emergency' => 'boolean',
            'out_of_time' => 'boolean',
            'load' => 'numeric',
        ]);

        if ($this->item_id) {
            $data = Permit::find($this->item_id);
            $message = 'Actualizado';
        } else {
            $data = new Permit();
            $message = 'Permiso creado';
        }

        $data->requested_for = $this->requested_for;
        $data->approved_for = $this->approved_for;
        $data->duration = $this->duration;
        $data->ends_on = $this->ends_on;
        $data->emergency_availability = $this->emergency_availability;
        $data->work_to_do = $this->work_to_do;
        $data->consequence = $this->consequence;
        $data->precautions = $this->precautions;
        $data->equipment_giving = $this->equipment_giving;
        $data->consequences = $this->consequences;
        $data->emergency = $this->emergency;
        $data->out_of_time = $this->out_of_time;
        $data->load = $this->load;
        $data->reason = $this->reason;
        $data->department_id = $this->department_id;

        $data->save();

        $this->clear();

        $this->dispatchBrowserEvent('action-modal', ['id' => 'permitModal']);
        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => $message]);
    }

    public function edit($item_id)
    {
        $data = Permit::find($item_id);

        $this->requested_for = $data->requested_for;
        $this->approved_for = $data->approved_for;
        $this->duration = $data->duration;
        $this->ends_on = $data->ends_on;
        $this->emergency_availability = $data->emergency_availability;
        $this->work_to_do = $data->work_to_do;
        $this->consequence = $data->consequence;
        $this->precautions = $data->precautions;
        $this->equipment_giving = $data->equipment_giving;
        $this->consequences = $data->consequences;
        $this->emergency = $data->emergency;
        $this->out_of_time = $data->out_of_time;
        $this->load = $data->load;
        $this->reason = $data->reason;
        $this->department_id = $data->department_id;

        $this->item_id = $item_id;
        $this->dispatchBrowserEvent('action-modal', ['id' => 'permitModal']);
    }
}
