<div class="container mx-auto">
    <div class="grid grid-cols-4 gap-20">
        <div class="shadow-2xl h-min sticky top-0 overflow-y-scroll border pt-5">
            @if ($dis->avatar != NULL)
                @if (Storage::disk('public')->exists($dis->avatar))
                <img class="w-36 h-36 rounded-full border mx-auto object-cover border-red p-1" src="{{asset('storage/'.$dis->avatar)}}">
                @endif
            @else
                <img class="w-36 h-36 rounded-full border mx-auto object-cover border-red p-1" src="{{asset('images/'.$dis->slug.'-district.jpg')}}">
            @endif
            <div class="text-center px-5">
                <h1 class="text-green font-bold text-2xl"><a href="{{route('district.page',[$div->slug, $dis->slug])}}">{{$dis->name}} জেলা</a></h1>
                <h2 class="text-lg text-left">{{$dis->about}}</h2>
            </div>
            <hr class="my-5">
            <div class="px-5 py-2">
                <div class="flex justify-between items-center font-bold text-xl text-green">
                    <p>শব্দ সংখ্যা</p>
                    <div class="flex justify-center items-center rounded-full text-sm py-1 text-red">
                       {{count($dis->regionals)}}
                    </div>
                </div>
            </div>

            <div class="px-5 py-2">
                <div class="flex justify-between items-center font-bold text-xl text-green">
                    <p>মন্তব্য পেয়েছেন</p>
                    <div class="flex justify-center items-center rounded-full text-sm py-1 text-red">
                       ddd
                    </div>
                </div>
            </div>

            <div class="px-5 py-2">
                <div class="flex justify-between items-center font-bold text-xl text-green">
                    <p>শব্দ সংখ্যা</p>
                    <div class="flex justify-center items-center rounded-full text-sm py-1 text-red">
                       {{count($dis->regionals)}}
                    </div>
                </div>
            </div>

            <div class="px-5 py-2">
                <div class="flex justify-between items-center font-bold text-xl text-green">
                    <p>শব্দ সংখ্যা</p>
                    <div class="flex justify-center items-center rounded-full text-sm py-1 text-red">
                       {{count($dis->regionals)}}
                    </div>
                </div>
            </div>
            <div class="bg-green text-xl text-white flex justify-between items-center px-5 py-1">
                <span><a href="{{$dis->facebook}}"><i class="fa-brands fa-facebook"></i></a></span>
                <span><a href="{{$dis->facebook}}"><i class="fa-brands fa-facebook"></i></a></span>
                <span><a href="{{$dis->facebook}}"><i class="fa-brands fa-facebook"></i></a></span>
                <span><a href="{{$dis->facebook}}"><i class="fa-brands fa-facebook"></i></a></span>
            </div>

        </div>

        <div class="col-span-2 border shadow-x-lg p-5">
           @empty($regionals)
               কোন শব্দ যুক্ত করেননি
            @else
            @foreach ($regionals as $word)
            <div class="mb-10 shadow-xl">

                <div class="flex justify-between border bg-green-50 items-center px-2">
                    <div class="title">
                        <h1 class="text-4xl font-bold text-green"><a href="{{route('single.word',[$word->word])}}">{{$word->word}}</a> <span class="text-2xl text-black font-thin">প্রমিত: {{$word->standard->word}}</h1>
                        <h2 class="text-xl italic text-red">"{{$word->sentence}}"</h2>

                    </div>
                    <div class="user flex justify-end items-center gap-3 text-xl">
                        <a class="text-green font-bold"href="{{route('user.profile',[$word->user->username])}}">{{$word->user->name}}
                         @if ($word->user->avatar != NULL)
                            @if (Storage::disk('public')->exists($word->user->avatar))
                            <img class="w-12 h-12 shadow-2xl rounded-full object-cover inline-block p-1 border border-green" src="{{asset('storage/'.$word->user->avatar)}}" alt="{{$word->word}}">
                            @endif
                        @else
                            <img class="w-12 h-12 rounded-full object-cover p-1 border border-green" src="{{asset('images/tree.png')}}">
                        @endif
                        </a>
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </div>
                </div>
                <div class="bg-green-50">
                    @if ($word->image != NULL)
                    <a href="{{route('single.word',[$word->word])}}">
                        @if (Storage::disk('public')->exists($word->image))
                            <img class="w-full shadow-md bg-white object-cover" src="{{asset('storage/'.$word->image)}}" alt="{{$word->word}}" style="max-height: 460px">
                            @endif

                        @else
                            <div class="h-80 flex items-center bg-red-50 justify-center border border-red-100">
                                <h2 class="text-8xl text-red">{{$word->word}}</h2>
                            </div>
                        @endif
                    </a>
                </div>
                <div class="flex justify-between text-2xl py-2 px-4 text-gray-500 bg-green-50">
                    <span><i class="text-2xl px-2 fa-solid text-red fa-heart"></i>{{count($word->likes)}}</span>

                    <x-add-word-plus/>
                    <x-share-icon/>
                </div>
            </div>
            @endforeach
            {{$regionals->links()}}
           @endempty

        </div>
        <div class="">
            আমার সোনার বাংলা আমি তোমায় ভালবাসি, চিরদিন তোমার আকাশ, তোমার বাতাস, আমার প্রাণে বাজায় বাশি, সোনার বাংলা আমি তোমায় ভালবাসি।
        </div>
    </div>
</div>
