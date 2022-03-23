<section class="my-5">
    <div class="container mx-auto">
        <div class="grid grid-cols-4 gap-20 relative">
            {{-- Sidebar/Divisional Word --}}
            <div class="bg-green-50 border h-screen sticky top-10 block overflow-hidden  bottom-0">
                <h3 class="text-2xl  text-red p-2 bg-green-100"><span class="text-green underline">{{$word->division->name}}</span> বিভাগের অন্যান্য শব্দ</h3>
                <ul class="my-5 bg-green-50">
                    @foreach ($division_word as $relative)
                        <li class=" border-b px-2 py-2"><a class="text-2xl text-green-900" href="{{route('single.word',[$relative->word])}}">{{$relative->word}}</a> প্রমিতঃ {{$relative->standard->word}}</li>
                    @endforeach

                </ul>
            </div>
            {{--End Sidebar/Divisional Word --}}
            {{-- Main/content Word --}}
            <div class="col-span-2 border border-1 shadow-xl p-3 bg-white">
                <div class="flex justify-between border bg-green-50 items-center px-2  mb-3">
                    <div class="title">
                        <h1 class="text-4xl font-bold text-green">{{$word->word}} <span class="text-2xl text-black font-thin">প্রমিত: {{$word->standard->word}}</h1>
                        <h2 class="text-xl italic text-red">"{{$word->sentence}}"</h2>

                    </div>
                    <div class="user flex justify-end items-center gap-3 text-xl">
                        <a class="text-green font-bold"href="#">{{$word->user->name}}
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
                <div class="">
                    @if ($word->image != NULL)
                        @if (Storage::disk('public')->exists($word->image))
                        <img class="w-full h-100 shadow-md bg-white object-cover" src="{{asset('storage/'.$word->image)}}" alt="{{$word->word}}">
                        @endif

                    @else
                        <div class="h-80 flex items-center bg-red-50 justify-center border border-red-100">
                            <h2 class="text-8xl text-red">{{$word->word}}</h2>
                        </div>
                    @endif
                    <div class="flex justify-between text-blue-700 text-lg p-2 bg-white">
                        <span>এক সপ্তাহ আগে</span>
                        <div class="flex justify-end">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                              </svg> <span>৩০ বার দেখা হয়েছে</span>
                        </div>
                    </div>
                    <hr class="h-1">
                    <div class="flex justify-between text-2xl py-2 px-4 text-gray-500">
                        @auth
                        <livewire:like :word="$word"/>
                        @else
                        <a href="{{route('login')}}" ><i class="fa-solid fa-thumbs-up"></i></a>
                        @endauth

                        <span ><i class="fa-solid fa-comment"></i></span>
                        <span ><i class="fa-solid fa-share-nodes"></i></span>
                    </div>
                    <hr class="h-1">
                </div>
                <div class="bg-green-50 leading-3 py-2">
                    <div class="flex justify-start gap-3 items-center">
                            <a class="bg-green-50 text-green-900 p-1 shadow-sm hover:text-white hover:bg-green hover:ease-in duration-300 shadow-gray-400 rounded-full" href="#">পদঃ {{$word->part->name}}</a>
                            <a class="bg-green-50 text-green-900 p-1 shadow-sm hover:text-white hover:bg-green hover:ease-in duration-300 shadow-gray-400 rounded-full" href="#">ইংরেজীঃ {{$word->english}}</a>
                    </div>
                    <div class="my-10 px-2">
                        <p class="text-xl place-items-end">{{$word->description}}</p>
                    </div>
                    <div class="flex justify-start gap-3 items-center">
                        <a class="bg-green-50 text-green-900 p-1 shadow-sm hover:text-white hover:bg-green hover:ease-in duration-300 shadow-gray-400 rounded-full" href="#">{{$word->division->name}}</a>
                        <a class="bg-green-50 text-green-900 p-1 shadow-sm hover:text-white hover:bg-green hover:ease-in duration-300 shadow-gray-400 rounded-full" href="#">{{$word->district->name}}</a>
                        <a class="bg-green-50 text-green-900 p-1 shadow-sm hover:text-white hover:bg-green hover:ease-in duration-300 shadow-gray-400 rounded-full" href="#">{{$word->upazila->name}}</a>
                        <a class="bg-green-50 text-green-900 p-1 shadow-sm hover:text-white hover:bg-green hover:ease-in duration-300 shadow-gray-400 rounded-full" href="#">{{$word->union->name}}</a>
                    </div>

                </div>
                <div class="my-5">
                    <h3 class="text-2xl text-green-700 underline decoration-1 decoration-red underline-offset-8 my-5">অন্যান্য স্থানে এই শব্দ</h3>
                    <div class="text-xl bg-green-50 py-0 px-2  border">
                        @if (count($others)>0)
                            @foreach ($others as $other)
                            <div class="flex justify-between">
                                <p>{{$other->division->name}}-{{$other->district->name}}-{{$other->upazila->name}}-{{$other->union->name}}</p>
                                <span class="text-2xl">{{$other->word}}</span>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                {{-- comments/ Word --}}
                <div class="bg-gray-100 p-2">
                    {{-- comment form/ Word --}}
                    <livewire:post-comment :word="$word"/>
                </div>
                {{-- End comments/ Word --}}
                @if (count($word->comments)>0)
                    @foreach ($word->comments as $comment)
                <div class="p-1 flex justify-between gap-2 text-lg">

                    <div class="col-span-2 flex items-center">
                        <a class="text-green" href="#">
                            @if ($comment->user->avatar != NULL)
                                @if (Storage::disk('public')->exists($comment->user->avatar))
                                <img class="w-8 h-8 rounded-full object-cover border border-red p-1 inline-block" src="{{asset('storage/'.$comment->user->avatar)}}" alt="{{$comment->user->name}}">
                                @endif
                            @else
                            <img class="w-8 h-8 rounded-full p-1 object-cover border border-red inline-block" src="{{asset('images/tree.png')}}" alt="{{$comment->user->name}}">
                            @endif{{$comment->user->name}}
                        </a>
                    </div>
                    <div class="grow flex items-center">
                        <p class="block">{{$comment->comment}}</p>
                    </div>
                </div>
                @endforeach

                @endif
            </div>
            <div class="p-2 border sticky top-0 h-screen shadow-2xl overflow-hidden  bottom-0">
                বিজ্ঞাপন
                @if (count($others)>0)
                    @foreach ($others as $other)
                        {{$other->division->name}}
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>
