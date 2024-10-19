<x-guest-layout>
    <x-authentication-card>
        <h1 class="text-3xl mb-4">{{__('Create an account')}}</h1>

        <p class="mb-4">
            {{_('Already have an account?')}}
            <a href="{{ route('login') }}" class="text-primary-500 underline">{{__('Log in')}}</a>
        </p>

        <x-validation-errors class="mb-4"/>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                {{--                <x-label for="name" value="{{ __('Name') }}"/>--}}
                <x-input id="name" placeholder="{{ __('Name') }}" class="block mt-1 w-full" type="text" name="name"
                         :value="old('name')" required autofocus autocomplete="name"/>
            </div>

            <div class="mt-4">
                {{--                <x-label for="email" value="{{ __('Email') }}"/>--}}
                <x-input id="email" placeholder="{{ __('Email') }}" class="block mt-1 w-full" type="email" name="email"
                         :value="old('email')" required autocomplete="email"/>
            </div>

            <div class="mt-4">
                {{--                <x-label for="password" value="{{ __('Password') }}"/>--}}
                <x-input id="password" placeholder="{{ __('Password') }}" class="block mt-1 w-full" type="password"
                         name="password"
                         required autocomplete="new-password"/>
            </div>

            <div class="mt-4">
                {{--                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}"/>--}}
                <x-input id="password_confirmation" placeholder="{{ __('Confirm Password') }}" class="block mt-1 w-full"
                         type="password" name="password_confirmation" required autocomplete="new-password"/>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required/>

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center mt-8">
                <x-button class="w-full">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
