<link href="{{ asset('css/register.css') }}" rel="stylesheet">
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="flex flex-col mb-4">
                <x-jet-label for="email" value="{{ __('Ingresa tu email ^^') }}" id="label"/>
                <input class="shadow-md border-transparent rounded-md py-2 px-3 focus:outline-none focus:border-blue-100 focus:outline-none" type="text" name="email" placeholder="email"  required id="input">
            </div>

            <div class="flex flex-col mb-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" id="label" />
                <input class="shadow-md border-transparent rounded-md py-2 px-3 focus:outline-none focus:border-blue-100 focus:shadow-none" type="password" name="password" placeholder="Ingresa tu contraseña"  required id="input">
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" id="label" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recuerdame') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" id="a" href="{{ route('password.request') }}">
                        {{ __('Olvidaste tu contraseña?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4 shadow-md" id="button">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
