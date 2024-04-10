<?php

namespace App\Http\Livewire\Permits;

use App\Models\Department;
use App\Models\EquipmentClass;
use App\Models\Permit;
use App\Models\Caution;
use App\Models\PermitCaution;
use Livewire\Component;

class Form extends Component
{
    //Fillable Fields
    public $requested_for;
    public $approved_for;
    public $duration;
    public $ends_on;
    public $emergency_availability;
    public $work_to_do = "";
    public $consequence = false;
    public $precautions;
    public $starting_note = "";
    public $closing_note = "";
    public $equipment_giving;
    public $consequences ="";
    public $emergency = false;
    public $out_of_time = false;
    public $load = 0;
    public $reason;
    public $status;
    public $petitioner_id;
    public $department_id = 0;
    public $permit_id = 0;
    public $facility_id;
    public $equipment_id;


    public $department_data;
    public $departments;
    public $equipment_classes;
    public $equipment_class_id;
    public $equipment;
    public $cautions;
    public $checked_cautions = [];

    public function render()
    {
        if ($this->permit_id) {
            $data = Permit::find($this->permit_id);

            $this->requested_for = $data->requested_for;
            $this->approved_for = $data->approved_for;
            $this->duration = $data->duration;
            $this->ends_on = $data->ends_on;
            $this->emergency_availability = $data->emergency_availability;
            $this->work_to_do = $data->work_to_do;
            $this->consequence = $data->consequence;
            $this->precautions = $data->precautions;
            $this->starting_note = $data->starting_note;
            $this->closing_note = $data->closing_note;
            $this->equipment_giving = $data->equipment_giving;
            $this->consequences = $data->consequences;
            $this->emergency = $data->emergency;
            $this->out_of_time = $data->out_of_time;
            $this->load = $data->load;
            $this->reason = $data->reason;
            $this->status = $data->status;
            $this->department_id = $data->department_id;
            $this->petitioner_id = $data->petitioner_id;
        }

        $this->departments = Department::all();
        $this->equipment_classes = EquipmentClass::all();
        $this->cautions = Caution::all();

        if ($this->department_id) {
            $this->department_data = Department::find($this->department_id);

            if ($this->equipment_class_id) {
                $this->equipment = $this->department_data->equipment()->where('class_id', '=', $this->equipment_class_id);
            }
        }

        return view('livewire.permits.form');
    }

    public function save()
    {
        $this->validate([
            'requested_for' => ['required'],
            'approved_for' => ['required'],
            'duration' => ['max:20'],
            'ends_on' => ['required'],
            'emergency_availability' => ['max:20'],
            'work_to_do' => ['max:512'],
            'consequence' => ['boolean'],
            'starting_note' => ['max:1024'],
            'closing_note' => ['max:1024'],
            'equipment_giving' => [],
            'consequences' => ['max:512'],
            'emergency' => ['boolean'],
            'out_of_time' => ['boolean'],
            'load' => ['numeric'],
            'reason' => ['max:20'],
            'status' => ['max:20'],
            'department_id' => ['numeric'],
            'petitioner_id' => ['numeric'],
            'equipment_id' => ['numeric'],
        ]);
        if ($this->permit_id) {
            $data = Permit::find($this->permit_id);
        } else {
            $data = new Permit();
        }

        $data->requested_for = $this->requested_for;
        $data->approved_for = $this->approved_for;
        $data->duration = $this->duration;
        $data->ends_on = $this->ends_on;
        $data->emergency_availability = $this->emergency_availability;
        $data->work_to_do = $this->work_to_do;
        $data->consequence = $this->consequence;
        $data->precautions = $this->precautions;
        $data->starting_note = $this->starting_note;
        $data->closing_note = $this->closing_note;
        $data->equipment_giving = $this->equipment_giving;
        $data->consequences = $this->consequences;
        $data->emergency = $this->emergency;
        $data->out_of_time = $this->out_of_time;
        $data->load = $this->load;
        $data->reason = $this->reason;
        $data->status = $this->status;
        $data->department_id = $this->department_id;
        $data->petitioner_id = $this->petitioner_id;
        $data->equipment_id = $this->equipment_id;

        $data->save();

        foreach ($this->checked_cautions as $value) {
            $caution = new PermitCaution();
            $caution->permit_id = $data->id;
            $caution->caution_id = $value;
            $caution->checked = false;
        }

        return redirect()->route('permits');
    }
}
