<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ValidasiAdminTable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $users = User::where('status', 'Disetujui')->latest()->simplePaginate(5);

        return view('livewire.validasi-admin-table', [
            'users' => $users
        ]);
    }
}
