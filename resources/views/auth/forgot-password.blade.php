<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Olvidaste tu contraseña? No hay problema. Podemos recuperarlo!') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" novalidate>
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="flex items-center justify-between mt-4">
            {{-- componente link mio para poder reutilizarlo en todo los lugares que quiera --}}
            <x-link :href="route('register')">
                {{ __('Crear Cuenta?') }}
            </x-link>

            <x-link :href="route('login')">
                {{ __('Iniciar Sesión') }}
            </x-link>
        </div>

        <x-primary-button class="mt-3 w-full justify-center">
            {{ __('Enviar Email de Recuperación') }}
        </x-primary-button>

    </form>
</x-guest-layout>
