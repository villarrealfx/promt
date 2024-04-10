<?php

namespace App\Http\Livewire\Equipment;

use Livewire\Component;
use App\Models\Equipment;
use App\Models\Facility;
use App\Models\EquipmentClass;
use App\Models\VoltageLevel;

class Form extends Component
{
    public $facility_id;
    public $department_id;
    public $code;
    public $description;
    public $operations_warning;
    public $maintenance_warning;
    public $brand;
    public $serial;
    public $comments;
    public $type;
    public $belongs_to = 'corpoelec';
    public $local_procedure;
    public $in_service_date;
    public $lenght;
    public $vain_average;
    public $towers;
    public $parent_id;
    public $class_id;
    public $voltage_level_id;

    public $facilities;
    public $classes;
    public $voltages;

    public $has_brand = false;
    public $has_serial = false;
    public $has_lenght = false;
    public $has_towers = false;
    public $has_vain = false;

    public function render()
    {
        if(isset($equip_id))
        {
            $data = Equipment::find($equip_id);
            $this->facility_id = $data->facility_id;
            $this->department_id = $data->department_id;
            $this->code = $data->code;
            $this->description = $data->description;
            $this->operations_warning = $data->operations_warning;
            $this->maintenance_warning = $data->maintenance_warning;
            $this->brand = $data->brand;
            $this->serial = $data->serial;
            $this->comments = $data->comments;
            $this->type = $data->type;
            $this->belongs_to = $data->belongs_to;
            $this->local_procedure = $data->local_procedure;
            $this->in_service_date = $data->in_service_date;
            $this->lenght = $data->lenght;
            $this->vain_average = $data->vain_average;
            $this->towers = $data->towers;
            $this->parent_id = $data->parent_id;
            $this->class_id = $data->class_id;
            $this->voltage_level_id = $data->voltage_level_id;
        }

        $this->facilities = Facility::all();
        $this->classes = EquipmentClass::all();
        $this->voltages = VoltageLevel::all();

        if ($this->class_id) {
            $data = EquipmentClass::find($this->class_id);
            $this->has_brand = $data->has_brand;
            $this->has_serial = $data->has_serial;
            $this->has_lenght = $data->has_lenght;
            $this->has_towers = $data->has_towers;
            $this->has_vain = $data->has_vain;
        }

        return view('livewire.equipment.form');
    }

    public function save()
    {
        if($this->item_id)
        {
            $data = Equipment::find($this->item_id);
        }
        else
        {
            $data = new Equipment();
        }

        $data->facility_id = $this->facility_id;
        $data->department_id = $this->department_id;
        $data->code = $this->code;
        $data->description = $this->description;
        $data->operations_warning = $this->operations_warning;
        $data->maintenance_warning = $this->maintenance_warning;
        $data->brand = $this->brand;
        $data->serial = $this->serial;
        $data->comments = $this->comments;
        $data->type = $this->type;
        $data->belongs_to = $this->belongs_to;
        $data->local_procedure = $this->local_procedure;
        $data->in_service_date = $this->in_service_date;
        $data->lenght = $this->lenght;
        $data->vain_average = $this->vain_average;
        $data->towers = $this->towers;
        $data->parent_id = $this->parent_id;
        $data->class_id = $this->class_id;
        $data->voltage_level_id = $this->voltage_level_id;

        $data->save();

        return redirect()->route('equipment');
    }
}
