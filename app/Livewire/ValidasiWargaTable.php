<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ValidasiWargaTable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $users = User::where('rt_id', auth()->user()->rt_id)
        ->where('status', 'Menunggu Validasi')->latest()->simplePaginate(5);
        return view('livewire.validasi-warga-table',[
            'users' => $users,
        ]);
    }
}
