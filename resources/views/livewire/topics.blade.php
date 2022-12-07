<div>
    @foreach(app()->get("data") as $topic)
         <livewire:topic  :topic="$topic" :wire:key="$loop->index"/>
    @endforeach
</div>
