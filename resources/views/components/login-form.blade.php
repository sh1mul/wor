<div>
    <form action="{{route('login')}}" method="Post">@csrf
        <div class="">
            <label class="text-green-900" for="email">ইমেইল <span class="text-red"> *</span></label>
            <input class="outline outline-1 border border-green outline-gray-100 px-3 py-2 rounded-full w-full focus:outline focus:outline-1 focus:outline-green" type="text" name="email" id="email" placeholder="Email">
            @error('email')
                <span class="text-red text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="my-2">
            <label class="text-green-900" for="password">পাসওয়ার্ড <span class="text-red"> *</label>
            <input class="outline outline-1 border border-green outline-gray-100 px-3 py-2 rounded-full w-full focus:outline focus:outline-1 focus:outline-green" type="password" name="password" id="password" placeholder="Password">
            @error('password')
                <span class="text-red text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>
        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <button class="bg-red text-white py-1 px-3 ml-2 rounded-full">লগ ইন</button>
        </div>

    </form>
</div>
