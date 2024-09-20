<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class AddPostTags extends Component
{
    public ?Post $post = null;

    public function rules()
    {
        return [
            'post.tags' => ['required'],
        ];
    }

    public function mount()
    {
        $this->post = Post::firstOrCreate();
    }

    public function render()
    {
        return view('livewire.add-post-tags');
    }
}
