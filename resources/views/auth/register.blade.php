<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="">
                <label class="text-green-900" for="email">পূর্ণ নাম  <span class="text-red"> *</label>
                <input class="outline outline-1 border border-green outline-gray-100 px-3 py-2 rounded-full w-full focus:outline focus:outline-1 focus:outline-green" type="text" name="name" id="name" placeholder="Email">
                @error('name')
                    <span class="text-red text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="">
                <label class="text-green-900" for="email">ইমেইল  <span class="text-red"> *</label>
                <input class="outline outline-1 border border-green outline-gray-100 px-3 py-2 rounded-full w-full focus:outline focus:outline-1 focus:outline-green" type="text" name="email" id="email" placeholder="Email">
                @error('email')
                    <span class="text-red text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="my-2">
                <label class="text-green-900" for="password">পাসওয়ার্ড  <span class="text-red"> *</label>
                <input class="outline outline-1 border border-green outline-gray-100 px-3 py-2 rounded-full w-full focus:outline focus:outline-1 focus:outline-green" type="password" name="password" id="password" placeholder="Password">
                @error('password')
                    <span class="text-red text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="my-2">
                <label class="text-green-900" for="confirm_password">পাসওয়ার্ড নিশ্চিত করুন <span class="text-red"> *</label>
                <input class="outline outline-1 border border-green outline-gray-100 px-3 py-2 rounded-full w-full focus:outline focus:outline-1 focus:outline-green" type="password" name="password_confirmation" id="confirm_password" placeholder="username">
                @error('password_confirm')
                    <span class="text-red text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="block mt-4">
                <label for="username" class="inline-flex items-center">ইউজারনেম  <span class="text-red"> *</label>
                <input class="outline outline-1 border border-green outline-gray-100 px-3 py-2 rounded-full w-full focus:outline focus:outline-1 focus:outline-green" type="text" name="username" id="username" placeholder="Password">
                @error('username')
                    <span class="text-red text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-lg text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('একাউন্ট আছে? লগিন করুন') }}
                    </a>
                @endif

                <button class="bg-red text-white py-1 px-3 ml-2 rounded-full">রেজিষ্টার</button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
