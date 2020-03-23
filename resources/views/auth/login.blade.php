@extends('layouts.form')

@section('form-content')

<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full">
        <div>
            <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
                {{ __('Login') }}
            </h2>
        </div>

        <!-- Form Start -->
        <form class="mt-8" action="{{ route('login') }}" method="POST">
            <!-- CSRF -->
            @csrf
            <input type="hidden" name="remember" value="true" />
            <div class="rounded-md shadow-sm">
                <div>
                    <!-- Email Address -->
                    <input aria-label="Email address" id="email" type="email"
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5 @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                        placeholder="Email address">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="-mt-px">
                    <!-- Password -->
                    <input aria-label="Password" id="password" type="password"
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5 @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password" placeholder="Password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="mt-6 flex items-center justify-between">
                <div class="flex items-center">
                    <!-- Remember -->
                    <input id="remember_me"
                        class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out"
                        type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <div class="text-sm leading-5">
                    <!-- Forgot -->
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"
                        class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </div>

            <div class="mt-6">
                <!-- Submit -->
                <button type="submit"
                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400 transition ease-in-out duration-150"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                    {{ __('Login') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
