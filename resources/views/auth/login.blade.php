<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="mt-8 grid grid-cols-6 gap-6">
        @csrf

        <!-- Email Address -->
        <div class="col-span-6 sm:col-span-3">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input
              type="email"
              id="email"
              name="email"
              class="mt-1 w-full rounded-md border-black bg-white text-sm text-gray-700 shadow-sm"
              value="{{ old('email') }}"
              required
              autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="col-span-6 sm:col-span-3">
            <label for="password" class="block text-sm font-medium text-gray-700">Password </label>

            <input
              type="password"
              id="password"
              name="password"
              class="mt-1 w-full rounded-md border-black bg-white text-sm text-gray-700 shadow-sm"
              required
              autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        {{-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div> --}}

        <div class="col-span-6">
            <p class="text-sm text-gray-500">
              By creating an account, you agree to our
              <a href="#" class="text-gray-700 underline"> terms and conditions </a>
              and
              <a href="#" class="text-gray-700 underline">privacy policy</a>.
            </p>
        </div>

        <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
            <button 
              type="submit"
              class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500"
            >
              Log in
            </button>

            <p class="mt-4 text-sm text-gray-500 sm:mt-0">
              Don't have an account yet?
              <a href="{{ route('register') }}" class="text-gray-700 underline">Registrasi</a>.
            </p>
        </div>

        {{-- <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div> --}}
    </form>
</x-guest-layout>
