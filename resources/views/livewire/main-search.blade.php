{{--<div class="w-full mx-auto">
    <form class="w-1/3 mx-auto" wire:submit.prevent="mywords">
        <input type="text" wire:model="keyword" class="border border-green w-full rounded-full px-5 py-2 relative focus:outline-none focus:border focus:border-green-700" placeholder="টাইপ করুন" name="keyword">


        <input class="-ml-16 absolute align-middle px-5 py-2 bg-green rounded-full text-white border border-green-700" type="submit" value="খুজুন">
        <div class="text-red-700">
            @error('keyword') <span class="error">{{ $message }}</span> @enderror
        </div>
    </form>

    @if (count($mywords)>0)


    <div class="w-1/3 mx-auto p-5 h-12 relative z-50">
        <ul class="absolute top-0 bottom-0 z-50 bg-white w-96 ">
            @foreach ($mywords as $word )
            <li><a class="p-2 bg-white text-blue-700 hover:bg-green-100 hover:text-green-900 block" href="#">{{$word->word}}</a></li>
            @endforeach
        </ul>
    </div>
    @endif



</div>
--}}
    <div class="w-full mx-auto">

        <form class="w-1/3 mx-auto">
            <input type="text" wire:model="term" class="border border-green w-full rounded-full px-5 py-2 relative focus:outline-none focus:border focus:border-green-700" placeholder="টাইপ করুন" name="keyword">

            <div class="text-red-700">
                @error('keyword') <span class="error">{{ $message }}</span> @enderror
            </div>
        </form>
        <div class="w-1/3 mx-auto ">
        <!--
            notice that $term is available as a public
            variable, even though it's not part of the
            data array
        -->
                @if($words->isEmpty())
                    <div class="text-gray-500 text-sm">
                        No matching result was found.
                    </div>
                @else
                    @foreach($words as $word)
                        <div class="">
                            <h3 class="text-xl text-green text-bold block">{{$word->word}}</h3>
                            <p class="text-lg text-gray-500 text-sm block">{{$word->sentence}}</p>
                            <p class="text-gray-500 block">{{$word->description}}</p>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

    </div>

