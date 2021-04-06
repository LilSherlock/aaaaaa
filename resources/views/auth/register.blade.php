<link href="{{ asset('css/register.css') }}" rel="stylesheet">
<x-guest-layout>
    <x-jet-authentication-card class="card" id="card">
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        <form method="POST" action="{{ route('register') }}" autocomplete="off">
            @csrf
            <div class="flex flex-col mb-4">
                <x-jet-label for="name" value="{{ __('Nombre') }}" id="label"/>
                <input class="shadow-md border-transparent rounded-md py-2 px-3 focus:outline-none focus:border-blue-100 focus:outline-none" type="text" name="name" placeholder="Ingresa tu nombre"  required id="input">
            </div>

            <div class="flex flex-col mb-4">
                <x-jet-label for="email" value="{{ __('Email') }}" id="label" />
                <input class="shadow-md border-transparent rounded-md py-2 px-3 focus:outline-none focus:border-blue-100 focus:shadow-none" type="text" name="email" placeholder="Ingresa tu email"  required id="input">
            </div>
            <div class="flex flex-col mb-4">
                <x-jet-label for="phone" value="{{ __('Celular') }}" id="label" />
                <input class="shadow-md border-transparent rounded-md py-2 px-3 focus:outline-none focus:border-blue-100 focus:shadow-none" type="text" name="phone" placeholder="Ingresa tu celular"  required id="input">
            </div>

            <div class="flex flex-col mb-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" id="label"/>
                <input class="shadow-md border-transparent rounded-md py-2 px-3 focus:outline-none focus:border-blue-100 focus:shadow-none" type="password" name="password" placeholder="Ingresa tu contraseña"  required id="input">
            </div>

            <div class="flex flex-col mb-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirma tu contraseña') }}" id="label"/>
                <input class="shadow-md border-transparent rounded-md py-2 px-3 focus:outline-none focus:border-blue-100 focus:shadow-none" type="password" name="password_confirmation" placeholder="Contraseña"  required id="input">
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

                <x-jet-button class="ml-4 shadow-md" id="button">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
