<div class="ml-2 bg-blue-300 py-1 px-1">
    <div>{{$comment["body"]}}</div>
    <form class="flex ml-2 gap-2 items-center"  wire:submit.prevent="submit">
        <input type="text" wire:model="body">
        <button class="bg-gray-600 text-white shadow-lg py-1 px-2 rounded-md"type="submit">Submit</button>
        @error('body') <span class="text-red-600 italic text-sm">{{ $message }}</span> @enderror
 
    </form>
    <div class="ml-2 py-1 px-1">
        @foreach ($comment["comments"] as $comment)
            <livewire:comment  :comment="$comment" :wire:key="$loop->index"/>
        @endforeach
    </div>
</div>
