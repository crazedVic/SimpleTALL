<div class="bg-red-300 pb-2 pl-2">
    <div>{{$topic["title"]}}</div>
    <form class="flex ml-2 gap-2 items-center"  wire:submit.prevent="submit">
        <input type="text" wire:model="body">
        <button class="bg-gray-600 text-white shadow-lg py-1 px-2 rounded-md"type="submit">Submit</button>
        @error('body') <span class="text-red-600 italic text-sm">{{ $message }}</span> @enderror
    </form>

    @foreach ($topic["comments"] as $comment)
        <livewire:comment :comment="$comment" 
            :wire:key="$comment['id'] "/>
    @endforeach
    <!-- :wire:key could be the comment id if we were actually using the api -->

</div>
