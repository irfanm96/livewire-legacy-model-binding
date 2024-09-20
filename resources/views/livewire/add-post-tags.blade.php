<div style="display: grid;place-items: center;height: 100vh">

    <div>
        <div>
            You are going to add tags to post #{{ $post->id }}
        </div>

        <br>

        <select wire:model.live="post.tags" multiple>

            <option value="tag-1">Tag 1</option>

            <option value="tag-2">Tag 2</option>

            <option value="tag-3">Tag 3</option>

        </select>


        <br>

        <div style="margin-top: 10px">
            Selected tags : {{ collect($post->tags ?? ['-'])->join(', ') }}
        </div>
    </div>

</div>
