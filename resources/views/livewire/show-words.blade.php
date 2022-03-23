
<div class="container mx-auto grid grid-cols-4 gap-3">
    @foreach ($words as $word)
        <div class="p-4 bg-white border border-sm shadow-xl">
            <a href="{{route('single.word',[$word->word])}}">
                <div class="img">
                    @if ($word->image != NULL)
                        @if (Storage::disk('public')->exists($word->image))
                        <img class="h-80 w-full object-cover" src="{{asset('storage/'.$word->image)}}">
                        @endif

                    @else
                        <div class="h-80 flex items-center justify-center">
                            <h2 class="text-8xl">{{$word->word}}</h2>
                        </div>
                    @endif

                </div>
                <div class="my-2">
                    <p class="text-4xl text-green"><strong>{{$word->word}}</strong> <span class="text-lg text-black">প্রমিত: {{$word->standard->word}}, </span><span class="text-lg text-blue-700">পদ: {{$word->part->name}}</span></p>
                </div>
            </a>

            <div class="text-xl flex text-red items-center mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="text-md">{{$word->division->name}}-</span>
                <span class="text-md">{{$word->district->name}}-</span>
                <span class="text-md">{{$word->upazila->name}}-</span>
                <span class="text-md">{{$word->union->name}}</span>
            </div>
        </div>
    @endforeach
    <div class="flex justify-between items-center">
        {{$words->links()}}
    </div>
</div>
