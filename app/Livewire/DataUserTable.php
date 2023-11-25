<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;
use Livewire\WithPagination;

class DataUserTable extends Component
{
    public $search = '';
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.data-user-table', [
            'users' => User::where('role', '!=', 'Admin')->where('status', 'Disetujui')->where('nama', 'like', '%' . $this->search . '%')->orderBy('role')->orderBy('rt_id')->paginate(5),
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
