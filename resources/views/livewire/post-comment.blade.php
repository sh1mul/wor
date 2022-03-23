<div class="p-3 bg-gray-50">
    <div>
        @if (session()->has('message'))
            <div class="text-green text-xl">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <form wire:submit.prevent="comment" method="POST">
        <div class="grid grid-cols-4 gap-1">
            <input type="text" name="comment" wire:model="comment" class="col-span-3 border border-gray-300 outline-0 outline-green-500 shadow-lg p-2 rounded focus:shadow-lg" placeholder="মন্তব্য লিখুন">
            <button class="bg-green text-white px-2 py-0 shadow-lg rounded-md outline-none" type="submit">সাবমিট</button>

        </div>
        @error('comment') <span class="error text-red">{{ $message }}</span> @enderror
    </form>
</div>
