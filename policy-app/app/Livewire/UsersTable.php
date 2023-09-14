<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;
    public $search='';
    public $sortField='id';
    public $sortAsc=true;//default olarak ascending yapiyor
    public $perPage=15;
    public $name;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.users-table',[
            'users'=>User::search($this->search)
            ->orderBy($this->sortField,$this->sortAsc?'asc':'desc')
            ->simplePaginate($this->perPage)
        ]);
    }

    public function add(){
       $user=new User();
       $user->name=$this->name;
       $user->email=$this->email;
       $user->password=$this->password;
       $this->save();
    }
    public function delete(){

    }
    public function updateSearch(){
        $this->resetPage();
    }


}
