@extends('layouts.auth')

@section('title', 'Register, fill out the form below to register.')

@section('content')

  <!-- Login Authentication View Start -->
    <div id="register" class="flex justify-center items-center bg-gray-200 h-screen">

      <!-- Auth Card Component Start -->
        <div class="w-2/5 xl:w-1/5 sm:w-3/5 xs:w-4/5">

          <!-- Logo Container Start -->
            <div class="flex px-2 items center py-6">
              <span class="text-6xl text-purple-700"><i class="fas fa-user-astronaut"></i></span>
              <div class="pl-3">
                <h1 class="text-3xl text-gray-800">{{ __('Register') }}</h1>
                <p class="font-light text-gray-500">{{ __('Please fill out the form below to register an account.') }}</p>
              </div>
            </div>
          <!-- Logo Container End -->

          <!-- Authentication Form Start -->
            <div class="px-4 py-4 bg-white shadow-lg rounded">
              <form id="register_form" action="{{ route('register') }}" method="post" role="form">
                @csrf
                <div class="py-2">
                  <label for="name" class="block py-2 text-sm font-light text-gray-700">
                    <span class="text-gray-600"><i class="fas fa-envelope"></i></span>
                    <span class="px-2">{{ __('Email Address') }}</span>
                    @error('name')
                      <span class="text-red-600 font-light uppercase" style="font-size: 8px">{{ __('* required') }}</span>
                    @enderror
                  </label>
                  <input type="text" id="name" name="name" class="block px-4 py-2 w-full rounded bg-gray-100 font-light border focus:outline-none @error('name') border-red-500 @enderror" placeholder="{{ __('Enter an Email Address') }}" />
                  @error ('name')
                    <div class="py-2 px-3 mt-3 bg-red-200 rounded-r border-l-4 border-red-700">
                      <p class="text-red-700 font-light text-sm"><span class="pr-2 text-red-800"><i class="fas fa-exclamation-circle"></i></span>{{ $message }}</p>
                    </div>
                  @enderror
                </div>
                <div class="py-2">
                  <label for="email" class="block py-2 text-sm font-light text-gray-700">
                    <span class="text-gray-600"><i class="fas fa-envelope"></i></span>
                    <span class="px-2">{{ __('Email Address') }}</span>
                    @error('email')
                      <span class="text-red-600 font-light uppercase" style="font-size: 8px">{{ __('* required') }}</span>
                    @enderror
                  </label>
                  <input type="email" id="email" name="email" class="block px-4 py-2 w-full rounded bg-gray-100 font-light border focus:outline-none @error('email') border-red-500 @enderror" placeholder="{{ __('Enter an Email Address') }}" />
                  @error ('email')
                    <div class="py-2 px-3 mt-3 bg-red-200 rounded-r border-l-4 border-red-700">
                      <p class="text-red-700 font-light text-sm"><span class="pr-2 text-red-800"><i class="fas fa-exclamation-circle"></i></span>{{ $message }}</p>
                    </div>
                  @enderror
                </div>
                <div class="py-2">
                  <label for="password_input" class="block py-2 text-sm font-light text-gray-700">
                    <span class="text-gray-600"><i class="fas fa-lock"></i></span>
                    <span class="px-2">{{ __('Password') }}</span>
                    @error('password')
                      <span class="text-red-600 font-light uppercase" style="font-size: 8px">{{ __('* required') }}</span>
                    @enderror
                  </label>
                  <input type="password" id="password_input" name="password" value="It Works!" class="block px-4 py-2 w-full rounded bg-gray-100 font-light border focus:outline-none @error('password') border-red-500 @enderror" placeholder="{{ __('Enter your Password') }}" />
                  <div id="input_controls" class="flex justify-end pt-2">
                    <button class="text-xs text-purple-700 hover:text-purple-700 focus:outline-none" role="reveal-password" onclick="show_password()"><i class="fas fa-eye pr-2"></i>Show Password</button>
                  </div>
                  @error('password')
                    <div class="py-2 px-3 mt-2 bg-red-200 rounded-r border-l-4 border-red-700">
                      <p class="text-red-700 font-light text-sm"><span class="pr-2 text-red-800"><i class="fas fa-exclamation-circle"></i></span>{{ $message }}</p>
                    </div>
                  @enderror
                </div>

                <div class="flex justify-between items-center w-full py-2">
                  <div class="py-2">
                    <label for="remember" class="flex items-center">
                      <input type="checkbox" id="remember" name="remember" />
                      <span class="pl-2 font-light text-gray-800 text-sm">{{ __('Remember Me') }}</span>
                    </label>
                  </div>
                  <div class="py-2">
                    <button class="px-3 py-2 bg-purple-600 text-purple-50 font-light rounded w-full hover:bg-purple-800 hover:text-purple-100 focus:outline-none appearance-none">{{ __('Login') }}</button>
                  </div>
                </div>

              </form>
            </div>
          <!-- Authentication Form End -->

          <!-- Auth Links Start -->
            <div id="auth_link" class="flex justify-between mt-4">
              <a href="" class="block py-3 font-light text-gray-500">{{ __('Forgot your password?') }}</a>
              <a href="" class="block py-3 font-light text-gray-500">{{ __('Dont have an Account?') }}</a>
            </div>
          <!-- Auth Links End -->

        </div>
      <!-- Auth Card Component End -->
    </div>
  <!-- Login Authentication View End -->

@endsection

@section('scripts')
  <script type="text/javascript">
    /**
     * ===========================
     * Authentication: Login View
     * ===========================
     *
     * @description The javascript below is specific to the login authentication view.
     * @package Momentor
     * @author Tristan Elliott
     *
     */
  </script>
@endsection
