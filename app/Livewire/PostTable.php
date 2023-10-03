<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;
use Livewire\WithPagination;

class PostTable extends Component
{
    public $search = '';
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $posts = Post::latest()->where('judul','like','%'.$this->search.'%')->paginate(2);

        return view('livewire.post-table',[
            "posts"=> $posts,

        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
