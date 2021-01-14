<div>
    @foreach ($posts as $post)
    <div class="bg-white overflow-hidden shadow-xl mt-4 p-4">

        <div class="flex justify-between px-3">
            <span class="font-bold"> Penulis : {{$post->user->name}} </span>
            <span class="text-gray-500"> Disunting : {{$post->updated_at->diffForHumans()}} </span>
        </div>

        <button wire:click="showUpdateForm({{$post->id}})"
            class="bg-blue-500 hover:bg-blue-700 text-white rounded px-2 ml-3 my-3">
            <span class="text-sm"> Edit </span>
        </button>

        <button wire:click="delete({{$post->id}})"
            onclick="return confirm ('Yakin ?') || event.stopImmediatePropagation()"
            class="bg-red-500 hover:bg-red-700 text-white rounded px-2 ml-1 my-3">
            <span class="text-sm"> Delete </span>
        </button>
        <hr>

        <div class="p-3 mt-2">

            @if ($postStateId != $post->id)
            <p> {{$post->content}} </p>

            @elseif ($postStateId == $post->id)
            <textarea wire:model="content" class="block mt-2 rounded w-full" rows="3"></textarea>

            <div class=" flex justify-end mt-3">
                <button wire:click="updateContent({{$post->id}})"
                    class="px-4 py-2 rounded-md bg-blue-500 hover:bg-blue-700 text-white">Update</button>
            </div>
            @endif

        </div>
    </div>
    @endforeach
</div>
