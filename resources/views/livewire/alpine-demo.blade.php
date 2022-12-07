<div>
   <form class="border border-1 border-gray-400 p-6">
      <input type="text" wire:model="name">
      <button  wire:click.prevent="submit" name="Submit">Submit</button>
   </form>
   @if($message != "")
   <div class="bg-green-700 text-white text-left px-5 py-1">
      BLADE:  {{$message}}
   </div>
   @endif
   <div x-data="{ js_message: @entangle('message') }">
      <div class="bg-green-700 text-white text-left px-5 py-1" 
      x-show="js_message != ''" @click.outside="open = false">
        ALPINE: <span x-text="js_message"></span>
      </div>
   </div>
</div>
