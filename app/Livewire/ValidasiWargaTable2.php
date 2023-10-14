<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ValidasiWargaTable2 extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $users2 = User::where('rt_id', auth()->user()->rt_id)
        ->where('status','!=','Menunggu Validasi')->where('role', '!=', auth()->user()->role)->orderBy('status', 'DESC')->latest()->simplePaginate(5);
        return view('livewire.validasi-warga-table2',[
            'users2' => $users2,
        ]);
    }
}
