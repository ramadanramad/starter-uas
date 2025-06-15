<div class="max-w-md w-full mx-auto space-y-8">
    {{-- Header --}}
    <div class="text-center">
        <h2 class="text-3xl font-extrabold text-indigo-700">{{ __('Create an account') }}</h2>
        <p class="mt-2 text-sm text-pink-500">{{ __('Enter your details below to create your account') }}</p>
    </div>

    {{-- Session Status --}}
    <x-auth-session-status class="text-center text-green-600" :status="session('status')" />

    {{-- Form --}}
    <form wire:submit="register" class="space-y-5 bg-gradient-to-br from-indigo-100 via-white to-pink-100 p-6 rounded-2xl shadow-md border border-indigo-200">
        {{-- Name --}}
        <div>
            <label for="name" class="block text-sm font-semibold text-indigo-700">{{ __('Name') }}</label>
            <flux:input
                wire:model="name"
                type="text"
                id="name"
                required
                autofocus
                autocomplete="name"
                placeholder="{{ __('Full name') }}"
                class="rounded-md border border-indigo-300 focus:ring-pink-400"
            />
        </div>

        {{-- Email --}}
        <div>
            <label for="email" class="block text-sm font-semibold text-indigo-700">{{ __('Email address') }}</label>
            <flux:input
                wire:model="email"
                type="email"
                id="email"
                required
                autocomplete="email"
                placeholder="email@example.com"
                class="rounded-md border border-indigo-300 focus:ring-pink-400"
            />
        </div>

        {{-- Password --}}
        <div>
            <label for="password" class="block text-sm font-semibold text-indigo-700">{{ __('Password') }}</label>
            <flux:input
                wire:model="password"
                type="password"
                id="password"
                required
                autocomplete="new-password"
                placeholder="{{ __('Password') }}"
                viewable
                class="rounded-md border border-indigo-300 focus:ring-pink-400"
            />
        </div>

        {{-- Confirm Password --}}
        <div>
            <label for="password_confirmation" class="block text-sm font-semibold text-indigo-700">{{ __('Confirm password') }}</label>
            <flux:input
                wire:model="password_confirmation"
                type="password"
                id="password_confirmation"
                required
                autocomplete="new-password"
                placeholder="{{ __('Confirm password') }}"
                viewable
                class="rounded-md border border-indigo-300 focus:ring-pink-400"
            />
        </div>

        {{-- Submit --}}
        <div>
            <flux:button type="submit" class="w-full bg-gradient-to-r from-pink-500 to-indigo-500 text-white font-semibold hover:from-indigo-500 hover:to-pink-500 transition duration-200 rounded-md shadow-md">
                {{ __('Create account') }}
            </flux:button>
        </div>
    </form>

    {{-- Link ke login --}}
    <div class="text-center text-sm text-indigo-700">
        {{ __('Already have an account?') }}
        <flux:link :href="route('login')" wire:navigate class="font-medium text-pink-600 hover:underline">
            {{ __('Log in') }}
        </flux:link>
    </div>
</div>
