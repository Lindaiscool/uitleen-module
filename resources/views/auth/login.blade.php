<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img height="90px" width="90px" src="{{ url('pics/logotje.png') }}"/>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" style="color:rgb(158, 158, 158);" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" style="background-color:rgb(16, 16, 16); color:rgb(158, 158, 158);" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" style="color:rgb(158, 158, 158);" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" style="background-color:rgb(16, 16, 16); color:rgb(158, 158, 158);" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox style="background-color:rgb(16, 16, 16);" id="remember_me" name="remember" />
                    <span style="color:rgb(158, 158, 158);" class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}" style="color:rgb(158, 158, 158);">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4" style="background-color: rgba(102, 102, 102, 0.411);">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
