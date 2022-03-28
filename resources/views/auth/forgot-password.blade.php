<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="">
                <label class="text-green-900" for="email">ইমেইল</label>
                <input class="outline outline-1 border border-green outline-gray-100 px-3 py-2 rounded-full w-full focus:outline focus:outline-1 focus:outline-green" type="text" name="email" id="email" placeholder="Email">
                @error('email')
                    <span class="text-red text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="bg-red text-white py-1 px-3 ml-2 rounded-full">ইমেইল পাঠান</button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
