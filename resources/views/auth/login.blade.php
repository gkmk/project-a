<x-guest-layout>
    <x-authentication-card>
        <h1 class="text-3xl mb-4">{{__('Welcome back!')}}</h1>

        <p class="mb-4">
            {{_("Don't have an account?")}}
            <a href="{{ route('register') }}" class="text-primary-500 underline">{{__('Register')}}</a>
        </p>

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                {{--                <x-label for="email" value="{{ __('Email') }}" />--}}
                <x-input id="email" class="block mt-1 w-full" placeholder="{{ __('Email') }}" type="email" name="email"
                         :value="old('email')" required autofocus autocomplete="username"/>
                <x-input-error for="email"></x-input-error>
            </div>

            <div class="mt-4">
                {{--                <x-label for="password" value="{{ __('Password') }}" />--}}
                <x-input id="password" class="block mt-1 w-full" placeholder="{{ __('Password') }}" type="password"
                         name="password" required autocomplete="current-password"/>
                <x-input-error for="password"></x-input-error>
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex flex-col items-center mt-8">
                <x-button class="w-full mb-2">
                    {{ __('Log in') }}
                </x-button>

            @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
