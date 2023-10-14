<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ValidasiAdminTable2 extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        
        $users2 = User::where('status','Disetujui Admin')->orWhere('status','Ditolak RT')->orWhere('status','Ditolak Admin')->orderBy('status', 'DESC')->latest()->simplePaginate(5);
        return view('livewire.validasi-admin-table2',[
            'users2' => $users2
        ]);
    }
}
