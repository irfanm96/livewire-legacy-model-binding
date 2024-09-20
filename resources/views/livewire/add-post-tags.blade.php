<div>
    You are going to add tags to post #{{ $post->id }}

    <select wire:model.live="post.tags" multiple>

        <option value="tag-1">Tag 1</option>

        <option value="tag-2">Tag 2</option>

        <option value="tag-3">Tag 3</option>

    </select>


    <div>
        Selected tags : {{ collect($post->tags ?? ['none'])->join(', ') }}
    </div>

</div>
