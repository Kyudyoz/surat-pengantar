<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;
use Livewire\WithPagination;

class DataWargaTable extends Component
{
    public $search = '';
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        
        return view('livewire.data-warga-table',[
            'users' => User::where('rt_id', auth()->user()->rt_id)->where('role','Warga')->where('status', 'Disetujui Admin')
            ->where('nama','like','%'.$this->search.'%')->paginate(5),
        ]);
    }
    public function updatingSearch()
    {


        $this->resetPage();
    }
}
