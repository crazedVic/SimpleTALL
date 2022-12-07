<div class="bg-red-300 pb-2 pl-2">
    <div>{{$topic["title"]}}</div>
    @foreach ($topic["comments"] as $comment)
        <livewire:comment :comment="$comment" :wire:key="$loop->index"/>
    @endforeach
</div>
