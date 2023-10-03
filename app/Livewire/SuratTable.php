<?php

namespace App\Livewire;

use App\Models\Surat;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;
use Livewire\WithPagination;

class SuratTable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function render()
    {
        $surats2 = Surat::where('user_id', auth()->user()->id)
        ->latest()->simplePaginate(2);
        return view('livewire.surat-table',[
            'surats2' => $surats2,
        ]);
    }
}
