<x-guest-layout>
  <x-auth-card>

    <x-slot name="logo">
      <a href="/">
        <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
      </a>
    </x-slot>

    <!-- //=== FORM TITLE -->
    <div class="text-center mt-3 mb-3">
      <h4 class="section-title">
        <span class="section-title-text text-success font-weight-bold">Login</span>
      </h4>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"/>

    <form method="POST" action="{{ route('login') }}">
      @csrf

      <!-- Email Address -->
      <div>
        <x-input-label for="email" :value="__('Email')"/>

        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                      autofocus/>

        <x-input-error :messages="$errors->get('email')" class="mt-2"/>
      </div>

      <!-- Password -->
      <div class="mt-4">
        <x-input-label for="password" :value="__('Password')"/>

        <x-text-input id="password" class="block mt-1 w-full"
                      type="password"
                      name="password"
                      required autocomplete="current-password"/>

        <x-input-error :messages="$errors->get('password')" class="mt-2"/>
      </div>

      <div class="d-sm-flex align-items-center justify-content-between my-4">
        <!-- Remember Me -->
        <div class="block m-0">
          <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox"
                   class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                   name="remember">
            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
          </label>
        </div>

        <!-- Forgot password? -->
        <div class="">
          @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
              {{ __('Forgot your password?') }}
            </a>
          @endif
        </div>
      </div>

      <div class="btn-holder mb-4">
        <x-primary-button class="">
          {{ __('Log in') }}
        </x-primary-button>
      </div>

      <p class="m-0">
        {{ __('Not a registered member?') }}
        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
          {{ __('Register here') }}
        </a>
      </p>
    </form>
  </x-auth-card>
</x-guest-layout>
