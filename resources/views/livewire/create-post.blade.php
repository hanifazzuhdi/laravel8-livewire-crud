<div class="p-4">
    <textarea wire:model="content" class="block mt-2 rounded w-full" rows="4"
        placeholder="Masukkan post disini ..."></textarea>

    <div class="flex justify-end mt-3">
        <button wire:click="createPost"
            class="px-4 py-2 rounded-md bg-blue-500 hover:bg-blue-700 text-white">Submit</button>
    </div>
</div>
