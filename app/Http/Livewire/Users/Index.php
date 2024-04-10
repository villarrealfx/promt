<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use App\Models\User;
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
    public $str_filter = 'users.id';
    public $total = 0;
    public $time = 0;
    public $confirming = 0;
    public $item_id = 0;

    public $id_type;
    public $identification_card;
    public $staff_number;
    public $name;
    public $last_name;
    public $username;
    public $email;
    public $office_phone;
    public $cell_phone;
    public $room_phone;
    public $password;
    public $comments;
    public $active;

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

        $users = User::search("%{$this->search}%")
            ->orderBy($this->str_filter, $this->updown)
            ->paginate($this->perPage);

        $end_time = microtime(true);
        $this->time = $end_time - $start_time;

        return view('livewire.users.index', ['users' => $users]);
    }

    public function toogleStatus($item_id)
    {
        $user = User::find($item_id);
        $user->active = !$user->active;
        $user->save();
    }

    public function cleanSearch()
    {
        $this->search = "";
        $this->perPage = 10;
    }

    public function cleanModal()
    {
        $this->item_id = 0;
        $this->id_type = "";
        $this->identification_card = 0;
        $this->staff_number = 0;
        $this->name = "";
        $this->last_name = "";
        $this->username = "";
        $this->email = "";
        $this->office_phone = "";
        $this->cell_phone = "";
        $this->room_phone = "";
        $this->password = "";
        $this->comments = "";
        $this->active = false;
    }

    public function save()
    {
        $this->validate([
            'id_type' => ['required', 'max:1'],
            'identification_card' => ['required', 'numeric', 'min:1'],
            'staff_number' => ['numeric', 'min:1'],
            'name' => ['required'],
            'last_name' => ['required'],
            'username' => ['min:4'],
            'email' => ['required', 'email'],
            'office_phone' => ['max:11'],
            'cell_phone' => ['max:11'],
            'room_phone' => ['max:11'],
            'comments' => ['max:255'],
            'active' => ['boolean'],
        ]);
    }
}
