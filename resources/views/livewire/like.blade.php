<div>
        @if (!$like)
        <button wire:click="like"><i class="fa-solid fa-heart"></i></button>

        @else
        <button wire:click="like"><i class="text-red-600 ease-out scale-125 duration-300 fa-solid fa-heart"></i></button>
        @endif

</div>
