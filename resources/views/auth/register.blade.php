<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="mt-8 grid grid-cols-6 gap-6">
        @csrf

        <!-- Name -->
        <div class="col-span-6 sm:col-span-3">
            <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
            <input type="text" id="name" name="name" class="mt-1 w-full rounded-md border-black bg-white text-sm text-gray-700 shadow-sm" value="{{ old('name') }}" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        {{-- Username --}}
        <div class="col-span-6 sm:col-span-3">
          <label for="username" class="block text-sm font-medium text-gray-700">
            Username
          </label>

          <input type="text" id="username" name="username" class="mt-1 w-full rounded-md border-black bg-white text-sm text-gray-700 shadow-sm" required/>
          <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="col-span-6">
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

        <!-- Confirm Password -->
        <div class="col-span-6 sm:col-span-3">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password </label>

            <input
              type="password"
              id="password_confirmation"
              name="password_confirmation"
              class="mt-1 w-full rounded-md border-black bg-white text-sm text-gray-700 shadow-sm"
              required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

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
              Create an account
            </button>

            <p class="mt-4 text-sm text-gray-500 sm:mt-0">
              Already have an account?
              <a href="{{ route('login') }}" class="text-gray-700 underline">Log in</a>.
            </p>
        </div>

        {{-- <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div> --}}
    </form>
</x-guest-layout>
