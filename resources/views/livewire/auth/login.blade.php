<div class="max-w-md w-full mx-auto space-y-8">
    {{-- Header --}}
    <div class="text-center">
        <h2 class="text-3xl font-extrabold text-indigo-700">{{ __('Log in to your account') }}</h2>
        <p class="mt-2 text-sm text-pink-500">{{ __('Enter your email and password below to log in') }}</p>
    </div>

    {{-- Session Status --}}
    <x-auth-session-status class="text-center text-green-600" :status="session('status')" />

    {{-- Login Form --}}
    <form wire:submit="login" class="space-y-5 bg-gradient-to-br from-indigo-100 via-white to-pink-100 p-6 rounded-2xl shadow-md border border-indigo-200">
        {{-- Email --}}
        <div>
            <label for="email" class="block text-sm font-semibold text-indigo-700">{{ __('Email address') }}</label>
            <flux:input
                wire:model="email"
                id="email"
                type="email"
                required
                autofocus
                autocomplete="email"
                placeholder="email@example.com"
                class="rounded-md border border-indigo-300 focus:ring-pink-400"
            />
        </div>

        {{-- Password --}}
        <div class="relative">
            <label for="password" class="block text-sm font-semibold text-indigo-700">{{ __('Password') }}</label>
            <flux:input
                wire:model="password"
                id="password"
                type="password"
                required
                autocomplete="current-password"
                placeholder="{{ __('Password') }}"
                viewable
                class="rounded-md border border-indigo-300 focus:ring-pink-400"
            />
            @if (Route::has('password.request'))
                <flux:link class="absolute end-0 top-0 mt-1 text-sm text-pink-500 hover:underline" :href="route('password.request')" wire:navigate>
                    {{ __('Forgot your password?') }}
                </flux:link>
            @endif
        </div>

        {{-- Remember Me --}}
        <flux:checkbox wire:model="remember" :label="__('Remember me')" class="text-indigo-600" />

        {{-- Submit --}}
        <div>
            <flux:button type="submit" class="w-full bg-gradient-to-r from-pink-500 to-indigo-500 text-white font-semibold hover:from-indigo-500 hover:to-pink-500 transition duration-200 rounded-md shadow-md">
                {{ __('Log in') }}
            </flux:button>
        </div>
    </form>

    {{-- Register Redirect --}}
    @if (Route::has('register'))
        <div class="text-center text-sm text-indigo-700">
            {{ __('Don\'t have an account?') }}
            <flux:link :href="route('register')" wire:navigate class="font-medium text-pink-600 hover:underline">
                {{ __('Sign up') }}
            </flux:link>
        </div>
    @endif
</div>
