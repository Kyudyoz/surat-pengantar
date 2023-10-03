<?php

namespace App\Livewire;

use App\Models\Rt;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;
use Livewire\WithPagination;

class DataRtTable extends Component
{
    public $search = '';
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.data-rt-table',[
            'rts' => Rt::where('nama_rt','like','%'.$this->search.'%')->orderBy('nama_rt')->paginate(5),
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
