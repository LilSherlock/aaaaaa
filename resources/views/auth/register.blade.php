<link href="{{ asset('css/register.css') }}" rel="stylesheet">
<x-guest-layout>
    <x-jet-authentication-card class="card shadow-xl">
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        <form method="POST" action="{{ route('register') }}" autocomplete="off">
            @csrf
            <div class="flex flex-col mb-4">
                <x-jet-label for="name" value="{{ __('¿Cual es tu nombre?') }}" />
                <input class="border-black-90 rounded-md py-2 px-3 text-grey-darkest focus:outline-none focus:shadow-outline focus:border-blue-100" type="text" name="name" placeholder="Ingresa tu nombre"  required id="input">
            </div>

            <div class="mb-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full " type="email"  placeholder="Ingresa tu email" name="email" :value="old('email')" required />
            </div>

            <div class="mb-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" placeholder="Ingresa tu password" name="password" required autocomplete="new-password"/>
            </div>

            <div class="mb-4" >
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" id="a" href="{{ route('login') }}">
                    {{ __('¿Ya estas registrado?') }}
                </a>

                <x-jet-button class="ml-4" id="button">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
