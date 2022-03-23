
<nav class="px-2  dark:border-gray-700 flex items-center">
    <ul class="w-full flex justify-center items-center">
        <li><a class="block mx-5 text-xl text-green" href="{{route('home')}}">হোম</a></li>
        <li class="group relative dropdown inline px-4">
            <a class="block mx-5 text-xl text-green">বিভাগীয় শব্দ <svg class="ml-2 w-4 h-4 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></a>
            <div class="absolute hidden h-auto  pt-4 group-hover:block group-hover:z-10 w-48">
                <ul class="block w-full bg-green-50 shadow font-bold text-green px-2 py-5 mt-0">
                    <li class="py-1"><a class="block cursor-pointer px-2 py-2 hover:bg-green-50" href="{{route('division',['dhaka'])}}">ঢাকা</a></li>
                    <li class="py-1"><a class="block cursor-pointer px-2 py-2 hover:bg-green-50" href="{{route('division',['chattragram'])}}">চট্রগ্রাম</a></li>
                    <li class="py-1"><a class="block cursor-pointer px-2 py-2 hover:bg-green-50" href="{{route('division',['rajshahi'])}}">রাজশাহী</a></li>
                    <li class="py-1"><a class="block cursor-pointer px-2 py-2 hover:bg-green-50" href="{{route('division',['khulna'])}}">খুলনা</a></li>
                    <li class="py-1"><a class="block cursor-pointer px-2 py-2 hover:bg-green-50" href="{{route('division',['mymensingh'])}}">ময়মনসিংহ</a></li>
                    <li class="py-1"><a class="block cursor-pointer px-2 py-2 hover:bg-green-50" href="{{route('division',['silhet'])}}">সিলেট</a></li>
                    <li class="py-1"><a class="block cursor-pointer px-2 py-2 hover:bg-green-50" href="{{route('division',['rangpur'])}}">রংপুর</a></li>
                    <li class="py-1"><a class="block cursor-pointer px-2 py-2 hover:bg-green-50" href="{{route('division',['barisal'])}}">বরিশাল</a></li>
                </ul>
            </div>
        </li>
        <li><a class="block mx-5 text-xl text-green " href="#">শিকড়ের গল্প</a></li>
        <li><a class="block mx-5 text-xl text-green " href="#">শিকড়ের গান</a></li>
        <li><a class="block mx-5 text-xl text-green" href="#">প্রমিত</a></li>
        <li><a class="block mx-5 text-xl text-green " href="#">ইংরেজী</a></li>
    </ul>
</nav>
