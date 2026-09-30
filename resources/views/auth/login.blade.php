@extends("layouts.base")
@section("content")
<section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-purple-100 via-pink-200 to-yellow-100 px-4 py-12">
  <div class="bg-white rounded-3xl shadow-2xl max-w-4xl w-full overflow-hidden transition-transform transform hover:scale-105 duration-300">
    
    <!-- Tab Switcher -->
    <div class="flex bg-gray-50 border-b border-gray-200 rounded-t-xl overflow-hidden shadow-inner">
      <button
        id="loginTab"
        class="w-1/2 py-4 px-6 text-lg font-semibold text-gray-700 hover:text-red-600 transition-all duration-300 focus:outline-none active-tab"
      >
        Login
      </button>
      <button
        id="registerTab"
        class="w-1/2 py-4 px-6 text-lg font-semibold text-gray-700 hover:text-red-600 transition-all duration-300 focus:outline-none"
      >
        Register
      </button>
    </div>

    <!-- Form Wrapper -->
    <div class="p-8 bg-white">
      <!-- Login Form -->
      <form id="loginForm" class="space-y-6 transition-opacity duration-500 opacity-1" method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

      <!-- Register Form (hidden by default) -->
      <form id="registerForm" class="space-y-6 hidden opacity-0 transition-opacity duration-500" method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
    </div>
  </div>

  <!-- Toggle Script -->
  <script>
    const loginTab = document.getElementById('loginTab');
    const registerTab = document.getElementById('registerTab');
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');

    function switchToLogin() {
      loginForm.classList.remove('hidden');
      loginForm.classList.remove('opacity-0');
      loginForm.classList.add('opacity-100');
      registerForm.classList.add('hidden');
      registerForm.classList.remove('opacity-100');
      registerForm.classList.add('opacity-0');
      loginTab.classList.add('text-red-600', 'border-b-4', 'border-red-600');
      loginTab.classList.remove('text-gray-700', 'border-b-2');
      registerTab.classList.remove('text-red-600', 'border-b-4', 'border-red-600');
      registerTab.classList.add('text-gray-700', 'border-b-2');
    }

    function switchToRegister() {
      registerForm.classList.remove('hidden');
      registerForm.classList.remove('opacity-0');
      registerForm.classList.add('opacity-100');
      loginForm.classList.add('hidden');
      loginForm.classList.remove('opacity-100');
      loginForm.classList.add('opacity-0');
      registerTab.classList.add('text-red-600', 'border-b-4', 'border-red-600');
      registerTab.classList.remove('text-gray-700', 'border-b-2');
      loginTab.classList.remove('text-red-600', 'border-b-4', 'border-red-600');
      loginTab.classList.add('text-gray-700', 'border-b-2');
    }

    loginTab.addEventListener('click', switchToLogin);
    registerTab.addEventListener('click', switchToRegister);

    // Initialize default tab
    switchToLogin();
  </script>

  <style>
    /* Optional: Add smooth transition for opacity */
    #loginForm,
    #registerForm {
      transition: opacity 0.5s ease;
    }
  </style>
</section>
    
@endsection
