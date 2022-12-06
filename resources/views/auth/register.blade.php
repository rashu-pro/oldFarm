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
        <span class="section-title-text text-success font-weight-bold">Register</span>
      </h4>
    </div>

    <form method="POST" action="{{ route('register') }}">
      @csrf

      <!-- Name -->
      <div>
        <x-input-label for="name" :value="__('Name *')"/>

        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                      autofocus/>

        <x-input-error :messages="$errors->get('name')" class="mt-2"/>
      </div>

      <!-- surname -->
      <div class="mt-4">
        <x-input-label for="surname" :value="__('Surname *')"/>

        <x-text-input id="surname"
                      class="block mt-1 w-full"
                      type="text"
                      name="surname"
                      :value="old('surname')" required/>

        <x-input-error :messages="$errors->get('surname')" class="mt-2"/>
      </div>

      <!-- address -->
      <div class="mt-4">
        <x-input-label for="address" :value="__('Address *')"/>

        <x-textarea id="address"
                      class="block mt-1 w-full"
                      type="text"
                      name="address"
                      :value="old('address')" required/>

        <x-input-error :messages="$errors->get('address')" class="mt-2"/>
      </div>

      <!-- date of birth -->
      <div class="mt-4">
        <x-input-label for="dateofbirth" :value="__('Date of birth *')"/>

        <x-text-input id="dateofbirth"
                      class="block mt-1 w-full"
                      type="date"
                      name="dateofbirth"
                      :value="old('dateofbirth')" required/>

        <x-input-error :messages="$errors->get('dateofbirth')" class="mt-2"/>
      </div>

      <!-- cell phone -->
      <div class="mt-4">
        <x-input-label for="cellphone" :value="__('Cellphone Number')"/>

        <x-text-input id="cellphone"
                      class="block mt-1 w-full"
                      type="text"
                      name="cellphone"
                      :value="old('cellphone')" />

        <x-input-error :messages="$errors->get('cellphone')" class="mt-2"/>
      </div>

      <!-- job positions -->
      <div class="mt-4">
        <x-input-label for="job_position" :value="_('Job Position')" />
        <select class="choose-item-js w-full py-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                name="job_position">
          <option>Select an Option</option>
          <option value="part-time">Part Time</option>
          <option value="full-time">Full Time</option>
          <option value="unemployed">Unemployed</option>
          <option value="student">Student</option>
        </select>
      </div>

      <!-- Email Address -->
      <div class="mt-4">
        <x-input-label for="email" :value="__('Email *')"/>

        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required/>

        <x-input-error :messages="$errors->get('email')" class="mt-2"/>
      </div>

      <!-- Password -->
      <div class="mt-4">
        <x-input-label for="password" :value="__('Password *')"/>

        <x-text-input id="password" class="block mt-1 w-full"
                      type="password"
                      name="password"
                      required autocomplete="new-password"/>

        <x-input-error :messages="$errors->get('password')" class="mt-2"/>
      </div>

      <!-- Confirm Password -->
      <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirm Password *')"/>

        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                      type="password"
                      name="password_confirmation" required/>

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
      </div>

      <div class="flex items-center justify-end my-4">
        <x-primary-button class="">
          {{ __('Register') }}
        </x-primary-button>
      </div>

      <p class="m-0">
        {{ __('Already registered?') }}
        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
          {{ __('Login here') }}
        </a>
      </p>
    </form>
  </x-auth-card>
</x-guest-layout>
