<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostTable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $posts = Post::latest()->paginate(2);

        return view('livewire.post-table',[
            "posts"=> $posts,
            'title' => 'Bulian News',
            'active' => 'Blog'
        ]);
    }
}
